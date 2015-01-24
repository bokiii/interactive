
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
/*var html = jQuery('html');
var scrollPosition = html.data('scroll-position');
html.css('overflow', html.data('previous-overflow'));
window.scrollTo(scrollPosition[0], scrollPosition[1])*/

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
	
	return {
		home_to_start_discussion: 	home_to_start_discussion,
		start_discussion_to_home:	start_discussion_to_home,
		group_to_start_discussion: group_to_start_discussion
	}
	
})()

// execute exchange module below 

exchangeModule.home_to_start_discussion();
exchangeModule.start_discussion_to_home();
exchangeModule.group_to_start_discussion();


var islandModule = (function(){

	var luzon_select = function() {
	
		$(".select_group").click(function(){
			
			$(".main_discussion").hide("fast");
			$("#group_discussion_content").fadeIn("slow");
		
			var group_id = $(this).attr("id");
		
			if(group_id == "luzon" || group_id == "luzon_separate") {
				selected_group = "luzon_group";
				
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
					});
				});
			}
			
			if(group_id == "visayas" || group_id == "visayas_separate" ) {
				selected_group = "visayas_group";
				
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
					});
				});
			}
			
			if(group_id == "mindanao" || group_id == "mindanao_separate") {
				
				selected_group = "mindanao_group";
				
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
					});
					
				});
			}
	
		});
	}
	
	return {
		luzon_select:		luzon_select
	}
	
})()

// execute home module below

islandModule.luzon_select();





















