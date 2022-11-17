"use strict";

var JSUtil = {

	dragElementsIn: function(){
		$(".drag-this-left").each(function(i, el) {
			JSUtil.applyDragEffect(el, "drag-left");
		});

		$(".drag-this-right").each(function(i, el) {
			JSUtil.applyDragEffect(el, "drag-right");
		});

		$(".drag-this-up").each(function(i, el) {
			JSUtil.applyDragEffect(el, "drag-up");
		});
	},

	applyDragEffect: function(el, className){
		var el = $(el);
		if (el.visible(true)) {
			el.addClass("drag-up"); 
		} 
	},

	progressInitCheck: function(){
		$( ".progress-bar" ).each(function(i, el){
			var $elm = $(el);
			if($elm.visible(true) && $elm.css('width') == '0px'){
				var $span = $elm.children('span');
				var total = $elm.data('percentage');
				$span.html("0");
				var val = 0;
				var id = setInterval(frame, 10);
				function frame() {
					if (val >= total) {
						clearInterval(id);
						$span.html(total); // just to be sure.
					} else {
						val+= total / 100; 
						$span.html(Math.floor(val));
						$elm.css("width", Math.floor(val) + "%");
					}
				}
			}
		});
	},

	gaugeInitCheck: function(){
		$( ".gauge-container").each(function(i, el){
			var $elm = $(el);
			if($elm.visible(true)){
				var $span = $elm.siblings('span');
				if($span.html() == ""){
					var total = $elm.data('total');
					var current = $elm.data('current');
					var percent = (current/total)*360;
					$elm.css("transform", "rotate(-" + percent + "deg)");
					$span.html("0");
					var val = 0;
					var id = setInterval(frame, 10);
					function frame() {
						if (val >= current) {
							clearInterval(id);
							$span.html(current); // just to be sure.
						} else {
							val+= current / 200; 
							$span.html(Math.floor(val));
						}
					}
				}
			}
		});
	}
}

function myMap() {
	var mapProp= {
		center:new google.maps.LatLng(51.508742,-0.120850),
		zoom:5,
	};
	var element = document.getElementById("googleMap");
	if(element){
		var map = new google.maps.Map(element,mapProp);	
	}	
}


(function ($) {

	JSUtil.dragElementsIn();
	JSUtil.gaugeInitCheck();
	JSUtil.progressInitCheck();
	$( window ).scroll(function() {
		JSUtil.dragElementsIn();
		JSUtil.progressInitCheck();
		JSUtil.gaugeInitCheck();
	})

	//Sliders

	$('#page-loader').fadeOut(600);

	$("#back-to-top").on("click", function(e){
		e.preventDefault();
		$('html,body').animate({ scrollTop: 0 }, 'ease');
		return false;
	});

	$('.navbar-toggler').on('click', function(e){
		e.preventDefault();
		$(this).toggleClass('clicked');
		$('.navbar-collapse').toggleClass('collapse');
	});

	$('.slick-header').slick({
		arrows: false,
		autoplay: true,
		fade: true,
		slidesToShow: 1,
		slidesToScroll: 1
	});

	
	$('.blog-post-slick').slick({
		arrows: true,
		prevArrow: '<i class="fa fa-chevron-left"></i>',
		nextArrow: '<i class="fa fa-chevron-right"></i>',
		autoplay: false,
		slidesToShow: 1,
		slidesToScroll: 1,
	});

	//Isotopes

	$("#portfolio-widget-1-tab-content").isotope({ filter: '*' });

	//Isotope handler

	$(".portfolio-widget-1-tabs a").on("click", function(e){
		e.preventDefault();
		var $el = $(this);
		$(".portfolio-widget-1-tabs a").removeClass('active');
		$el.addClass('active');
		var filterValue = $el.data('filter');
		$("#portfolio-widget-tab-content").isotope({ filter: filterValue });
	});

	$('.social-toggle').on('click', function(e){
		e.preventDefault();
		$(this).toggleClass('open');
	});


	
})(jQuery);