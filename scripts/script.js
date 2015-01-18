
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


var buttonModule = (function() {
	
	var hovered_sidebar;
	
	var buttonHover = function() {
		//console.log($(document).find(".home_button").attr("src"));
		$(".button").mouseenter(function(){
			
			$(this).attr('src', $(this).attr('src').replace(/\.png/, '_shadow.png'));
			
			var $has_visayas_feature = $(this).hasClass("visayas_featured");
			var $has_mindanao_feature = $(this).hasClass("mindanao_featured");
			var $has_sidebar_button = $(this).hasClass("sidebar_button");
			
			if($has_visayas_feature) {
				$(document).find(".visayas_feature").show();
				
				if($has_sidebar_button) {
					console.log($("#visayas_separate").attr('src'));
					$("#visayas_separate").attr('src', $("#visayas_separate").attr('src').replace(/\.png/, '_shadow.png'));
					hovered_sidebar = "visayas";
				}
			}
			
			if($has_mindanao_feature) {
				$(document).find(".mindanao_feature").show();
				if($has_sidebar_button) {
					console.log($("#visayas_separate").attr('src'));
					$("#mindanao_separate").attr('src', $("#mindanao_separate").attr('src').replace(/\.png/, '_shadow.png'));
					hovered_sidebar = "mindanao";
				}
			}
			
		}).mouseleave(function(){
			
			$(this).attr('src', $(this).attr('src').replace(/\_shadow.png/, '.png'));
			
			$(document).find(".visayas_feature").hide();
			$(document).find(".mindanao_feature").hide();
		
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
	
	var home_to_start = function() {
		$("#start_discussion").click(function(){
			$("#home_content_background").fadeOut("fast", function(){
				$("#home_content").fadeOut("fast");
				$(document).find("#start_discussion_background").show("fast", function(){
					$(document).find("#discussion_content").slideDown("slow");
				});
			});
		});
	}
	
	return {
		home_to_start: home_to_start
	}
	
})()

// execute exchange module below 

exchangeModule.home_to_start();
















