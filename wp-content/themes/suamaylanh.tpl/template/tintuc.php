<?php
/*
 Template Name: Trang Tin Tức
 */
get_header(); ?>
    <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumb-title"><b><?php the_title() ?></b></div>
                    <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="home">
                            <a itemprop="url" href="<?php bloginfo('url') ?>"><span itemprop="title">Trang chủ</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li>
                            <a itemprop="url" href="<?php the_permalink() ?>"><span
                                    itemprop="title"><?php the_title() ?></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <section class="right-content col-md-9 col-md-push-3">
                <div class="box-heading">
                    <h1 class="title-head hidden"><?php the_category(',') ?></h1>
                </div>
                <section class="list-blogs blog-main">
                    <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=post&cat=2'); ?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <article class="blog-item">
                            <div class="row">
                                <div class="blog-item-thumbnail col-49">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo get_the_post_thumbnail($post_id, 'full', array('class' => 'img-responsive center-block')); ?>
                                    </a>
                                </div>
                                <div class="blog-item-info col-59">
                                    <h3 class="blog-item-name"><a
                                            href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                    <div class="post-time">
                                        Viết bởi <span><?php the_author() ?></span>, <?php echo the_date() ?>
                                    </div>
                                    <p class="blog-item-summary"><?php the_excerpt() ?></p>
                                    <a class="btn btn-primary" href="<?php the_permalink() ?>">Đọc thêm</a>
                                </div>
                            </div>
                        </article>
                        <?php endwhile; wp_reset_postdata(); ?>
                </section>
                <?php
                    //phan trang
                    hk_phan_trang();
                ?>
            </section>
            <?php get_sidebar(); ?>
        </div>
    </div>
    <div class="ab-module-article-mostview"></div>

    </div><!--/.end post class-->

<?php get_footer(); ?>