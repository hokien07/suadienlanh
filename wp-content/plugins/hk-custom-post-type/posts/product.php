<?php

class Kenshin_Myplugin_Custom_Post_Product
{

    public function __construct()
    {
        add_action('init', array( $this, 'create'));
        add_filter('pre_get_posts', array($this, 'show_home'));
    }

    public function show_home($query){
        if (is_home() && $query->is_main_query()){
            $query->set('post_type',array('post','kproduct'));
        }
        return $query;
    }

    public function create()
    {
        $labels = array(
            'name' 				      => __('Sản Phẩm'),
            'singular_name' 	      => __('Sản Phẩm'),
            'menu_name'			      => __('KBook'),
            'name_admin_bar' 	      => __('Sản Phẩm'),
            'add_new'			      => __('Thêm Sản Phẩm'),
            'add_new_item'		      => __('Thêm Sản Phẩm Mới'),
            'search_items' 		      => __('Tìm Kiếm Sản Phẩm'),
            'not_found'			      => __('Không có sản phẩm được tìm thấy'),
            'not_found_in_trash'      => __('No products found in Trash'),
            'view_item' 		      => __('Xem Sản Phẩm'),
            'edit_item'			      => __('Sửa Sản Phẩm'),
        );

        $args = array(
            'labels' => $labels,
            'description'           => 'Đây là Custom Post Type Sản Phẩm do hokien07 viết',
            'menu_icon'             => KENSHIN_MP_IMG_URL . '/hk_custom_post_type.png',
            'public'                => true, // Kích hoạt custom post
            'hierarchical'          => true,
            'show_in_nav_menus'     => true, // Hiển thị trong Appearance -> Menus
            'show_in_admin_bar'     => true,  // Hiển thị trên thanh Admin bar màu đen.
            'menu_position'         => 5, // Thứ tự vị trí hiển thị trong menu
            'supports'              => array('title' ,'editor','author','thumbnail','excerpt','trackbacks' ,'custom-fields' ,'comments','revisions' ,'page-attributes','post-formats'),
            'rewrite'               => array('slug'=>'kproduct'),
            '_edit_link'            => 'post.php?post=%d',
            'has_archive'           => true, // //Cho phép lưu trữ
            'capability_type'       => 'post', // Phân quyền

        );

        register_post_type('kproduct', $args); // Phương thức đăng ký & nạp custom post vào hệ thống.
    }
}