<footer>
<section class="map">
	<div id="google-map" class="map_model"></div>
	<ul class="map_locations">
		<li data-x="105.771302" data-y="21.023774">
			<p>Cửa hàng Anh VLXD - Mỹ Đình 1, Hà Nội VN</p>
		</li>
	</ul>
	<script>
		;
		(function($) {
			'use strict'
			var def_settings = {
				cntClass: 'map',
				mapClass: 'map_model',
				locationsClass: 'map_locations',
				marker: {
					basic: "//bizweb.dktcdn.net/100/189/302/themes/535974/css/gmap_marker.png?1506508880290",
					active: "//bizweb.dktcdn.net/100/189/302/themes/535974/css/gmap_marker_active.png?1506508880290"
				},
				styles: []
			},
				defaults = {
					map: {
						x: 105.771302,
					y: 21.023774,
				zoom: 14
		},
		 locations: []
		 };
		 var getLocations = function($map, settings) {
			var $locations = $map.parent().find('.' + settings.locationsClass).find('li');
			var locations = [];
			if ($locations.length > 0) {
				$locations.each(function(i) {
					var $loc = $(this);
					if ($loc.data('x') && $loc.data('y')) {
						locations[i] = {
							x: $loc.data('x'),
							y: $loc.data('y'),
							basic: $loc.data('basic') ? $loc.data('basic') : settings.marker.basic,
							active: $loc.data('active') ? $loc.data('active') : settings.marker.active
						}
						if (!$.trim($loc.html())) {
							locations[i].content = false;
						} else {
							locations[i].content = '<div class="iw-content">' + $loc.html() + '</div>';
						}
					}
				});
			}
			return locations;
		}
		$.fn.googleMap = function(settings) {
			settings = $.extend(true, {}, def_settings, settings);
			$(this).each(function() {
				var $this = $(this);
				var options = $.extend(true, {}, defaults, {
					map: {
						x: $this.data('x'),
						y: $this.data('y'),
						zoom: $this.data('zoom')
					},
					locations: getLocations($this, settings)
				});
				var map = new google.maps.Map(this, {
					center: new google.maps.LatLng(parseFloat(options.map.y), parseFloat(options.map.x)),
					scrollwheel: false,
					styles: settings.styles,
					zoom: options.map.zoom
				}),
					infowindow = new google.maps.InfoWindow(),
					markers = [];
				for (var i in options.locations) {
					markers[i] = new google.maps.Marker({
						position: new google.maps.LatLng(parseFloat(options.locations[i].y), parseFloat(options.locations[i].x)),
						map: map,
						icon: options.locations[i].basic,
						index: i
					});
					if (options.locations[i].content) {
						google.maps.event.addListener(markers[i], 'click', function() {
							for (var j in markers) {
								markers[j].setIcon(options.locations[j].basic);
							}
							infowindow.setContent(options.locations[this.index].content);
							infowindow.open(map, this);
							$('.gm-style-iw').parent().parent().addClass("gm-wrapper");
							this.setIcon(options.locations[this.index].active);
						});
						google.maps.event.addListener(infowindow, 'closeclick', function() {
							for (var j in markers) {
								markers[j].setIcon(options.locations[j].basic);
							}
						});
					}
				}
				google.maps.event.addDomListener(window, 'resize', function() {
					map.setCenter(new google.maps.LatLng(parseFloat(options.map.y), parseFloat(options.map.x)));
				});
			});
		};
		})(jQuery);
	</script>
</section>
<section class="well1 ins1 mobile-center">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3">
				<h5>Thông tin</h5>
				<ul>
					<li><a href="index.html">Trang chủ</a></li>
					<li><a href="#">Sản phẩm</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Demo</a></li>
					<li><a href="#">Liên hệ</a></li>
				</ul>
				<h5>Hỗ trợ</h5>
				<ul>
					<li><a href="#">Tìm kiếm</a></li>
					<li><a href="#">Giới thiệu</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<h5>Thông tin</h5>
				<ul>
					<li><a href="index.html">Trang chủ</a></li>
					<li><a href="#">Sản phẩm</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Demo</a></li>
					<li><a href="#">Liên hệ</a></li>
				</ul>
				<h5>Hỗ trợ</h5>
				<ul>
					<li><a href="#">Tìm kiếm</a></li>
					<li><a href="#">Giới thiệu</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<h5>Thông tin</h5>
				<ul>
					<li><a href="index.html">Trang chủ</a></li>
					<li><a href="#">Sản phẩm</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Demo</a></li>
					<li><a href="#">Liên hệ</a></li>
				</ul>
				<h5>Hỗ trợ</h5>
				<ul>
					<li><a href="#">Tìm kiếm</a></li>
					<li><a href="#">Giới thiệu</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="copyright">
	<div class="container">
		<span>© Bản quyền thuộc về <b>DQDT Team</b> <span class="fot-line">|</span> Cung cấp bởi <a href="" title="" target="_blank">Bizweb</a></span>
	</div>
</section>
</footer>
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
