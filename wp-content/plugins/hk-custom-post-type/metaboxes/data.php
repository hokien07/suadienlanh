<?php

class Kenshin_Myplugin_Metaboxes_Data {

    private $_create_id = 'ks-mb-data-';

    private $_meta_key = '_ks_mb_data_';

    private $_metabox_id = 'ks-mb-data';

    public function __construct(){
        add_action('add_meta_boxes', array($this, 'create'));

        add_action('save_post', array($this, 'save'));

    }

    public function save($post_id){
        // Có giá trị tương đương với $_POST
        $postVal = $_POST;

        if (!$postVal[$this->_metabox_id . '-nonce']) return $post_id;

        if(!wp_verify_nonce($postVal[$this->_metabox_id . '-nonce'],$this->_metabox_id))  return $post_id;

        if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;

        if(!current_user_can('edit_post', $post_id)) return $post_id;

        $data = array(
            'title'     =>  sanitize_text_field($postVal[$this->_create_id . 'title']),
            'price'     =>  sanitize_text_field($postVal[$this->_create_id . 'price']),
            'author'    =>  sanitize_text_field($postVal[$this->_create_id . 'author']),
            'info'      =>  strip_tags($postVal[$this->_create_id . 'info'])
        );

        foreach ($data as $key => $val){
            update_post_meta($post_id, $this->_meta_key . $key ,$val);
        }


        // Đưa dữ liệu vào table wp_postmeta
        /*  update_post_meta($post_id, $this->_meta_key . 'title',
                     sanitize_text_field($postVal[$this->_create_id . 'title']));
         update_post_meta($post_id, $this->_meta_key . 'price',
                     sanitize_text_field($postVal[$this->_create_id . 'price']));
         update_post_meta($post_id, $this->_meta_key . 'author',
                     sanitize_text_field($postVal[$this->_create_id . 'author']));
         update_post_meta($post_id, $this->_meta_key . 'info',
                     strip_tags($postVal[$this->_create_id . 'info'])); */

    }

    public function create(){
        add_action('admin_enqueue_scripts', array($this,'add_css_file'));

        add_meta_box($this->_metabox_id, 'Infomation KBook', array($this, 'display'), 'kproduct');
    }

    public function display($post){
        wp_nonce_field($this->_metabox_id, $this->_metabox_id . '-nonce');
        echo '<div class="ks-mb-data">';
        // Phần tử form Book Title
        $inputID    = $this->_create_id . 'title';
        $inputValue = get_post_meta($post->ID, $this->_meta_key . 'title', true);
        $html  = '';
        $html .= '<label>Title :</label>';
        $html .= '<input type="text" name= "'.$inputID.'" id="'.$inputID.'" value = "'.$inputValue.'" size="25" />';
        echo $html;

        // Phần tử form Book Price
        $inputID    = $this->_create_id . 'price';
        $inputValue = get_post_meta($post->ID, $this->_meta_key . 'price', true);
        $html  = '';

        $html .= '<label>Price :</label>';
        $html .= '<input type="text" name = "'.$inputID.'" id = "'.$inputID.'"  value = "'.$inputValue.'" size="25" />';
        echo $html;
        // Phần tử form Book Author
        $inputID    = $this->_create_id . 'author';
        $inputValue = get_post_meta($post->ID, $this->_meta_key . 'author', true);
        $html  = '';
        $html .= '<label>Author :</label>';
        $html .= '<input type="text" name = "'.$inputID.'" id = "'.$inputID.'" value = "'.$inputValue.'" size="25" />';
        echo $html;

        // Phần tử form Book Info
        $inputID    = $this->_create_id . 'info';
        $inputValue = get_post_meta($post->ID, $this->_meta_key . 'info', true);;
        $html  = '';
        $html .= '<label>Infomation :</label>';
        $html .= '<textarea name = "'.$inputID.'" id = "'.$inputID.'" rows="6" cols= "50">'.$inputValue.'</textarea>';
        echo $html;

        echo '</div>';
    }

    public function add_css_file(){
        wp_register_style('ks_mb_data', KENSHIN_MP_CSS_URL . '/mb-data.css', array(),'1.0');
        wp_enqueue_style('ks_mb_data');
    }
}