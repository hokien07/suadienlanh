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

    //phân trang
    function hk_phan_trang ()
    {
        global $wp_query;
        $big = 999999999; // need an unlikely integer
        $pages = paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
            'type' => 'array',
        ));
        if (is_array($pages)) {
            $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
            echo ' <div class="row">';
            echo '<div class="col-xs-12 text-xs-left">';
            echo '<nav class="clearfix"><ul class="pagination clearfix f-left">';
            foreach ($pages as $page) {
                echo '<li class="page-item disabled"><a class="page-link" href="{previous_posts_link()}">«</a></li>';
                echo '<li class="page-item"><a class="page-link" href="{$page}">$pages</a></li>';

                echo '<li class="page-item"><a class="page-link" href="{next_posts_link()}">»</a></li>';
                echo '</ul></nav>';
                echo '</div></div>';
            }
        }
    }

?>