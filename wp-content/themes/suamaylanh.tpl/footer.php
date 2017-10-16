<?php global $hk_options; ?>
<footer>
    <section class="map">
	<?php echo $hk_options['map-link'] ?>
</section>

    <section class="well1 ins1 mobile-center">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<h5>Giới Thiệu</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, esse ullam. Aspernatur ducimus error exercitationem inventore iusto, quam suscipit voluptate.</p>
			</div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <h5>Facebook</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, esse ullam. Aspernatur ducimus error exercitationem inventore iusto, quam suscipit voluptate.</p>
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

<a href="tel:0972355922" class="fancybox">
    <div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show" id="coccoc-alo-phoneIcon" style="right:5%; top: 10%;">
        <div class="coccoc-alo-ph-circle"></div>
        <div class="coccoc-alo-ph-circle-fill"></div>
        <div class="coccoc-alo-ph-img-circle"></div>
    </div>
</a>
</main>
</div>
<?php wp_footer(); ?>

<!-- Product detail JS,CSS -->
<script src='<?php echo bloginfo("template_directory");  ?>/js/jquery.min.js' type='text/javascript'></script>
<script src='<?php echo bloginfo("template_directory");  ?>/js/jquery-migrate.js' type='text/javascript'></script>
<script src='<?php echo bloginfo("template_directory");  ?>/js/jquery.easing.js' type='text/javascript'></script>
<!-- Plugin JS -->

<script src="<?php echo bloginfo("template_directory");  ?>/js/bootstrap.min.js"></script>
<!-- Main JS -->
<script src='<?php echo bloginfo("template_directory");  ?>/js/main.js' type='text/javascript'></script>


<script src='<?php echo bloginfo("template_directory");  ?>/js/camera.js' type='text/javascript'></script>
<script src='<?php echo bloginfo("template_directory");  ?>/js/jquery.rd-navbar.js' type='text/javascript'></script>
<script src='https://maps.google.com/maps/api/js' type='text/javascript'></script>
<script src='<?php echo bloginfo("template_directory");  ?>/js/jquery.rd-google-map.js' type='text/javascript'></script>
<script src='<?php echo bloginfo("template_directory");  ?>/js/script.js' type='text/javascript'></script>

<!-- Don't forget analytics -->

</body>

</html>
