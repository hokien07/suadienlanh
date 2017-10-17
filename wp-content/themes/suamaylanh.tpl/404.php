<?php get_header(); ?>
    <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumb-title"><b><?php echo '404 PAGE' ?></b></div>
                    <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="home">
                            <a itemprop="url" href="<?php echo bloginfo('url') ?>"><span
                                        itemprop="title">Trang chủ</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li><strong itemprop="title"><?php echo '404 PAGE' ?></strong></li>
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
                            <h2>Error 404 - Page Not Found</h2>
                        </div>
                </article>
            </section>

            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>