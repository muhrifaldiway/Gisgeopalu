"use strict";
/* -------------------------------------
		CUSTOM FUNCTION WRITE HERE
-------------------------------------- */
$(document).ready(function() {
	/* -------------------------------------
			CURRENT LOCATION WEATHER
	-------------------------------------- */
	/*if ("geolocation" in navigator) {
		$('.js-geolocation').show(); 
	} else {
		$('.js-geolocation').hide();
	}*/
	navigator.geolocation.getCurrentPosition(function(position) {
		//loadWeather(position.coords.latitude+','+position.coords.longitude);
	});
	
	loadWeather('london,UK','','c');
	
	/* -------------------------------------
			NEWS TICKER SLIDER
	-------------------------------------- */
	var swiper = new Swiper(
		'#tg-updateticker-slider',
		{
			loop: true,
			autoplay: 2500,
			prevButton: '.tg-prev',
			nextButton: '.tg-next',
			direction: 'vertical',
		}
	);
	/* -------------------------------------
	 PRELOADER
	 -------------------------------------- */
	jQuery("#status").delay(2000).fadeOut();
	jQuery("#preloader").delay(2000).fadeOut("slow");
	/* -------------------------------------
			SEARCH TOGGLE
	-------------------------------------- */
	$(".tg-search-open").on("click", function(){
		$(".tg-searchbox").slideToggle();
	});
	$(".tg-search-close").on("click", function(){
		$(".tg-searchbox").slideToggle();
	});
	/* -------------------------------------
			HOME BANNER SLIDER
	-------------------------------------- */
	function syncSlider(){
		var sync1 = $("#tg-fullpost-slider");
		var sync2 = $("#tg-thumbpost-slider");
		sync1.owlCarousel({
			singleItem : true,
			slideSpeed : 1000,
			navigation: true,
			pagination:false,
			afterAction : syncPosition,
			responsiveRefreshRate : 200,
			navigationText: ["<i class='fa fa-angle-left tg-prev'></i>","<i class='fa fa-angle-right tg-next'></i>"]
		});
		sync2.owlCarousel({
			items						:5,
			itemsDesktop				:[1400,4],
			itemsDesktopSmall   		:[991,3],
			itemsTablet 				:[767,2],
			itemsMobile 				:[479,1],
			pagination  				:false,
			responsiveRefreshRate   	:100,
			afterInit : function(el){
				el.find(".owl-item").eq(0).addClass("active");
			}
		});
		function syncPosition(el){
			var current = this.currentItem;
			$("#tg-thumbpost-slider")
				.find(".owl-item")
				.removeClass("active")
				.eq(current)
				.addClass("active")
			if($("#tg-thumbpost-slider").data("owlCarousel") !== undefined){
				center(current)
			}
		}
		$("#tg-thumbpost-slider").on("click", ".owl-item", function(e){
			e.preventDefault();
			var number = $(this).data("owlItem");
			sync1.trigger("owl.goTo",number);
		});
		function center(number){
			var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
			var num = number;
			var found = false;
			for(var i in sync2visible){
				if(num === sync2visible[i]){
					var found = true;
				}
			}
			if(found===false){
				if(num>sync2visible[sync2visible.length-1]){
					sync2.trigger("owl.goTo", num - sync2visible.length+2)
				}else{
					if(num - 1 === -1){
						num = 0;
					}
					sync2.trigger("owl.goTo", num);
				}
			} else if(num === sync2visible[sync2visible.length-1]){
				sync2.trigger("owl.goTo", sync2visible[1])
			} else if(num === sync2visible[0]){
				sync2.trigger("owl.goTo", num-1)
			}
		}
	}
	syncSlider();
	/* -------------------------------------
			FOOTER INSTRGRAM
	-------------------------------------- */
	function syncInstaSlider(){
		var sync1 = $("#tg-instapost-slider");
		var sync2 = $("#tg-instathumb-slider");
		sync1.owlCarousel({
			singleItem : true,
			slideSpeed : 1000,
			navigation: false,
			pagination:false,
			afterAction : syncPosition,
			responsiveRefreshRate : 200,
			navigationText: ["<i class='fa fa-angle-left tg-prev'></i>","<i class='fa fa-angle-right tg-next'></i>"]
		});
		sync2.owlCarousel({
			items						:5,
			itemsDesktop				:[1199,4],
			itemsDesktopSmall   		:[991,3],
			itemsTablet 				:[767,4],
			itemsMobile 				:[479,3],
			pagination  				:false,
			responsiveRefreshRate   	:100,
			afterInit : function(el){
				el.find(".owl-item").eq(0).addClass("active");
			}
		});
		function syncPosition(el){
			var current = this.currentItem;
			$("#tg-instathumb-slider")
				.find(".owl-item")
				.removeClass("active")
				.eq(current)
				.addClass("active")
			if($("#tg-instathumb-slider").data("owlCarousel") !== undefined){
				center(current)
			}
		}
		$("#tg-instathumb-slider").on("click", ".owl-item", function(e){
			e.preventDefault();
			var number = $(this).data("owlItem");
			sync1.trigger("owl.goTo",number);
		});
		function center(number){
			var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
			var num = number;
			var found = false;
			for(var i in sync2visible){
				if(num === sync2visible[i]){
					var found = true;
				}
			}
			if(found===false){
				if(num>sync2visible[sync2visible.length-1]){
					sync2.trigger("owl.goTo", num - sync2visible.length+2)
				}else{
					if(num - 1 === -1){
						num = 0;
					}
					sync2.trigger("owl.goTo", num);
				}
			} else if(num === sync2visible[sync2visible.length-1]){
				sync2.trigger("owl.goTo", sync2visible[1])
			} else if(num === sync2visible[0]){
				sync2.trigger("owl.goTo", num-1)
			}
		}
	}
	syncInstaSlider();
	/* -------------------------------------
			POPULAR VIDEOS
	-------------------------------------- */
	function imgHover(){
		$(".tg-postlistitem > div").hover(function(){
			$(".tg-postlistitem > div").removeClass("tg-active");
			$(this).addClass("tg-active");
			$(this).parent().addClass("tg-hover");
		});
		$(".tg-postlistitem > div").mouseleave(function(){
			$(".tg-postlistitem > div").removeClass("tg-active");
			$(".tg-postlistitem > div").parent().removeClass("tg-hover");
		});
	}
	imgHover();
	/* -------------------------------------
			POST SLIDER
	-------------------------------------- */
	var check = $('#tg-postslider .cycle-slideshow').on('cycle-next cycle-prev', function (e, opts) {
		$('#tg-alsocheck .cycle-slideshow').cycle('goto', opts.currSlide);
	});
	$('#tg-alsocheck-thumb .cycle-slide').on('click', function () {
		var index = $('#tg-alsocheck-thumb .cycle-slideshow').data('cycle.API').getSlideIndex(this);
		var todos = $('.cycle-slideshow').data('cycle.opts').slideCount;
		check.cycle('goto', index - todos);
	});
	/* ---------------------------------------
			PORTFOLIO FILTERABLE
	 -------------------------------------- */
	jQuery(window).load(function () {
		jQuery('.tg-filtermasonry').isotope({
			itemSelector: '.tg-griditem'
		});
	});
	var $container = $('#tg-filtermasonry');
	var $optionSets = $('.option-set');
	var $optionLinks = $optionSets.find('a');
	function doIsotopeFilter() {
		if ($().isotope) {
			var isotopeFilter = '';
			$optionLinks.each(function () {
				var selector = $(this).attr('data-filter');
				var link = window.location.href;
				var firstIndex = link.indexOf('filter=');
				if (firstIndex > 0) {
					var id = link.substring(firstIndex + 7, link.length);
					if ('.' + id == selector) {
						isotopeFilter = '.' + id;
					}
				}
			});
			$container.isotope({
				itemSelector: '.tg-griditem',
				filter: isotopeFilter
			});
			$optionLinks.each(function () {
				var $this = $(this);
				var selector = $this.attr('data-filter');
				if (selector == isotopeFilter) {
					if (!$this.hasClass('active')) {
						var $optionSet = $this.parents('.option-set');
						$optionSet.find('.active').removeClass('active');
						$this.addClass('active');
					}
				}
			});
			$optionLinks.on('click', function () {
				var $this = $(this);
				var selector = $this.attr('data-filter');
				$container.isotope({itemSelector: '.tg-griditem', filter: selector});
				if (!$this.hasClass('active')) {
					var $optionSet = $this.parents('.option-set');
					$optionSet.find('.active').removeClass('active');
					$this.addClass('active');
				}
				return false;
			});
		}
	}
	var isotopeTimer = window.setTimeout(function () {
		window.clearTimeout(isotopeTimer);
		doIsotopeFilter();
	}, 1000);
	
	/* -------------------------------------
			GALLERY SLIDER
	-------------------------------------- */
	$("#tg-gallery-slider").owlCarousel({
		Play: 3000,
		items : 3,
		navigation:true,
		pagination:false,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [991,2],
		navigationText: ["<i class='fa fa-angle-left tg-prev'></i>","<i class='fa fa-angle-right tg-next'></i>"]
	});
	/* -------------------------------------
			FOOTER SLIDER
	-------------------------------------- */
	$("#tg-footerbrand-slider").owlCarousel({
		Play: 3000,
		items : 6,
		navigation:false,
		pagination:false,
		itemsDesktop : [1199,4],
		itemsDesktopSmall : [991,4],
		itemsTablet :[767,4],
		itemsMobile :[479,2],
		navigationText: ["<i class='fa fa-angle-left tg-prev'></i>","<i class='fa fa-angle-right tg-next'></i>"]
	});
	/* -------------------------------------
			WIDGET SLIDER
	-------------------------------------- */
	$("#tg-widget-slider").owlCarousel({
		Play: 3000,
		items : 1,
		navigation:true,
		pagination:false,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet :[767,1],
		navigationText: ["<i class='fa fa-angle-left tg-prev'></i>","<i class='fa fa-angle-right tg-next'></i>"]
	});
	/* -------------------------------------
			BLOG DETAIL SLIDER
	-------------------------------------- */
	$("#tg-blogdetail-slider").owlCarousel({
		Play: 3000,
		items : 1,
		navigation:true,
		pagination:false,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet :[767,1],
		itemsMobile :[479,1],
		navigationText: ["<i class='fa fa-angle-left tg-prev'></i>","<i class='fa fa-angle-right tg-next'></i>"]
	});
	/* -------------------------------------
			MORE BLOG SLIDER
	-------------------------------------- */
	$("#tg-moreblog-slider").owlCarousel({
		Play: 3000,
		items : 1,
		navigation:true,
		pagination:false,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet :[767,1],
		itemsMobile :[479,1],
		navigationText: ["<i class='fa fa-angle-left tg-prev'></i>","<i class='fa fa-angle-right tg-next'></i>"]
	});
	/* -------------------------------------
			COMMENTS SLIDER
	-------------------------------------- */
	$("#tg-comment-slider").owlCarousel({
		Play: 3000,
		items : 1,
		navigation:true,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet :[767,1],
		itemsMobile :[479,1],
		pagination  :false,
		responsiveRefreshRate :100,
		navigationText: ["<i class='fa fa-angle-left tg-prev'></i>","<i class='fa fa-angle-right tg-next'></i>"]
	});
	/* -------------------------------------
			PRETTY PHOTO GALLERY
	-------------------------------------- */
	/*$("a[data-rel]").each(function () {
		$(this).attr("rel", $(this).data("rel"));
	});
	$("a[data-rel^='prettyPhoto']").prettyPhoto({
		animation_speed: 'normal',
		theme: 'dark_square',
		slideshow: 3000,
		autoplay_slideshow: false,
		social_tools: false
	});*/
	/* -------------------------------------
			HOME SLIDER TWO
	-------------------------------------- */
	$('#tg-home-slidertwo').flexslider({
		animation: "slide",
		slideshowSpeed : 3000,
		controlNav: false,
		pauseOnHover: true,
		touch : true,
		directionNav : true,
		prevText :"<i class='fa fa-angle-left'></i>",
		nextText : "<i class='fa fa-angle-right'></i>",
	});
	/* -------------------------------------
			HOME SLIDER THREE
	-------------------------------------- */
	
	
	
	/* --------------------------------------
			HOME SLIDER PROGRESSBAR
	-------------------------------------- */
	var time = 7;
	var $progressBar, $bar, $elem, isPause, tick, percentTime;
	$("#tg-fullpostfour-slider").owlCarousel({
		slideSpeed : 500,
		paginationSpeed : 500,
		pagination : false,
		singleItem : true,
		navigation : false,
		navigationText: [
			"<i class='fa fa-angle-left'></i>",
			"<i class='fa fa-angle-right'></i>"
		],
		afterInit : progressBar,
		afterMove : moved,
		startDragging : pauseOnDragging
	});
	function progressBar(elem){
		$elem = elem;
		buildProgressBar();
		start();
	}
	function buildProgressBar(){
		$progressBar = $("<div>",{
			id:"progressBar"
		});
		$bar = $("<div>",{
			id:"bar"
		});
		$progressBar.append($bar).prependTo($elem);
	}
	function start() {
		percentTime = 0;
		isPause = false;
		tick = setInterval(interval, 10);
	}
	function interval() {
		if(isPause === false){
			percentTime += 1 / time;
			$bar.css({
				width: percentTime+"%"
			});
			if(percentTime >= 100){
				$elem.trigger('owl.next');
			}
		}
	}
	function pauseOnDragging(){
		isPause = true;
	}
	function moved(){
		clearTimeout(tick);
		start();
	}
	/* --------------------------------------
			COMMING SOON SLIDER
	-------------------------------------- */
	/*var swiper = new Swiper('#tg-commingsoon-slider', {
		pagination: '.swiper-pagination',
		paginationClickable: false,
		autoplay: 3500,
		effect: 'fade'
	});*/
	var swiper = new Swiper('#tg-commingsoon-slider', {
		grabCursor: true,
		autoplay: 4000,
		slidesPerView: 1,
		effect: 'fade',
		loop: true,
	});
	/* --------------------------------------
			FULL VIEW SLIDER
	-------------------------------------- */
	var swiper = new Swiper(
		'#tg-fullview-slider',
		{
			loop: true,
			autoplay: 0,
			//prevButton: '.tg-prev',
			//nextButton: '.tg-next',
		}
	);
	/* --------------------------------------
			MULTI SLIDERS
	-------------------------------------- */
	$(".live-tile, .flip-list").not(".exclude").liveTile();

	function getRandomOptions(){
		var doIt = Math.floor(Math.random() * 1001) % 2 == 0;
		return {
				index: "next",
				delay: 3000,
				animationDirection: doIt ? 'forward' : 'backward',
				direction: doIt ? 'vertical' : 'horizontal'
			};
	}
	$("#tile1").liveTile({
		animationComplete: function(tileData){
			$(this).liveTile("goto", getRandomOptions());
		}
	}).liveTile("goto", getRandomOptions());

	function getRandomOptionsTwo(){
		var doIt = Math.floor(Math.random() * 1001) % 2 == 0;
		return {
				index: "next",
				delay: 3000,
				animationDirection: doIt ? 'forward' : 'backward',
				direction: doIt ? 'vertical' : 'horizontal'
			};
	}
	$("#tile2").liveTile({
		animationComplete: function(tileData){
			$(this).liveTile("goto", getRandomOptionsTwo());
		}
	}).liveTile("goto", getRandomOptionsTwo());

	function getRandomOptionsThree(){
		var doIt = Math.floor(Math.random() * 1001) % 2 == 0;
		return {
				index: "next",
				delay: 3000,
				animationDirection: doIt ? 'forward' : 'backward',
				direction: doIt ? 'vertical' : 'horizontal'
			};
	}
	$("#tile3").liveTile({
		animationComplete: function(tileData){
			$(this).liveTile("goto", getRandomOptionsThree());
		}
	}).liveTile("goto", getRandomOptionsThree());
});

function loadWeather(location, woeid,_unit) {
	jQuery.simpleWeather({
		location: location,
		woeid: woeid,
		unit: _unit,
		success: function(weather) {
			var _date = 'March 07, 2016';
			var html = '<div class="tg-weathertemp"><i class="icon-'+weather.code+'"></i><span>'+weather.temp+'&deg;'+weather.units.temp+'</span><span> '+weather.currently+'</span></div><div class="tg-weatherdate">'+_date+'</div>';
			html += '<ul><li>'+weather.city+'</li></ul>';
			jQuery("#tg-weather").html(html);
		},
		error: function(error) {
			jQuery("#tg-weather").html('<p>'+error+'</p>');
		}
	});
}