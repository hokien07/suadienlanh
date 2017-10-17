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

    //get tags
    function hk_get_tags() {
        $posttags = get_the_tags();
        if ($posttags) {
            foreach($posttags as $tag) {?>
                <span class="tag-item"><a href="<?php the_permalink(); ?>"><?php echo  $tag->name ?></a></span>
            <?php }
        }
    }

    //nav sidebar
    function hk_nav_sidebar() {?>
        <nav class="nav-category  navbar-toggleable-md" >
            <ul class="nav navbar-pills">
                <li class="nav-item">
                    <i class="fa fa-caret-right"></i>
                    <a class="nav-link" href="<?php bloginfo('url') ?>">Trang chủ</a></li>
                <li class="nav-item">
                    <i class="fa fa-caret-right"></i>
                    <a href="<?php bloginfo('url') ?>/gioi-thieu" class="nav-link">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <i class="fa fa-caret-right"></i>
                    <a class="nav-link" href="<?php bloginfo('url') ?>/tin-tuc">Tin tức</a>
                </li>
                <li class="nav-item">
                    <i class="fa fa-caret-right"></i>
                    <a href="<?php bloginfo('url') ?>/lien-he" class="nav-link">Liên hệ</a>
                </li>
            </ul>
        </nav>
    <?php  }

    //bai viet lien quan category
    function hk_bai_viet_lien_quan() {
        global $post;
        $categories = get_the_category($post->ID);
        if ($categories)
        {
            $category_ids = array();
            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

            $args=array(
                'category__in' => $category_ids,
                'post__not_in' => array($post->ID),
                'showposts'=>5, // Số bài viết bạn muốn hiển thị.
                'caller_get_posts'=>1
            );
            $my_query = new wp_query($args);
            if( $my_query->have_posts() ) {
                while ($my_query->have_posts())
                {
                    $my_query->the_post();
                    ?>
                    <div class="blog-list blog-image-list">
                        <div class="loop-blog">
                            <div class="thumb-left">
                                <a href="<?php the_permalink(); ?>">
                                    <?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' =>'img-reponsive') ); ?>
                                </a>
                            </div>
                            <div class="name-right">
                                <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
        }
    }

    //đăng ký css và javacript
    function wpdocs_theme_name_scripts() {
        wp_enqueue_script( 'jquery.easing', get_template_directory_uri() . '/js/jquery.easing.js', array(), '1.0.0', true );
        wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
        wp_enqueue_script( 'camera', get_template_directory_uri() . '/js/camera.js', array(), '1.0.0', true );
        wp_enqueue_script( 'jquery.rd-navbar', get_template_directory_uri() . '/js/jquery.rd-navbar.js', array(), '1.0.0', true );
        wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
        wp_enqueue_script( 'header', get_template_directory_uri() . '/js/header.js', array(), '1.0.0', true );

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
?>