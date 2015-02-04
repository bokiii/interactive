
// lock scroll position, but retain settings for later
var scrollPosition = [
	self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
	self.pageYOffset || document.documentElement.scrollTop  || document.body.scrollTop
];

var html = jQuery('html'); // it would make more sense to apply this to body, but IE7 won't have that
html.data('scroll-position', scrollPosition);
html.data('previous-overflow', html.css('overflow'));
html.css('overflow', 'hidden');
window.scrollTo(scrollPosition[0], scrollPosition[1]);


// un-lock scroll position
var html = jQuery('html');
var scrollPosition = html.data('scroll-position');
html.css('overflow', html.data('previous-overflow'));
window.scrollTo(scrollPosition[0], scrollPosition[1])


// Below is the delay function

var delay = (function(){
	
	var timer = 0;
	return function(callback, ms){
		clearTimeout (timer);
		timer = setTimeout(callback, ms);
	};
	
})();


// below are the global variables
var selected_group; 

var buttonModule = (function(){
	
	var hovered_sidebar;
	
	var buttonHover = function() {
	
		$(".button").mouseenter(function(){
			
			$(this).attr('src', $(this).attr('src').replace(/\.png/, '_shadow.png'));
			
			var $has_luzon_feature = $(this).hasClass("luzon_featured");
			var $has_visayas_feature = $(this).hasClass("visayas_featured");
			var $has_mindanao_feature = $(this).hasClass("mindanao_featured");
			var $has_sidebar_button = $(this).hasClass("sidebar_button");
			
			if($has_luzon_feature) {
				$(document).find("#luzon_text_wrap").show();
				if($has_sidebar_button) {
					$("#luzon_separate").attr('src', $("#luzon_separate").attr('src').replace(/\.png/, '_shadow.png'));
					hovered_sidebar = "luzon";
				}
			}
			
			if($has_visayas_feature) {
				$(document).find("#visayas_text_wrap").show();
				$(document).find(".visayas_feature").show();
				if($has_sidebar_button) {
					$("#visayas_separate").attr('src', $("#visayas_separate").attr('src').replace(/\.png/, '_shadow.png'));
					hovered_sidebar = "visayas";
				}
			}
			
			if($has_mindanao_feature) {
				$(document).find("#mindanao_text_wrap").show();
				$(document).find(".mindanao_feature").show();
				if($has_sidebar_button) {
					$("#mindanao_separate").attr('src', $("#mindanao_separate").attr('src').replace(/\.png/, '_shadow.png'));
					hovered_sidebar = "mindanao";
				}
			}
			
		}).mouseleave(function(){
			
			$(this).attr('src', $(this).attr('src').replace(/\_shadow.png/, '.png'));
			
			$(document).find("#luzon_text_wrap").hide();
			
			$(document).find(".visayas_feature").hide();
			$(document).find("#visayas_text_wrap").hide();
			
			$(document).find(".mindanao_feature").hide();
			$(document).find("#mindanao_text_wrap").hide();
		
			if(hovered_sidebar == "luzon") {
				$("#luzon_separate").attr('src', $("#luzon_separate").attr('src').replace(/\_shadow.png/, '.png'));
				
			}
		
			if(hovered_sidebar == "visayas") {
				$("#visayas_separate").attr('src', $("#visayas_separate").attr('src').replace(/\_shadow.png/, '.png'));
			}
			
			if(hovered_sidebar == "mindanao") {
				$("#mindanao_separate").attr('src', $("#mindanao_separate").attr('src').replace(/\_shadow.png/, '.png'));
			}
			
			// return hover_sidebar variable value to null or no value
			hovered_sidebar = null;
			
		});
	}
	
	return {
		buttonHover:	buttonHover
	}
	
})()

// execute home module below

buttonModule.buttonHover();

var exchangeModule = (function(){
	
	var $home_src; 
	
	var home_to_start_discussion = function() {
		$("#start_discussion").click(function(){
			$home_src = $("#home_content_background").attr('src');
			$("#home_content").hide("fast");
			$("#home_content_background").attr('src', $("#home_content_background").attr('src').replace(/\home.png/, 'start_discussion_background.png'));
			$("#discussion_content").fadeIn("slow");
		});
	}
	
	var start_discussion_to_home = function() {
		$("#home_back").click(function(){
			$("#home_content_background").attr('src', $home_src);
			$("#discussion_content").hide("fast");
			$("#home_content").fadeIn("slow");
		});
	};
	
	var group_to_start_discussion = function() {
		$("#big_back").click(function(){
		
			$("#group_discussion_content").hide("fast");
			$(".main_discussion").fadeIn("slow");
			
			console.log(selected_group);
			
			$(".for_highlight").hide("fast");
		
			if(selected_group == "luzon_group") {
				$("#luzon_group").animate({
					top: "-=7",
					left: "+=50",
					width: "-=100",
					height: "-=100"
				}, "fast", function(){
					console.log("returned to luzon original");
				});
			}
			
			if(selected_group == "visayas_group") {
				$("#visayas_group").animate({
					top: "+=135",
					left: "+=158",
					width: "-=100",
					height: "-=100"
				}, "fast", function(){
					console.log("returned to visayas original");
					
				});
			}
		
			if(selected_group == "mindanao_group") {
				$("#mindanao_group").animate({
					top: "+=250",
					left: "+=158",
					width: "-=100",
					height: "-=100"
				}, "fast", function(){
					console.log("returned to mindanao original");
				});
			}
	
		});
	};
	
	var specific_island_to_group = function() {
	
		$("#island_big_back").click(function(){
		
			// return the jeepney to normal
			$("#jeepney").fadeOut("fast").animate({
				left: "210px"
			}, 10, function(){
				$("#island_discussion_content").hide("fast");
				$("#group_discussion_content").fadeIn("slow");
			});
	
		});
	
	};
	
	return {
		home_to_start_discussion: 	home_to_start_discussion,
		start_discussion_to_home:	start_discussion_to_home,
		group_to_start_discussion:  group_to_start_discussion,
		specific_island_to_group:	specific_island_to_group
	}
	
})()

// execute exchange module below 

exchangeModule.home_to_start_discussion();
exchangeModule.start_discussion_to_home();
exchangeModule.group_to_start_discussion();
exchangeModule.specific_island_to_group();


var islandModule = (function(){

	var group_island_select = function() {
	
		$(".select_group").click(function(){
			
			$('.for_highlight').hide("fast");
			
			$(".main_discussion").hide("fast");
			$("#group_discussion_content").fadeIn("slow");
		
			var group_id = $(this).attr("id");
		
			if(group_id == "luzon" || group_id == "luzon_separate") {
				selected_group = "luzon_group";
				
				$(".for_highlight").attr("usemap", "#luzon_map");
				
				$("#visayas_group").fadeOut("fast");
				$("#mindanao_group").fadeOut("fast");
				$("#luzon_group").fadeIn("fast", function(){
					$(this).animate({
						top: "+=7",
						left: "-=50",
						width: "+=100",
						height: "+=100"
					}, 4000, function(){
						console.log("luzon is complete..");
						$('.for_highlight').maphilight();
						$(".for_highlight").show("fast");
					});
				});
			}
			
			if(group_id == "visayas" || group_id == "visayas_separate" ) {
				selected_group = "visayas_group";
				
				$(".for_highlight").attr("usemap", "#visayas_map");
				
				$("#luzon_group").fadeOut("fast");
				$("#mindanao_group").fadeOut("fast");
				$("#visayas_group").fadeIn("fast", function(){
					$(this).animate({
						top: "-=135",
						left: "-=158",
						width: "+=100",
						height: "+=100"
					}, 4000, function(){
						console.log("visayas is complete..");
						$('.for_highlight').maphilight();
						$(".for_highlight").show("fast");
					});
				});
			}
			
			if(group_id == "mindanao" || group_id == "mindanao_separate") {
				selected_group = "mindanao_group";
				
				$(".for_highlight").attr("usemap", "#mindanao_map");
				
				$("#luzon_group").fadeOut("fast");
				$("#visayas_group").fadeOut("fast");
				$("#mindanao_group").fadeIn("fast", function(){
					$(this).animate({
						top: "-=250",
						left: "-=158",
						width: "+=100",
						height: "+=100"
					}, 4000, function(){
						console.log("mindanao is complete..");
						$('.for_highlight').maphilight();
						$(".for_highlight").show("fast");
					});
					
				});
			}
	
		});
	};
	
	
	var island_select = function() {
		
		var move_width;
		
		$("area").mouseenter(function(e){
			var island_title = $(this).attr("class");
			var island_again = island_title.replace("_", " ");
			var island = island_again.replace("_", " ");
			$("#island_title").text(island);
			
			delay(function(){
				
				$("#island_title").fadeIn("fast").animate({
					fontSize: "60px",
				}, 100, function(){
					$(this).animate({
						fontSize: "50px"
					}, 200, function(){
		
						move_width = $(this).width() + 150;
	
						$("#jeepney").show("fast").animate({
							left: "+=" + move_width
						}, 1000);
				
					});
				});
		
			}, 500 );
		}).mouseleave(function(e){
			
			$("#jeepney").fadeOut("fast").animate({
				left: "210px"
			}, 100);
			
	
			delay(function(){
				
				$("#island_title").fadeOut("fast");
				
			}, 700 );
			
		});
		
	};
	
	var island_select_click = function() {
	
		$("area").click(function(){
		
			$("#group_discussion_content").hide("fast");
			$("#island_discussion_content").fadeIn("slow");
		
		});
		
	};
	
	
	return {
		group_island_select:		group_island_select,
		island_select:				island_select,
		island_select_click: 		island_select_click
	}
	
})()

// execute home module below

islandModule.group_island_select();
islandModule.island_select();
islandModule.island_select_click();


var imagesModule = (function() {

	var hover_images = function() {
		// below mouseenter
		
		
		$(document).on("mouseenter", ".image_wrap", function(){
		
			$(this).children(".frame").animate({
				width: "120",
				left: "-12",
				top: "-10"
			}, 1000);
			
			$(this).children(".island_image").animate({
				left: "-.5",
				top: "-.1",
				width: "98",
				height: "77"
			}, 1000);
			
		});
	
		
		// below mouseleave
		$(document).on("mouseleave", ".image_wrap", function(){
			
			$(this).children(".frame").animate({
				width: "96",
				left: "0",
				top: "0"
			}, 1000);
			
			$(this).children(".island_image").animate({
				left: "+9",
				top: "+9",
				width: "78",
				height: "60"
			}, 1000);
		});
	};
	
	var slideshow_images = function() {
		
		var first_image = $("#slide_images_wrapper").children(".slideshow_image").first();
		var last_image = $("#slide_images_wrapper").children(".slideshow_image").last();
		
		$("#next").click(function(){
		
			var current = $("#slide_images_wrapper").children(".current");
			var hasNext = current.next().length;
			
			if(hasNext == 1) {
				current.removeClass("current");
				current.next().addClass("current");
			} else {
				current.removeClass("current");
				first_image.addClass("current");
			}
		
		});
		
	
		$("#previous").click(function(){
			var current = $("#slide_images_wrapper").children(".current");
			var hasPrev = current.prev().length;
		
			if(hasPrev == 1) {
				current.removeClass("current");
				current.prev().addClass("current");
			} else {
				current.removeClass("current");
				last_image.addClass("current");
			}
		
		
		});
		
		
	};
	
	
	return {
		hover_images: 		hover_images,
		slideshow_images:	slideshow_images
	}
	
})()

// execute images module below 

imagesModule.hover_images();
imagesModule.slideshow_images();























































