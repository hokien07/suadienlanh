function include(scriptUrl) {
	document.write('<script src="' + scriptUrl + '"></script>');
}

function isIE() {
	var myNav = navigator.userAgent.toLowerCase();
	return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
};

(function($) {
	var o = $('html');
	if (o.hasClass('desktop')) {		
		include("//bizweb.dktcdn.net/100/189/302/themes/535974/assets/tmstickup.js");
		$(document).ready(function() {
			$('#stuck_container').TMStickUp({})
		});
	}
})(jQuery);;



(function($) {
	var o = document.getElementById("google-map");
	if (o) {
		
		$(document).ready(function() {
			var o = $('#google-map');
			if (o.length > 0) {
				o.googleMap({
					styles: [{
						"featureType": "landscape",
						"stylers": [{
							"saturation": -100
						}, {
							"lightness": 65
						}, {
							"visibility": "on"
						}]
					}, {
						"featureType": "poi",
						"stylers": [{
							"saturation": -100
						}, {
							"lightness": 51
						}, {
							"visibility": "simplified"
						}]
					}, {
						"featureType": "road.highway",
						"stylers": [{
							"saturation": -100
						}, {
							"visibility": "simplified"
						}]
					}, {
						"featureType": "road.arterial",
						"stylers": [{
							"saturation": -100
						}, {
							"lightness": 30
						}, {
							"visibility": "on"
						}]
					}, {
						"featureType": "road.local",
						"stylers": [{
							"saturation": -100
						}, {
							"lightness": 40
						}, {
							"visibility": "on"
						}]
					}, {
						"featureType": "transit",
						"stylers": [{
							"saturation": -100
						}, {
							"visibility": "simplified"
						}]
					}, {
						"featureType": "administrative.province",
						"stylers": [{
							"visibility": "off"
						}]
					}, {
						"featureType": "water",
						"elementType": "labels",
						"stylers": [{
							"visibility": "on"
						}, {
							"lightness": -25
						}, {
							"saturation": -100
						}]
					}, {
						"featureType": "water",
						"elementType": "geometry",
						"stylers": [{
							"hue": "#ffff00"
						}, {
							"lightness": -25
						}, {
							"saturation": -97
						}]
					}]
				});
			}
		});
	}
})
(jQuery);;
(function($) {
	
})(jQuery);;

$(function() {
	var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
	ua = navigator.userAgent,
	gestureStart = function() {
		viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
	},
	scaleFix = function() {
		if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
			viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
			document.addEventListener("gesturestart", gestureStart, false);
		}
	};
	scaleFix();
	if (window.orientation != undefined) {
		var regM = /ipod|ipad|iphone/gi,
		result = ua.match(regM);
		if (!result) {
			$('.sf-menus li').each(function() {
				if ($(">ul", this)[0]) {
					$(">a", this).toggle(function() {
						return false;
					}, function() {
						window.location.href = $(this).attr("href");
					});
				}
			})
		}
	}
});
var ua = navigator.userAgent.toLocaleLowerCase(),
regV = /ipod|ipad|iphone/gi,
result = ua.match(regV),
userScale = "";
if (!result) {
	userScale = ",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0' + userScale + '">');;
(function($) {
	var o = $('#camera');
	if (o.length > 0) {
		
	
		
		$(document).ready(function() {
			o.camera({
				autoAdvance: true,
				height: '39.892578125%',
				minHeight: '300px',
				pagination: false,
				thumbnails: false,
				playPause: false,
				hover: false,
				loader: 'none',
				navigation: true,
				navigationHover: false,
				mobileNavHover: false,
				fx: 'simpleFade'
			})
		});
	}
})(jQuery);;