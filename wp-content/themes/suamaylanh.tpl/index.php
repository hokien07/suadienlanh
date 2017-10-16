<?php get_header(); ?>

<?php global $hk_options; ?>

<section class="awe-section-1">
	<section class="camera_container">
		<div id="camera" class="camera_wrap">
		<div data-src="<?php echo $hk_options['slide-image-1']['url'] ?>">
			<div class="camera_caption fadeIn">
				<div class="container">
                    <p><a href="#"><?php echo $hk_options['slide-text-1'] ?></a></p>
				</div>
			</div>
		</div>
		<div data-src="<?php echo $hk_options['slide-image-2']['url'] ?>">
			<div class="camera_caption fadeIn">
				<div class="container">
					<p><a href="#"><?php echo $hk_options['slide-text-2'] ?></a></p>
				</div>
			</div>
		</div>
	</div>
	</section>
</section>
<section class="awe-section-2">
	<section class="bg-color">
		<div class="container">
			<div class="banner_wr">
				<ul class="banner">


					<li>
						<h3><?php echo $hk_options['header-title-1'] ?></h3>
						<h6><?php echo $hk_options['header-sologan-1'] ?></h6>
						<p><?php echo $hk_options['header-content-1'] ?></p>
						<a href="<?php bloginfo('url') ?>/gioi-thieu" class="btn">Chi tiết</a>
					</li>
					<li>
						<h3><?php echo $hk_options['header-title-2'] ?></h3>
						<h6><?php echo $hk_options['header-sologan-2'] ?></h6>
						<p><?php echo $hk_options['header-content-2'] ?></p>
						<a href="<?php bloginfo('url') ?>/tin-tuc" class="btn">Chi tiết</a>
					</li>
					<li>
						<h3><?php echo $hk_options['header-title-3'] ?></h3>
						<h6><?php echo $hk_options['header-sologan-3'] ?></h6>
						<p><?php echo $hk_options['header-content-3'] ?></p>
						<a href="<?php bloginfo('url') ?>/lien-he" class="btn">Chi tiết</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
</section>
<section class="awe-section-3">
	<section class="well center bg-color">
		<div class="container">
			<h2>Dịch vụ </h2>
			<ul class="row product-list">
				<li class="col-md-2 col-sm-4 col-xs-12">
					<div class="icon">
						<img src="<?php echo  $hk_options['dv-image-1']['url'] ?>" alt="<?php echo $hk_options['dv-content-1'] ?>">
					</div>
					<h5><?php echo $hk_options['dv-title-1'] ?></h5>
					<p><?php echo $hk_options['dv-content-1'] ?></p>
				</li>
				<li class="col-md-2 col-sm-4 col-xs-12">
					<div class="icon">
						<img src="<?php echo $hk_options['dv-image-2']['url'] ?>" alt="<?php echo $hk_options['dv-content-2'] ?>">
					</div>
					<h5><?php echo $hk_options['dv-title-2'] ?></h5>
					<p><?php echo $hk_options['dv-content-2'] ?></p>
				</li>
				<li class="col-md-2 col-sm-4 col-xs-12">
					<div class="icon">
						<img src="<?php echo $hk_options['dv-image-3']['url'] ?>" alt="<?php echo $hk_options['dv-content-3'] ?>">
					</div>
					<h5><?php echo $hk_options['dv-title-3'] ?></h5>
					<p><?php echo $hk_options['dv-content-3'] ?></p>
				</li>
				<li class="col-md-2 col-sm-4 col-xs-12">
					<div class="icon">
						<img src="<?php echo $hk_options['dv-image-4']['url'] ?>" alt="<?php echo $hk_options['dv-content-4'] ?>">
					</div>
					<h5><?php echo $hk_options['dv-title-4'] ?></h5>
					<p><?php echo $hk_options['dv-content-4'] ?></p>
				</li>
				<li class="col-md-2 col-sm-4 col-xs-12">
					<div class="icon">
						<img src="<?php echo $hk_options['dv-image-5']['url'] ?>" alt="<?php echo $hk_options['dv-content-5'] ?>">
					</div>
					<h5><?php echo $hk_options['dv-title-5'] ?></h5>
					<p><?php echo $hk_options['dv-content-5'] ?></p>
				</li>
				<li class="col-md-2 col-sm-4 col-xs-12">
					<div class="icon">
						<img src="<?php echo $hk_options['dv-image-6']['url'] ?>" alt="<?php echo $hk_options['dv-content-6'] ?>">
					</div>
					<h5><?php echo $hk_options['dv-title-6'] ?></h5>
					<p><?php echo $hk_options['dv-content-6'] ?></p>
				</li>
			</ul>
		</div>
	</section>
</section>
<section class="awe-section-4">
	<section class="well1 center">
		<div class="container">
			<h2>Tin Nổi Bật</h2>
			<div class="row off1">
				<div class="products-view-grid">
                <?php
                //lấy 10 tin ngẫu nhiên trong category tin tức
                $postquery = new WP_Query();
                $postquery->query('post_status=publish&showposts=10&post_type=post&cat=1&posts_per_page=10&orderby=rand');
                if ($postquery->have_posts()) {
                    while ($postquery->have_posts()) : $postquery->the_post();
                        $do_not_duplicate = $post->ID;
                        ?>

					<div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 xs-margin-top-15">
						<div class="product-box" data-toggle="popover" data-trigger="hover" data-placement="top">
							<div class="product-thumbnail">
								<a href="<?php the_permalink()?>" title="<?php the_title() ?>">
                                    <?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'img-responsive center-block') ); ?>
								</a>
							</div>
							<div class="product-info a-center">
								<h3 class="product-name">
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a>
								</h3>
							</div>
						</div>
					</div>

                    <?php endwhile; }  wp_reset_postdata(); ?>
				</div>
			</div>
			<a href="#" class="btn btn-primary">Xem tất cả</a>
		</div>
	</section>
</section>
<section class="awe-section-5">
	<section style="background-image:url(<?php echo bloginfo("template_directory");  ?>/images/testimonial.jpg);" data-mobile="true" class="well2 mobile-center parallax">
		<div class="container">
			<h2 class="center">Khách hàng nói gì về chúng tôi</h2>
			<div class="row">
				<blockquote class="col-xs-12 col-sm-4">
					<img src="<?php echo $hk_options['hinh-khach-1']['url'] ?>" alt="Anh VLXD">
					<p>
						<q><?php echo $hk_options['noi-dung-1']?></q>
					</p>
					<cite><?php echo $hk_options['ten-khach-hang-1']?></cite>
				</blockquote>
				<blockquote class="col-xs-12 col-sm-4">
					<img src="<?php echo $hk_options['hinh-khach-2']['url'] ?>" alt="Anh VLXD">
					<p>
						<q><?php echo $hk_options['noi-dung-2']?></q>
					</p>
					<cite><?php echo $hk_options['ten-khach-hang-2']?></cite>
				</blockquote>
				<blockquote class="col-xs-12 col-sm-4">
					<img src="<?php echo $hk_options['hinh-khach-3']['url']?>" alt="Anh VLXD">
					<p>
						<q><?php echo $hk_options['noi-dung-3']?></q>
					</p>
					<cite><?php echo $hk_options['ten-khach-hang-3']?></cite>
				</blockquote>
			</div>
		</div>
	</section>
</section>
<section class="awe-section-6">
	<section class="well1 center">
		<div class="container">
			<h2>Tin Tức mới</h2>
			<div class="row off1">
				<div class="products-view-grid">
                    <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=post&cat=1'); ?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 xs-margin-top-15">
						<div class="product-box" data-toggle="popover" data-trigger="hover" data-placement="top">
							<div class="product-thumbnail">
								<a href="<?php the_permalink(); ?>" title="Gạch lát sân loại 2">
                                    <?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'img-responsive center-block') ); ?>
								</a>
							</div>
							<div class="product-info a-center">
								<h3 class="product-name">
									<a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><?php the_title() ?></a>
								</h3>
							</div>
						</div>
					</div>

                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
			</div>
			<a href="<?php bloginfo('url') ?>/tin-tuc" class="btn btn-primary">Xem tất cả</a>
		</div>
	</section>
</section>
<section class="awe-section-7">
	<section class="well1 center" style=" background: #ebebeb; ">
		<div class="container">
			<h2>Khách hàng của chúng tôi</h2>
			<ul class="row off1 list">
                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=post&cat=3'); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <li class="col-xs-12 col-sm-3 margin-top-10">
                        <a href="<?php the_permalink() ?>">
                            <?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'img-responsive center-block') ); ?>
                        </a>
                    </li>
                <?php endwhile; wp_reset_postdata(); ?>
			</ul>
		</div>
	</section>
</section>

<?php get_footer(); ?>