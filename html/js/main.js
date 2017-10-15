window.awe = window.awe || {};
awe.init = function () {
	awe.showPopup();
	awe.hidePopup();	
};

$('[data-toggle="tooltip"]').tooltip({container: 'body'}); 
$('[data-toggle="popover"]').popover({
	html: true,
	content: function() {
        var content = $(this).find('.product-summary');
        try { content = $(content).html() } catch(e) {/* Ignore */}
        return content;
	}
});


$('.nav-category .fa-angle-down').click(function(e){
	$(this).parent().toggleClass('active');
});

/********************************************************
# toggle-menu
********************************************************/

$('.toggle-menu .caret').click(function() {
	$(this).closest('li').find('> .sub-menu').slideToggle("fast");
	$(this).closest('li').toggleClass("open");
	return false;              
}); 



/********************************************************
# Dropdown
********************************************************/
$('.dropdown-toggle').click(function() {
	$(this).parent().toggleClass('open'); 	
}); 
$('#dropdownMenu1').click(function() {
	var ofh= $(this).parent().find('.dropdown-menu').width();

	var mm = $('.menu-mobile'). offset().left;

	$('.site-header-inner button.btn-close').css('left',ofh - mm +'px');
}); 
$('.btn-close').click(function() {
	$(this).parents('.dropdown').toggleClass('open');
}); 
$('body').click(function(event) {
	if (!$(event.target).closest('.dropdown').length) {
		$('.dropdown').removeClass('open');
	};
});

$('body').click(function(event) {
	if (!$(event.target).closest('.collection-selector').length) {
		$('.list_search').css('display','none');
	};
});

/********************************************************
# Tab
********************************************************/
$(".e-tabs:not(.not-dqtab)").each( function(){
	$(this).find('.tabs-title li:first-child').addClass('current');
	$(this).find('.tab-content').first().addClass('current');

	$(this).find('.tabs-title li').click(function(){
		var tab_id = $(this).attr('data-tab');

		var url = $(this).attr('data-url');
		$(this).closest('.e-tabs').find('.tab-viewall').attr('href',url);

		$(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
		$(this).closest('.e-tabs').find('.tab-content').removeClass('current');

		$(this).addClass('current');
		$(this).closest('.e-tabs').find("#"+tab_id).addClass('current');
	});    
});

/********************************************************
# SHOW NOITICE
********************************************************/
awe.showNoitice = function (selector) {   
	$(selector).animate({right: '0'}, 500);
	setTimeout(function() {
		$(selector).animate({right: '-300px'}, 500);
	}, 3500);
};

/********************************************************
# SHOW LOADING
********************************************************/
awe.showLoading = function (selector) {    
	var loading = $('.loader').html();
	$(selector).addClass("loading").append(loading);  
}

/********************************************************
# HIDE LOADING
********************************************************/
awe.hideLoading = function (selector) {  
	$(selector).removeClass("loading"); 
	$(selector + ' .loading-icon').remove();
}


/********************************************************
# SHOW POPUP
********************************************************/
awe.showPopup = function (selector) {
	$(selector).addClass('active');
};

/********************************************************
# HIDE POPUP
********************************************************/
awe.hidePopup = function (selector) {
	$(selector).removeClass('active');
}


/************************************************/
$(document).on('click','.overlay, .close-popup, .btn-continue, .fancybox-close', function() {   
	awe.hidePopup('.awe-popup'); 
	setTimeout(function(){
		$('.loading').removeClass('loaded-content');
	},500);
	return false;
})


$(document).on('keydown','#qty, #quantity-detail, .number-sidebar',function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
$(document).on('click','.qtyplus',function(e){
	e.preventDefault();   
	fieldName = $(this).attr('data-field'); 
	var currentVal = parseInt($('input[data-field='+fieldName+']').val());
	if (!isNaN(currentVal)) { 
		$('input[data-field='+fieldName+']').val(currentVal + 1);
	} else {
		$('input[data-field='+fieldName+']').val(0);
	}
});

$(document).on('click','.qtyminus',function(e){
	e.preventDefault(); 
	fieldName = $(this).attr('data-field');
	var currentVal = parseInt($('input[data-field='+fieldName+']').val());
	if (!isNaN(currentVal) && currentVal > 1) {          
		$('input[data-field='+fieldName+']').val(currentVal - 1);
	} else {
		$('input[data-field='+fieldName+']').val(1);
	}
});


jQuery(document).ready(function ($) {

	$('.owl-carousel:not(.not-dqowl)').each( function(){
		var small_xs_item = $(this).attr('data-smxs-items');
		var xs_item = $(this).attr('data-xs-items');
		var md_item = $(this).attr('data-md-items');
		var lg_item = $(this).attr('data-lg-items');
		var sm_item = $(this).attr('data-sm-items');	
		var margin=$(this).attr('data-margin');
		var dot=$(this).attr('data-dot');
		var nav=$(this).attr('data-nav');
		if (typeof margin !== typeof undefined && margin !== false) {    
		} else{
			margin = 30;
		}
		if (typeof small_xs_item !== typeof undefined && small_xs_item !== false) {    
		} else{
			small_xs_item = 1;
		}
		if (typeof xs_item !== typeof undefined && xs_item !== false) {    
		} else{
			xs_item = 1;
		}
		if (typeof sm_item !== typeof undefined && sm_item !== false) {    

		} else{
			sm_item = 3;
		}	

		if (typeof md_item !== typeof undefined && md_item !== false) {    
		} else{
			md_item = 3;
		}
		if (typeof lg_item !== typeof undefined && lg_item !== false) {    
		} else{
			lg_item = 4;
		}
		if (typeof dot !== typeof undefined && dot !== true) {   
			dot= dot;
		} else{
			dot = false;
		}
		if (typeof nav !== typeof undefined && nav !== true) {   
			nav= nav;
		} else{
			nav = false;
		}		

		$(this).owlCarousel({
			loop:false,
			margin:Number(margin),
			responsiveClass:true,
			dots:dot,
			responsive:{
				0:{
					items:Number(small_xs_item),
					nav:nav
				},
				350:{
					items:Number(xs_item),
					nav:nav
				},
				768:{
					items:Number(sm_item),
					nav:nav
				},
				992:{
					items:Number(md_item),
					nav:nav					
				},
				1200:{
					items:Number(lg_item),
					nav:nav					
				}
			}
		})
	})

	/* Back to top */
	if ($('.back-to-top').length) {
		var scrollTrigger = 100, // px
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$('.back-to-top').addClass('show');
				} else {
					$('.back-to-top').removeClass('show');
				}
			};
		backToTop();
		$(window).on('scroll', function () {
			backToTop();
		});
		$('.back-to-top').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 700);
		});
	}
	

});

document.addEventListener("DOMContentLoaded", function() {
				var elements = document.getElementsByTagName("INPUT");
				for (var i = 0; i < elements.length; i++) {
					elements[i].oninvalid = function(e) {						
						e.target.setCustomValidity("");
						if (!e.target.validity.valid) {
							console.log(e.srcElement);
							if(e.srcElement.type=="email"){
								e.target.setCustomValidity("Email không đúng định dạng");
							}else{
								e.target.setCustomValidity("Không được bỏ trống");
							}


						}
					};
					elements[i].oninput = function(e) {
						e.target.setCustomValidity("");
					};
				}
			})
			document.addEventListener("DOMContentLoaded", function() {
				var elements = document.getElementsByTagName("textarea");
				for (var i = 0; i < elements.length; i++) {
					elements[i].oninvalid = function(e) {						
						e.target.setCustomValidity("");
						if (!e.target.validity.valid) {
							console.log(e.srcElement);
							if(e.srcElement.type=="email"){
								e.target.setCustomValidity("Email không đúng định dạng");
							}else{
								e.target.setCustomValidity("Không được bỏ trống");
							}


						}
					};
					elements[i].oninput = function(e) {
						e.target.setCustomValidity("");
					};
				}
			})