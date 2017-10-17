<?php get_header(); ?>
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
                        <li><strong itemprop="title"><?php the_title(); ?></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
            <div class="container article-wraper">
                <div class="row">
                    <section class="right-content col-lg-9 col-lg-push-3">
                        <article class="article-main" itemscope itemtype="http://schema.org/Article">
                            <div class="row">
                                <div class="col-lg-12">
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
                        </article>
                    </section>

                    <?php get_sidebar(); ?>
                </div>
            </div>

		</div>
		<?php endwhile; endif; ?>
<?php get_sidebar(); ?>

<?php get_footer(); ?>