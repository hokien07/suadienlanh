<?php

class Kenshin_Metaboxes_Main {
    private $_metabox_name = 'ks_metaboxes_option';

    private $_metabox_options = array();

    public function __construct(){
        $metaOptions = array();

        $this->_metabox_options = get_option($this->_metabox_name,$metaOptions);
    }
}