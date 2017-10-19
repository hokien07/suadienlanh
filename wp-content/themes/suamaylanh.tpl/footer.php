<?php global $hk_options; ?>
<footer>
    <section class="map">
	<?php echo $hk_options['map-link'] ?>
</section>

    <section class="well1 ins1 mobile-center">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<h5><?php echo $hk_options['footer-title-1'] ?></h5>
                <p><?php echo $hk_options['footer-content-1'] ?></p>
			</div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <h5><?php echo $hk_options['footer-title-2'] ?></h5>
                <div><?php echo $hk_options['footer-content-2'] ?></div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <h5>Nhận Tin Khuyến Mãi</h5>
                <?php echo do_shortcode('[contact-form-7 id="41" title="Footer Liên Hệ"]') ?>
            </div>
		</div>
	</div>
</section>

    <section class="copyright">
	<div class="container">
		<span>© <?php echo $hk_options['copy'] ?> <span class="fot-line">|</span> Cung cấp bởi <a href="hokien07.net" title="" target="_blank">hokien07</a></span>
	</div>
</section>
</footer>
<div class="hotline-fixed hotline-fxed-1"
     style="
        bottom: 2px;
        right: 2px;
        background: rgba(0, 0, 0, 0) linear-gradient(to right, #422014, #422014) repeat scroll 0 0 / 100% auto;
        border-radius: 3px;
        cursor: pointer;
        height: 40px;
        line-height: 40px;
        padding: 0 10px;
        position: fixed;
        transition: all 0.8s ease 0s;
        width: 200px;
        z-index: 999;
    ">
    <img src="http://cdn.weblando.vn/images/hotline1.png" alt="" class="animate-flicker"
         style="
            position: absolute;
            width: 40px;
            ">
    <a href="tel:<?php echo $hk_options['hotline'] ?>" class="affect_text" style="
            color: #fff;
            display: inline-block;
            font-family: sans-serif;
            font-size: 18px;
            font-weight: bold;
            letter-spacing: 1px;
            text-decoration: none;
            text-indent: 50px;
            animation: my 700ms infinite;
        "><?php echo $hk_options['hotline'] ?></a>
</div>
<script src="<?php bloginfo('template_directory') ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/jquery-migrate.js"></script>
<?php wp_footer(); ?>
</main>
</div>
</body>
</html>
