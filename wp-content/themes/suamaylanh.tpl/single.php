<?php global $hk_options; ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumb-title"><b><?php the_title(); ?></b></div>
                    <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="home">
                            <a itemprop="url" href="<?php echo bloginfo('url') ?>"><span
                                        itemprop="title">Trang chủ</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li>
                            <a itemprop="url" href="<?php the_permalink()  ?>"><span itemprop="title"><?php the_category(',') ?></span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li><strong itemprop="title"><?php the_title(); ?></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container article-wraper">
        <div class="row">
            <section class="right-content col-lg-9 col-lg-push-3">
                <article class="article-main" itemscope itemtype="http://schema.org/Article">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <div class="post-time">
                                Viết bởi <span><?php the_author(); ?></span>, <?php echo the_date() ?>
                            </div>
                            <div class="article-details">
                                <div class="article-image">
                                    <a href="<?php the_permalink() ?>">
                                        <?php echo get_the_post_thumbnail($post_id, 'full', array('class' => 'img-responsive center-block')); ?>
                                    </a>
                                </div>
                                <div class="article-content">
                                    <div class="rte">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row row-noGutter tag-share">
                                <div class="col-xs-12 col-sm-12 a-left">
                                    <div class="social-media" data-permalink="">
                                        <span class="inline">Chia sẻ: </span>
                                        <a target="_blank" href="<?php echo $hk_options['facebook'] ?>"
                                           class="share-facebook" title="Chia sẻ lên Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a target="_blank" href="<?php echo $hk_options['twitter'] ?>"
                                           class="share-twitter" title="Chia sẻ lên Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="<?php echo $hk_options['printerest'] ?>"
                                           class="share-pinterest" title="Chia sẻ lên pinterest">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                        <a target="_blank" href="<?php echo $hk_options['google-plus'] ?>"
                                           class="share-google" title="+1">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div id="article-comments">
                                <h5 class="title-form-coment">BÌNH LUẬN:</h5>
                                <div class="hidden">1 bình luận</div>
                                <?php
                                //lấy 10 comment từ database
                                $cmt = get_comments(array(
                                    'status' => 'approve',
                                    'number'=> 10,
                                ));

                                foreach ($cmt as $value) { ?>

                                <div class="article-comment clearfix">
                                    <figure class="article-comment-user-image">
                                        <?php echo get_avatar($value->comment_author_email, 150 ); ?>
                                    </figure>

                                    <div class="article-comment-user-comment">
                                        <p class="user-name-comment"><strong><?php echo $value->comment_author; ?></strong>
                                            <a href="#article_comments" class="btn-link pull-xs-right hidden">Trả
                                                lời</a></p>
                                        <span class="article-comment-date-bull"><?php echo $value->comment_date; ?></span>
                                        <p><?php echo $value->comment_content ?></p>
                                    </div>

                                    <?php } ?>

                            </div>

                            <?php comment_form() ?>
                        </div>
                    </div>
                </article>
            </section>

            <?php get_sidebar(); ?>
        </div>
    </div>
    <?php endwhile; endif; ?>
    <?php get_footer(); ?>




