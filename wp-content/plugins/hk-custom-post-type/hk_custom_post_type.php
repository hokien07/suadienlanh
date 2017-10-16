<?php
/**
 * @package Kenshin My Plugin
 * @version 0.1
 */
/*
Plugin Name: Kenshin My Plugin
Plugin URI: http://laptrinhweb.org
Description: Đây là một My Plugin.
Author: Kenshin
Version: 0.1
Author URI: None
*/

define('KENSHIN_MP_PLUGIN_URL', plugin_dir_url(__FILE__));
define('KENSHIN_MP_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('KENSHIN_MP_CSS_URL', KENSHIN_MP_PLUGIN_URL. 'css');
define('KENSHIN_MP_IMG_URL', KENSHIN_MP_PLUGIN_URL. 'images');

define('KENSHIN_MP_INCLUDES_DIR', KENSHIN_MP_PLUGIN_DIR .'/includes');
define('KENSHIN_MP_METABOXES_DIR', KENSHIN_MP_PLUGIN_DIR . '/metaboxes');
define('KENSHIN_MP_POSTS_DIR', KENSHIN_MP_PLUGIN_DIR . '/posts');



if(!is_admin()){
    require_once KENSHIN_MP_INCLUDES_DIR. '/frontend.php';
    new KenshinFrontend();
}else{
    require_once KENSHIN_MP_INCLUDES_DIR. '/backend.php';
    new KenshinBackend();

    require_once KENSHIN_MP_METABOXES_DIR . '/main.php';
    new Kenshin_Myplugin_Metaboxes_Main();
}

require_once KENSHIN_MP_POSTS_DIR . '/product.php';
new Kenshin_Myplugin_Custom_Post_Product();