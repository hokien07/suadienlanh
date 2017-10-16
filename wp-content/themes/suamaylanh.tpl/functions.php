<?php
require_once dirname(__FILE__) . '/class-tgm-plugin-activation.php';
require_once dirname(__FILE__) . '/core/option.php';
require_once dirname(__FILE__) . '/core/template_function.php';

	// Add RSS links to <head> section
	automatic_feed_links();
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    //Add theme support.
    add_theme_support( 'post-thumbnails' );


?>