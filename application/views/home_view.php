<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Philippine Interactive Map</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>styles/normalize.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>styles/style.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>video_player/video-js.css" />
</head>
<body>
	
	<div id="container">
		
		<!-- below is the background for the home-->
		<img src="<?php echo base_url(); ?>images/home.png" alt="Homepage Background" id="home_content_background" />
		
		<div id="home_content">
			<img src="<?php echo base_url(); ?>images/start_discussion.png" alt="start discussion" id="start_discussion" class="button"/>
			<img src="<?php echo base_url(); ?>images/credits.png" alt="credits" id="credits" class="button"/>
			<img src="<?php echo base_url(); ?>images/exit.png" alt="exit" id="exit" class="button"/>
			
			<img src="<?php echo base_url(); ?>images/philippine_map.png" alt="philippine map" id="philippine_map" />
			<img src="<?php echo base_url(); ?>images/globeball.png" alt="globe ball" id="globeball" />
			
			<img src="<?php echo base_url(); ?>images/T.png" alt="letter T" id="letter_t" />
			<img src="<?php echo base_url(); ?>images/H.png" alt="letter H" id="letter_h" />
			<img src="<?php echo base_url(); ?>images/E.png" alt="letter E" id="letter_e" />
			<img src="<?php echo base_url(); ?>images/philippines.png" alt="letter philippines" id="letter_ph" />
		</div>
		
		<!-- below is the discussion content -->
		
		<div id="discussion_content">
			
			<!-- below is first rope then luzon -->
			<img src="<?php echo base_url(); ?>images/rope.png" alt="first rope" id="first_rope" class="main_discussion" />
			<img src="<?php echo base_url(); ?>images/luzon.png" alt="luzon" id="luzon" class='button luzon_featured sidebar_button main_discussion select_group' />
			
			<!-- below is second rope then visayas -->
			<img src="<?php echo base_url(); ?>images/rope.png" alt="second rope" id="second_rope" class="main_discussion" />
			<img src="<?php echo base_url(); ?>images/visayas.png" alt="visayas" id="visayas" class='button visayas_featured sidebar_button main_discussion select_group' />
			
			<!-- below is third rope then mindanao -->
			<img src="<?php echo base_url(); ?>images/rope.png" alt="third rope" id="third_rope" class="main_discussion" />
			<img src="<?php echo base_url(); ?>images/mindanao.png" alt="mindanao" id="mindanao" class='button mindanao_featured sidebar_button main_discussion select_group' />
			
			<!-- below is fourth rope then back -->
			<img src="<?php echo base_url(); ?>images/rope.png" alt="fourth rope" id="fourth_rope" class="main_discussion" />
			<img src="<?php echo base_url(); ?>images/back.png" alt="Home Back" id="home_back" class='button main_discussion' />
			
			
			<!-- below is for the discuss background -->
			<img src="<?php echo base_url(); ?>images/discuss_background.png" alt="Discussion background" id="discuss_background" class="main_discussion" />
			
			<img src="<?php echo base_url(); ?>images/luzon_separate.png" alt="Luzon Separate" id="luzon_separate" class='button luzon_featured main_discussion select_group'/>
			<img src="<?php echo base_url(); ?>images/visayas_separate.png" alt="Visayas Separate" id="visayas_separate" class='button visayas_featured main_discussion select_group'/>
			<img src="<?php echo base_url(); ?>images/mindanao_separate.png" alt="Mindanao Separate" id="mindanao_separate" class='button mindanao_featured main_discussion select_group'/>
		
			<!-- below are the popups of selections-->
			
			<div id="luzon_text_wrap" class="text_wrap">
				<h1>Luzon</h1>
			</div>
		
			<div id="visayas_text_wrap" class="text_wrap">
				<h1>Visayas</h1>
			</div>
			
			<div id="mindanao_text_wrap" class="text_wrap">
				<h1>Mindanao</h1>
			</div>
			
			<!-- visayas popup featured below -->
			<img src="<?php echo base_url(); ?>images/visayas_feature_one.png" alt="Visayas Feature" id="visayas_feature_one"  class="visayas_feature" />
			<img src="<?php echo base_url(); ?>images/visayas_feature_two.png" alt="Visayas Feature" id="visayas_feature_two" class="visayas_feature" />
			
			<!-- mindanao popup featured below -->
			<img src="<?php echo base_url(); ?>images/mindanao_feature_one.png" alt="Mindanao Feature" id="mindanao_feature_one" class="mindanao_feature" />
			<img src="<?php echo base_url(); ?>images/mindanao_feature_two.png" alt="Mindanao Feature" id="mindanao_feature_two" class="mindanao_feature" />
			<img src="<?php echo base_url(); ?>images/mindanao_feature_three.png" alt="Mindanao Feature" id="mindanao_feature_three" class="mindanao_feature" />
		
		</div>
		
		<!-- below is the group discussion content -->
		<div id="group_discussion_content">
			
			<div id="left_content" class="left">
				<img src="<?php echo base_url(); ?>images/rope.png" alt="left rope" id="left_rope" class="left" />
				<div class="clear"></div>
				<img src="<?php echo base_url(); ?>images/big_back.png" alt="Big Back" id="big_back" class="left button" />
			</div>
			
			<div id="right_content" class="right">
				
				<img src="<?php echo base_url(); ?>images/discuss_background.png" alt="right background" id="right_background" class="right" />
				
				<img src="<?php echo base_url(); ?>images/jeepney.png" alt="Jeepney" id="jeepney" />
				<div id="island_description">
					<h1 id="island_title">ISLAND</h1>
				</div>
				
				<div id="highlight_div">
					<img src="<?php echo base_url(); ?>images/for_highlight.png" width="768" height="675" alt="Highlight" class="for_highlight" usemap="" />
				</div>
				
				<div class="clear"></div>
				
				<!--below is the island content div-->
				
				<div id="island_content">
				
					<img src="<?php echo base_url(); ?>images/luzon_separate.png" alt="Luzon Group" id="luzon_group" />
					<img src="<?php echo base_url(); ?>images/visayas_separate.png" alt="Visayas Group" id="visayas_group" />
					<img src="<?php echo base_url(); ?>images/mindanao_separate.png" alt="Mindanao Group" id="mindanao_group" />
	
				</div>
				
			</div>

			<div class="clear"></div>
			
		</div>
	
	
		<!-- below is the island discussion content -->
		<div id="island_discussion_content">
			
			<div id="island_left_content" class="left">
				<img src="<?php echo base_url(); ?>images/rope.png" alt="left rope" id="island_left_rope" class="left" />
				<div class="clear"></div>
				<img src="<?php echo base_url(); ?>images/big_back.png" alt="Big Back" id="island_big_back" class="left button" />
				
				<div id="map_highlight_wrapper">
					<img src="<?php echo base_url(); ?>images/map_highlight.png" alt="Map Highlight" id="map_highlight" />
					<img src="<?php echo base_url(); ?>images/map_highlight_board.png" alt="Map Highlight Board" id="map_highlight_board" />
				</div>
				
				<div id="quiz_button_wrapper">
					<img src="<?php echo base_url(); ?>images/sign_board.png" alt="Sign Board" id="sign_board" />
					<img src="<?php echo base_url(); ?>images/go.png" alt="Go Button" id="go_exam" class="button" />
					<img src="<?php echo base_url(); ?>images/tractor.png" alt="Tractor" id="tractor" />
				</div>
				
				
			</div>
			
			<div id="island_right_content" class="right">	
				<img src="<?php echo base_url(); ?>images/discuss_background.png" alt="right background" id="island_right_background" class="right" />
			
				<div id="left_sidebar">
				
					<video id="video" class="video-js vjs-default-skin" controls preload="none" width="210" height="180" data-setup="{}">
						<source src="<?php echo base_url(); ?>videos/palawan.mp4" type='video/mp4' />
					</video>
					
					<div id="images_wrapper">
					</div>
				
				</div>
				
				<div id="wrapper">
					
					<div class="image_wrap">
						<img src="<?php echo base_url(); ?>images/frame.png" alt="Frame" class="frame" />
						<img src="<?php echo base_url(); ?>images/island_images/sample.jpg" alt="Island Image" class="island_image" />
					</div>
					
					<div class="image_wrap">
						<img src="<?php echo base_url(); ?>images/frame.png" alt="Frame" class="frame" />
						<img src="<?php echo base_url(); ?>images/island_images/sample.jpg" alt="Island Image" class="island_image" />
					</div>
					
					<div class="image_wrap">
						<img src="<?php echo base_url(); ?>images/frame.png" alt="Frame" class="frame" />
					</div>
					
					<div class="image_wrap">
						<img src="<?php echo base_url(); ?>images/frame.png" alt="Frame" class="frame" />
					</div>
					
					<div class="image_wrap">
						<img src="<?php echo base_url(); ?>images/frame.png" alt="Frame" class="frame" />
					</div>
					
					<div class="image_wrap">
						<img src="<?php echo base_url(); ?>images/frame.png" alt="Frame" class="frame" />
					</div>
					
					<div class="image_wrap">
						<img src="<?php echo base_url(); ?>images/frame.png" alt="Frame" class="frame" />
					</div>
					
					<div class="image_wrap">
						<img src="<?php echo base_url(); ?>images/frame.png" alt="Frame" class="frame" />
					</div>
					
					<div class="image_wrap">
						<img src="<?php echo base_url(); ?>images/frame.png" alt="Frame" class="frame" />
					</div>
					
					<div class="image_wrap">
						<img src="<?php echo base_url(); ?>images/frame.png" alt="Frame" class="frame" />
					</div>
					
				</div>
			</div>
			
		</div>
	
	
	
	</div> <!-- end container -->
	
	<!-- below are the images for the highlight -->
	
	<map name="luzon_map">
		<!-- palawan -->
		<area class="palawan" shape="poly" coords="186,618,185,610,195,607,195,620" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".palawan"}'>
		<area class="palawan" shape="circle" coords="205,601,3" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".palawan"}'>
		<area class="palawan" shape="poly" coords="195,595,196,592,198,590,198,586,204,577,207,576,212,569,215,567,217,566,220,562,223,562,224,561,226,558,232,554,233,554,235,553,237,554,240,551,242,550,243,548,245,547,246,545,249,543,252,541,252,538,255,537,258,534,267,526,267,523,269,521,273,518,274,517,274,515,276,514,278,513,280,514,281,513,282,510,283,509,283,508,283,505,285,505,287,505,289,505,289,503,290,502,291,502,293,503,294,504,294,502,296,501,296,498,299,497,299,494,299,492,296,491,295,488,295,484,296,482,298,481,299,479,300,477,301,474,303,474,303,472,304,470,304,467,309,460,311,459,312,462,313,465,315,467,315,469,314,472,313,475,314,476,315,476,316,477,318,477,318,479,318,481,314,482,312,484,312,486,313,487,315,486,316,486,317,487,318,489,317,491,317,493,317,494,318,497,320,499,321,499,323,497,326,495,328,494,330,496,332,497,335,498,336,499,336,501,329,506,325,508,321,507,319,505,317,509,312,512,308,513,305,512,300,518,299,522,294,526,289,528,284,528,278,529,277,533,278,536,278,539,274,543,270,547,267,551,264,556,258,560,253,563,249,563,246,566,243,569,241,572,236,576,229,580,223,583,218,584,219,587,214,590,206,594,201,597,197,598" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".palawan"}'>
		<area class="palawan" shape="poly" coords="326,467,322,464,319,462,318,460,321,458,325,458,328,457,329,457,331,458,330,462,329,465,326,467" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".palawan"}'>
		<area class="palawan" shape="poly" coords="326,440,326,443,327,445,329,447,330,449,329,452,331,453,333,454,336,453,337,452,339,450,338,447,338,443,335,441,331,438,329,436,325,437" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".palawan"}'>
		<area class="palawan" shape="poly" coords="326,423,329,422,331,423,333,425,335,426,337,427,340,429,342,431,343,429,345,428,347,429,348,431,350,432,351,435,352,436,350,439,349,442,348,446,346,449,344,447,342,447,342,446,341,444,341,441,341,440,339,441,337,441,334,440,331,437,330,435,328,433,326,431,326,426" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".palawan"}'>
		<!-- occidental mindoro -->
		<area class="occidental_mindoro" shape="poly" coords="346,374,353,369,355,369,357,370,360,371,365,372,369,372,374,372,378,372,379,376,379,378,377,381,376,383,378,384,394,391,395,392,396,393,395,429,395,430,392,430,388,430,385,429,383,427,381,422,378,421,375,417,375,415,375,412,372,410,369,407,368,404,367,399,365,395,364,390,360,387,357,385,354,381,353,380,351,381,349,380,346,377" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".occidental_mindoro"}'>
		<area class="occidental_mindoro" shape="poly" coords="336,359,338,357,340,356,342,357,344,358,346,358,347,359,348,361,349,362,350,363,351,365,352,366,353,368,352,369,349,370,347,368,344,367,341,365" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".occidental_mindoro"}'>
		<!-- oriental mindoro -->
		<area class="oriental_mindoro" shape="poly" coords="378,372,379,372,381,372,382,374,384,376,387,376,390,376,392,377,394,378,396,379,398,381,399,383,402,385,404,386,406,386,407,388,409,390,410,391,409,393,407,395,408,397,407,399,406,402,406,406,407,407,408,408,410,411,409,414,406,417,404,418,402,421,403,423,403,425,402,427,399,428,395,428,393,420,393,414,393,407,392,395,388,392,383,390,378,388,373,385,373,383,375,380,376,379" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".oriental_mindoro"}'>
		<!-- romblon -->
		<area class="romblon" shape="poly" coords="427,412,430,410,433,410,434,409,436,409,438,410,438,412,437,416,436,418,436,421,436,423,434,425,433,428,433,431,432,435,431,436,429,436,427,435,425,434,424,432,425,429,424,428,423,427,422,425,424,421,425,419,426,418" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".romblon"}'>
		<area class="romblon" shape="poly" coords="441,409,443,409,445,410,445,411,446,413,447,415,445,417,443,418,441,418,439,418,439,416,438,414" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".romblon"}'>
		<area class="romblon" shape="poly" coords="449,416,452,416,454,416,456,416,458,415,460,416,462,417,463,420,464,421,464,424,462,427,459,430,457,429,455,427,453,426,451,425,449,423,447,422,446,419" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".romblon"}'>
		<!-- masbate -->
		<area class="masbate" shape="poly" coords="485,412,487,410,489,410,491,410,493,411,494,412,496,414,497,414,498,414,499,415,501,415,503,416,504,417,505,418,506,420,506,420,507,421,508,421,511,423,512,425,515,426,517,427,519,427,521,428,522,429,523,431,524,433,525,435,527,436,528,438,527,440,527,441,528,443,529,446,529,449,528,451,526,452,523,451,520,447,518,446,513,444,510,443,507,439,506,437,505,438,501,433,500,431,498,432,495,434,493,437,492,439,488,442,483,445,481,443,481,438,482,434,484,432,486,429,484,425,485,420,485,419" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".masbate"}'>
		<area class="masbate" shape="poly" coords="504,407,506,407,507,408,509,410,511,411,513,413,514,416,515,418,516,421,516,425,514,426,511,424,508,421,506,419,503,415,501,412" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".masbate"}'>
		<area class="masbate" shape="poly" coords="472,387,475,387,477,387,479,388,481,389,483,391,484,395,485,396,488,398,491,399,492,402,493,405,491,406,489,406,487,405,485,403,483,403,479,401,477,397,475,397,472,395,470,391" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".masbate"}'>
		<!-- marinduque -->
		<area class="marinduque" shape="poly" coords="417,374,420,370,422,368,424,369,426,370,428,370,431,370,433,372,436,373,437,375,436,377,438,379,437,381,434,383,432,386,431,388,428,389,425,386,424,385,421,384" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".marinduque"}'>
		<!-- sorsogon -->
		<area class="sorsogon" shape="poly" coords="499,395,500,394,502,393,504,393,505,392,507,392,508,391,510,390,513,390,515,390,516,389,519,388,522,389,524,390,526,392,528,391,529,390,531,391,533,392,534,394,532,397,531,399,532,401,532,405,531,407,530,409,530,412,530,414,529,416,526,417,522,416,516,410,515,408,513,404,512,402,510,402,506,401,502,400,500,398,499,396" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".sorsogon"}'>
		<!-- albay -->
		<area class="albay" shape="poly" coords="490,384,492,382,494,380,496,378,498,378,500,377,502,378,504,377,504,375,505,373,506,372,509,373,510,375,512,378,514,382,515,384,515,386,513,387,512,387,514,389,513,390,513,392,511,393,508,394,505,395,502,396,501,398,499,399,498,397,497,396,495,395,493,396,490,396,488,393,488,388" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".albay"}'>
		<!-- catanduanes -->
		<area class="catanduanes" shape="poly" coords="522,364,525,362,527,360,528,357,527,354,526,352,527,350,528,348,531,347,533,347,535,348,537,351,538,352,540,353,542,354,543,355,543,359,543,364,543,367,542,369,540,372,537,372,533,373,529,375,526,374,522,371" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".catanduanes"}'>
		<!-- camarines sur -->
		<area class="camarines_sur" shape="poly" coords="454,354,457,353,459,353,460,353,463,354,464,352,465,352,467,351,469,352,472,352,473,352,475,353,477,355,479,357,480,359,481,361,483,363,487,362,489,360,489,359,488,357,486,354,484,352,486,349,489,347,491,346,493,347,494,349,495,351,498,353,500,353,502,354,502,352,505,352,507,352,508,352,509,353,511,354,513,357,516,358,518,359,521,361,523,363,521,364,517,366,514,366,512,367,511,366,507,366,505,366,503,366,503,367,503,370,504,372,505,373,506,377,505,380,502,381,499,381,496,382,494,384,491,385,488,386,486,385,484,383,484,382,483,380,483,379,482,377,479,375,476,376,472,375,470,373,466,369,465,367,466,364,462,362,459,363,456,359" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".camarines_sur"}'>
		<!-- camarines norte -->
		<area class="camarines_norte" shape="poly" coords="443,341,445,339,447,337,449,337,452,336,455,336,458,338,459,336,461,335,464,336,466,338,468,339,470,339,472,342,474,344,477,346,479,346,480,348,479,350,479,351,481,353,482,355,481,358,479,360,477,360,476,358,475,357,473,355,471,354,469,354,465,352,461,350,457,348,453,347,450,346,448,347,448,349,445,349,443,346" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".camarines_norte"}'>
		<!-- quezon -->
		<area class="quezon" shape="poly" coords="397,300,399,299,402,298,404,298,406,300,406,303,407,307,410,310,411,314,413,318,416,320,417,322,415,324,412,326,413,329,414,334,417,336,417,338,420,341,418,343,418,345,420,348,424,350,427,352,431,354,436,355,437,353,440,353,443,354,442,352,440,349,437,348,435,346,435,344,437,343,439,341,441,341,442,342,443,346,445,346,447,346,448,345,451,344,453,345,457,345,460,348,463,349,467,350,467,353,464,355,461,356,458,354,456,355,453,356,451,356,454,359,455,362,453,365,455,367,458,371,460,373,462,377,463,382,463,387,460,389,457,390,454,390,452,388,452,385,450,382,450,379,447,377,446,375,445,373,442,372,438,372,436,370,435,367,433,365,431,363,428,363,424,361,422,359,419,358,417,356,416,355,415,358,411,358,407,360,404,362,402,361,400,359,397,356,394,354,395,352,398,351,401,349,404,348,406,347,407,344,409,343,410,341,410,339,408,337,407,334,405,330,404,328,402,327,400,325,398,321" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".quezon"}'>
		<!-- laguna -->
		<area class="laguna" shape="poly" coords="385,338,387,338,388,338,390,340,391,342,393,342,394,341,395,339,397,338,398,337,399,336,399,335,399,334,398,331,398,329,400,328,402,327,405,326,406,328,407,329,408,330,409,333,410,336,412,338,412,340,411,341,412,343,410,345,408,347,408,349,405,350,403,350,402,351,399,353,398,354,396,355,394,354,392,353,391,351,389,349,390,348,390,348,388,347,386,347,384,346,383,344" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".laguna"}'>
		<!-- batangas -->
		<area class="batangas" shape="poly" coords="362,341,364,342,366,342,368,343,370,346,373,347,376,347,378,347,380,347,382,346,385,345,387,345,389,345,392,346,393,347,393,349,394,351,397,353,399,355,403,358,405,360,404,362,404,365,404,367,401,368,398,369,396,372,393,371,392,370,390,369,389,369,387,370,385,370,383,368,382,367,382,366,382,364,381,364,380,366,379,367,377,367,375,367,373,364,374,363,375,361,376,360,375,358,374,357,373,357,370,357,370,359,369,361,367,363,365,363,363,361,362,357,362,352,361,348,360,346,360,343" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".batangas"}'>
		<!-- cavite -->
		<area class="cavite" shape="poly" coords="362,340,365,338,368,336,371,335,374,333,375,331,377,332,379,331,381,332,383,333,384,335,386,337,387,340,386,343,385,345,384,347,382,349,379,350,376,349,375,348,373,349,371,349,369,347,367,346,365,345,362,344,361,343" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".cavite"}'>
		<!-- manila -->
		<area class="manila" shape="poly" coords="378,323,380,323,381,322,382,320,382,318,384,318,386,319,388,320,389,322,388,325,389,327,388,329,387,330,385,330,384,332,383,334,382,335,380,334,379,333,378,334,375,333,374,332" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".manila"}'>
		<!-- rizal -->
		<area class="rizal" shape="poly" coords="386,319,387,317,389,316,390,316,392,316,394,315,395,313,396,313,398,312,399,315,400,317,400,319,402,321,403,323,404,326,405,327,403,329,401,331,401,334,402,337,399,339,396,341,394,339,393,337,395,336,395,334,395,332,394,333,392,334,390,334,388,332,387,329,386,325,386,322,385,320" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".rizal"}'>
		<!-- bulacan -->
		<area class="bulacan" shape="poly" coords="378,299,380,298,382,296,385,296,388,295,391,296,393,297,395,298,397,298,398,299,398,302,399,303,399,306,399,307,400,309,399,311,399,313,398,314,396,315,395,317,393,317,390,317,387,319,386,320,384,320,384,321,383,323,381,325,378,324,376,322,374,321,372,321,368,320,366,318,367,315,370,311,372,310,374,309,376,308,377,306,378,301" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".bulacan"}'>
		<!-- pampanga -->
		<area class="pampanga" shape="poly" coords="354,300,355,299,357,298,360,297,362,296,364,296,366,296,371,296,373,297,374,299,376,300,378,300,379,299,380,301,381,303,381,306,379,309,377,312,374,313,371,314,370,317,368,320,367,321,365,320,364,319,362,319,360,319,359,317,358,317,357,315,356,311,355,310,354,307,353,306,352,304,352,302,352,301" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".pampanga"}'>
		<!-- bataan -->
		<area class="bataan" shape="poly" coords="343,315,344,316,345,318,345,321,347,324,349,325,351,325,351,327,351,329,351,332,353,333,355,335,358,334,361,334,364,332,364,328,363,324,363,321,361,317,360,314,358,312,356,312,354,313,352,313,350,314,349,315,347,313,344,313" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".bataan"}'>
		<!-- zambales -->
		<area class="zambales" shape="poly" coords="336,314,335,311,336,308,335,305,335,301,334,298,331,295,329,293,328,291,328,287,330,286,331,285,329,284,328,282,329,279,328,278,328,276,329,273,331,273,334,272,337,271,339,271,340,273,342,272,343,274,344,276,346,277,348,280,349,283,346,283,346,285,344,288,343,290,344,293,346,294,349,294,351,296,353,298,354,300,354,303,355,304,356,305,357,307,357,309,358,311,359,313,357,315,356,314,355,316,353,317,351,317,349,317,347,318,346,318,345,321,343,322,340,322,337,318" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".zambales"}'>
		<!-- tarlac -->
		<area class="tarlac" shape="poly" coords="342,285,344,283,345,282,347,281,348,281,350,280,351,278,352,277,354,275,356,275,357,276,358,276,360,275,361,273,363,272,363,270,365,271,367,273,367,275,368,277,369,280,370,281,372,281,373,283,372,285,373,288,374,290,372,292,372,293,374,294,374,297,372,299,370,299,370,299,368,298,366,299,363,299,360,300,358,301,355,302,354,303,352,302,351,300,349,298,346,297,343,297,342,293,341,291" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".tarlac"}'>
		<!-- nueva ecija -->
		<area class="nueva_ecija" shape="poly" coords="380,257,382,257,384,258,385,258,387,259,388,260,390,260,392,261,393,263,393,265,393,268,394,270,394,271,396,273,398,276,398,279,400,282,401,285,401,288,400,291,398,293,398,297,398,300,396,300,393,301,391,299,389,298,387,298,385,299,382,299,381,300,379,300,377,301,376,302,374,301,372,300,371,296,371,295,371,293,369,293,369,290,370,289,370,287,369,285,369,283,369,282,367,281,366,279,364,276,366,272,367,272,369,270,371,270,372,271,373,272,375,271,376,269,378,266,377,264,376,261,377,258" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".nueva_ecija"}'>
		<!-- aurora -->
		<area class="aurora" shape="poly" coords="395,272,398,271,401,268,404,266,408,263,412,261,416,257,419,256,421,253,424,250,426,247,428,245,429,242,431,242,434,242,437,242,439,242,440,244,440,246,441,247,440,250,439,251,440,253,439,254,438,256,436,259,434,261,433,262,431,260,431,258,430,259,428,261,425,261,423,262,420,263,417,265,414,266,413,268,410,270,409,271,410,273,411,275,412,276,412,278,413,281,411,282,409,284,407,285,406,287,407,290,404,291,403,294,401,293,402,296,403,298,402,299,400,300,397,300,396,297,396,293,397,291,398,288,398,286,397,283,395,279,394,275" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".aurora"}'>
		<!-- pangasinan -->
		<area class="pangasinan" shape="poly" coords="327,246,329,245,332,246,334,248,335,249,334,251,333,253,336,254,337,255,339,256,342,258,343,259,344,261,347,261,350,260,352,257,352,254,355,254,356,255,358,254,360,253,361,253,362,254,365,255,368,255,370,255,373,255,375,255,377,257,378,258,379,260,380,262,381,264,381,267,380,268,379,270,377,272,377,274,375,275,373,275,371,273,369,274,367,275,366,274,364,274,363,276,361,277,360,278,359,279,357,279,355,278,354,277,354,279,353,280,352,282,349,283,347,282,345,281,343,278,342,276,340,274,338,273,337,274,335,275,332,275,329,275,328,271,328,269,327,268,327,271,325,272,323,271,321,267,322,263,322,260,321,257,321,253,322,249" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".pangasinan"}'>
		<!-- la union -->
		<area class="la_union" shape="poly" coords="348,228,350,227,353,225,356,224,358,224,360,225,361,226,362,228,363,230,364,233,362,235,365,238,363,240,361,242,360,243,360,245,360,247,361,251,362,255,360,256,358,258,355,258,352,256,350,254,349,250,348,245,346,240,348,237,349,235" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".la_union"}'>
		<!-- benguet -->
		<area class="benguet" shape="poly" coords="362,236,363,234,364,231,364,227,366,224,369,223,371,224,373,225,376,225,377,228,378,230,378,233,378,236,378,237,379,240,379,242,379,244,379,246,379,248,378,250,376,252,374,253,372,254,373,256,372,257,370,258,367,258,364,257,361,255,359,253,358,249,357,244,357,242" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".benguet"}'>
		<!-- nueva viscaya -->
		<area class="nueva_viscaya" shape="poly" coords="378,238,381,237,385,237,388,236,392,236,395,235,396,233,398,232,401,233,402,235,403,237,402,241,402,244,403,246,405,248,404,251,402,253,399,255,398,256,400,259,400,261,405,268,404,270,401,272,398,275,394,276,392,274,391,272,389,267,390,266,390,264,387,263,384,262,381,261,379,261,377,262,375,260,373,258,371,257,370,254,372,252,374,250,376,248" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".nueva_viscaya"}'>
		<!-- quirino -->
		<area class="quirino" shape="poly" coords="403,237,405,237,407,237,409,236,411,238,413,241,415,243,417,245,419,246,422,245,427,243,429,243,432,243,431,246,428,249,426,252,423,256,421,259,416,261,412,264,408,267,405,270,402,269,401,266,398,264,396,261,395,257,397,253,399,251,401,250,400,248,399,246,398,242,400,239" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".quirino"}'>
		<!-- isabela -->
		<area class="isabela" shape="poly" coords="415,198,418,197,421,197,424,196,427,197,430,197,434,197,437,197,439,197,439,200,441,202,441,204,443,205,445,206,448,206,450,208,450,210,449,212,450,215,451,214,452,214,454,216,454,220,453,225,452,230,449,234,447,237,445,242,441,245,437,246,435,245,433,245,430,245,427,246,424,248,421,249,418,250,416,249,414,247,412,245,410,243,409,241,408,240,406,240,404,240,401,240,400,239,400,236,399,235,397,233,399,231,402,229,404,229,406,227,407,225,407,221,408,216,408,211,409,205" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".isabela"}'>
		<!-- ifugao -->
		<area class="ifugao" shape="poly" coords="376,227,378,226,380,224,381,222,383,221,384,221,387,219,389,219,391,219,393,220,395,220,397,218,400,217,402,217,405,216,408,217,410,217,411,219,410,221,411,224,411,226,408,229,405,230,402,231,401,231,400,232,398,234,397,236,395,238,391,238,389,238,386,238,383,239,380,240,377,240,376,239,375,236,374,231,375,226" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".ifugao"}'>
		<!-- mountain province -->
		<area class="mountain_province" shape="poly" coords="375,213,378,212,380,211,382,211,385,212,388,213,391,214,394,212,397,211,400,208,402,208,404,208,406,209,409,210,410,211,410,213,410,215,410,218,407,218,404,219,400,219,397,220,396,222,392,222,388,222,386,223,385,224,383,224,383,226,380,228,378,229,375,228,372,228,371,225,371,220,373,215,377,212" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".mountain_province"}'>
		<!-- cagayan -->
		<area class="cagayan" shape="poly" coords="390,150,394,151,397,153,399,155,403,157,406,158,410,159,413,161,417,162,420,163,424,164,427,163,429,161,431,160,432,158,434,155,436,154,440,154,442,156,443,159,445,161,446,165,447,169,444,171,442,173,439,175,439,177,441,180,439,184,438,188,439,193,439,196,439,199,436,200,431,200,426,200,422,201,418,201,414,201,411,201,408,198,406,196,404,194,401,191,399,188,396,186,396,183,398,179,400,178,401,174,403,171,403,168,402,166,399,165,395,162,392,161,389,159,387,157,386,157,384,159,381,161,380,157,382,153,383,151,388,150" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".cagayan"}'>
		<!-- kalinga apayao -->
		<area class="kalinga_apayao" shape="poly" coords="382,156,385,154,387,154,389,155,390,158,393,158,396,159,399,161,402,162,404,164,407,165,407,168,407,171,406,174,404,177,402,180,399,185,401,185,403,187,405,189,406,190,407,192,409,194,411,196,413,198,415,199,415,202,413,204,412,206,411,209,410,211,408,213,405,212,403,211,401,212,398,214,395,215,393,217,390,217,387,216,384,214,382,214,379,213,378,211,378,208,380,206,380,202,381,200,383,199,386,197,386,193,386,189,385,189,383,188,381,185,379,181,379,175,380,171,379,170,377,168,379,165" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".kalinga_apayao"}'>
		<!-- abra -->
		<area class="abra" shape="poly" coords="365,184,367,183,369,184,370,182,372,181,374,179,377,178,379,178,381,179,382,180,383,181,383,183,385,184,386,185,387,185,389,186,390,189,390,192,389,194,388,196,388,198,386,200,384,201,383,202,384,204,383,206,382,207,380,208,380,210,380,212,379,213,377,214,375,213,374,213,372,215,370,215,368,214,366,211,365,209,363,210,361,208,360,205,361,203,363,202,362,200,359,200,358,198,358,195" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".abra"}'>
		<!-- ilocos norte -->
		<area class="ilocos_norte" shape="poly" coords="362,154,363,152,365,153,368,154,370,153,370,151,370,150,372,149,374,148,377,148,377,150,378,151,379,152,381,151,383,151,383,154,383,157,381,159,381,161,382,164,383,165,380,167,382,168,383,170,383,172,382,174,382,176,381,178,382,179,380,181,378,181,376,181,374,183,370,185,369,186,366,186,365,189,362,190,362,191,360,191,359,189,358,185,359,184,358,183,355,182,356,180,356,175,357,172,358,169,359,166,361,164,361,159,360,156" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".ilocos_norte"}'>
		<!-- ilocos sur -->
		<area class="ilocos_sur" shape="poly" coords="354,181,357,181,359,181,361,182,362,183,362,185,361,187,361,188,362,189,362,191,362,193,361,195,360,196,360,199,362,199,363,199,364,201,365,202,363,204,363,205,363,206,365,208,368,208,369,209,370,211,371,213,373,212,375,211,377,212,377,214,375,216,374,217,374,220,374,222,373,225,371,226,369,226,367,227,367,230,366,232,366,236,365,237,363,238,361,236,360,234,360,232,360,230,359,227,357,227,355,226,353,225,353,222,353,218,353,214,353,208,353,204,352,200,350,199,349,196,350,191,353,188" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".ilocos_sur"}'>
		<!-- batanes -->
		<area class="batanes" shape="poly" coords="392,138,396,137,399,136,402,135,404,136,406,139,405,141,402,141,397,142,393,142,391,141,390,137" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".batanes"}'>
		<area class="batanes" shape="poly" coords="419,135,420,133,423,132,427,133,429,133,430,136,430,137,429,139,427,141,424,142,424,143,423,145,420,144,419,142,419,139,419,137,419,135" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".batanes"}'>
		<area class="batanes" shape="poly" coords="389,126,394,126,397,130,398,135,394,138,388,135,389,129" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".batanes"}'>
		<area class="batanes" shape="poly" coords="400,114,407,114,412,117,413,121,411,125,407,126,400,124,399,115" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".batanes"}'>
		<area class="batanes" shape="poly" coords="424,107,429,107,430,111,430,115,427,115,423,113,422,109,424,108" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".batanes"}'>
		<area class="batanes" shape="poly" coords="422,69,424,68,426,67,430,68,428,70,426,72,426,74,424,75,425,76,424,78,422,79,418,78,420,75" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".batanes"}'>
		<area class="batanes" shape="poly" coords="417,51,422,51,425,53,426,57,422,60,417,59" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".batanes"}'>
	</map>

	<map name="visayas_map">
		<!-- bohol -->
		<area class="bohol" shape="poly" coords="392,392,395,391,399,391,400,387,402,384,403,383,405,381,407,379,410,378,413,379,414,379,417,378,419,378,420,380,422,381,425,382,428,384,430,385,432,386,434,387,434,390,434,393,435,395,436,396,434,398,434,398,434,399,436,400,436,402,437,403,437,406,435,408,433,409,431,410,428,409,427,409,425,410,424,412,423,413,422,415,419,416,416,417,413,416,410,416,407,417,404,418,400,417,397,416,396,416,393,416,390,418,387,420,385,421,383,418,382,416,382,414,383,412,385,410,385,410,387,409,386,407,384,406,384,401,385,396" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".bohol"}'>
		<!-- negros oriental -->
		<area class="negros_oriental" shape="poly" coords="370,437,371,436,374,434,376,432,379,432,381,431,383,431,384,432,385,434,384,436,383,438,381,440,383,441,383,444,383,446,381,448,378,448,375,449,372,449,370,447,368,446,366,444,366,441" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".negros_oriental"}'>
		<area class="negros_oriental" shape="poly" coords="317,426,318,424,321,421,323,418,326,414,329,411,331,407,334,404,336,401,340,396,342,392,344,388,347,384,350,379,350,377,350,374,351,373,349,368,350,366,352,364,354,363,356,363,357,363,358,365,359,366,360,366,362,369,363,372,362,375,361,378,360,382,359,385,358,388,357,391,356,394,353,396,351,397,351,399,353,402,352,405,353,409,353,412,351,414,349,415,351,417,353,420,355,423,357,424,359,427,360,430,362,432,362,435,361,438,359,441,357,445,354,449,352,451,348,451,344,451,340,451,338,451,335,448,332,444,331,442,330,440,330,437,330,434,328,433,325,433,321,432,319,431,317,428" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".negros_oriental"}'>
		<!-- cebu -->
		<area class="cebu" shape="poly" coords="398,310,401,310,403,311,404,313,404,316,403,319,403,322,401,323,401,325,403,326,403,327,403,330,403,332,403,335,404,336,404,339,402,341,402,344,402,348,402,353,402,357,402,362,402,367,401,370,399,373,396,376,394,375,392,378,390,380,386,381,383,383,381,385,380,387,380,390,380,395,378,397,377,400,375,404,374,408,373,412,371,416,370,420,367,424,364,428,362,429,359,430,357,429,356,425,356,420,356,417,357,414,357,411,357,407,357,405,359,400,359,397,360,393,362,389,363,386,366,383,369,380,373,368,374,366,376,365,377,361,379,358,381,351,383,346,385,345,388,341,390,336,391,332,391,329,391,326,393,323,392,320,392,317" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".cebu"}'>
		<area class="cebu" shape="poly" coords="380,309,383,309,385,310,386,311,388,313,388,316,390,317,391,320,389,322,387,324,384,323,382,323,379,322,378,319,377,315,378,311" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".cebu"}'>
		<!-- negros occidental -->
		<area class="negros_occidental" shape="poly" coords="309,391,313,391,316,391,320,390,324,388,328,386,331,383,329,380,328,377,329,374,329,372,329,370,329,366,328,364,328,361,329,358,330,356,331,354,333,351,334,348,336,346,335,343,336,343,334,340,332,339,333,337,336,335,339,333,341,333,343,334,346,332,350,330,351,329,353,328,355,328,357,330,359,331,362,331,365,331,367,333,369,334,371,335,373,338,374,341,375,344,374,347,372,349,371,351,370,354,371,359,369,362,367,364,364,365,364,367,361,370,360,370,358,369,357,368,356,367,354,366,353,368,354,370,355,373,354,376,353,379,352,382,349,387,346,391,344,395,341,399,338,403,335,408,331,413,326,419,322,425,319,427,316,429,314,426,312,422,309,419,306,415,304,411,303,409,302,405,303,401,304,397" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".negros_occidental"}'>
		<!-- iloilo -->
		<area class="iloilo" shape="poly" coords="298,318,300,316,302,315,304,315,306,316,308,318,309,316,311,316,313,318,314,316,316,314,318,313,320,313,322,314,323,316,325,314,327,314,329,314,330,315,332,317,334,316,333,314,334,313,336,312,336,311,337,310,338,309,339,308,342,306,343,304,345,302,344,300,345,299,346,298,348,298,350,302,351,305,352,308,350,310,348,313,347,314,349,317,350,319,349,322,347,324,345,323,343,324,343,325,342,327,340,330,338,332,335,331,334,333,331,334,328,335,330,336,330,338,328,340,329,342,327,344,323,345,325,346,326,348,327,352,326,356,325,359,324,362,322,365,319,367,316,367,313,369,311,369,309,367,308,363,307,360,307,358,309,355,310,353,311,352,308,352,305,353,303,354,300,354,297,355,293,356,291,358,289,359,287,362,284,363,283,360,283,355,284,351,286,348,288,347,289,347,291,346,293,343,294,339,295,337,297,335,299,333,300,331,301,331,301,328,301,326,299,324,297,322,296,321" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".iloilo"}'>
		<!-- antique -->
		<area class="antique" shape="poly" coords="275,364,276,361,277,359,277,357,278,354,278,352,277,348,276,346,276,344,277,342,277,338,277,336,278,334,280,332,282,329,284,327,282,323,282,319,283,317,283,315,281,314,281,312,283,310,283,309,283,305,283,302,284,300,285,297,285,295,285,292,285,291,286,289,283,288,280,288,278,287,276,287,273,286,272,284,272,282,273,279,274,276,276,274,279,273,281,273,283,274,286,277,288,280,290,282,292,282,293,284,294,285,295,287,293,289,292,291,293,293,293,296,292,299,293,301,295,303,295,305,296,308,296,312,296,315,296,317,298,319,301,321,303,324,304,326,304,328,304,330,302,334,300,337,297,338,297,341,297,344,296,346,292,349,290,349,287,351,286,352,286,355,285,358,286,360,286,363,283,366,280,369,278,369,276,366" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".antique"}'>
		<!-- aklan -->
		<area class="aklan" shape="poly" coords="283,276,286,276,291,276,295,277,298,280,302,283,306,285,308,288,310,290,311,294,314,294,315,295,317,297,316,301,315,303,313,304,309,303,306,303,307,306,306,309,303,311,299,311,297,311,294,311,293,308,292,305,291,303,290,301,289,297,290,295,290,291,290,287,291,285,289,283,287,282,284,279" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".aklan"}'>
		<!-- capiz -->
		<area class="capiz" shape="poly" coords="296,310,298,309,301,309,302,308,303,306,303,304,303,303,306,301,309,301,311,302,313,301,314,300,317,298,319,296,322,294,325,294,327,293,328,292,330,292,332,294,333,296,336,297,337,300,340,298,342,297,344,297,346,297,347,299,346,303,346,305,344,308,342,310,340,311,339,313,338,315,336,318,334,320,330,321,329,319,327,319,325,318,323,321,321,320,319,318,318,318,317,319,315,321,314,322,311,321,309,320,307,322,305,321,303,319,301,321,299,322,297,323,296,320,295,320,293,319,293,314,294,311" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".capiz"}'>
		<!-- southern leyte -->
		<area class="southern_leyte" shape="poly" coords="456,357,459,356,462,356,463,355,466,353,469,351,470,353,471,355,471,358,472,361,471,364,474,367,477,370,477,374,474,376,471,377,468,377,468,379,473,381,474,385,476,387,477,391,479,395,477,398,474,399,472,398,470,396,468,394,464,390,463,384,462,380,460,376,460,379,461,382,462,386,463,391,461,394,459,395,458,392,455,390,453,388,451,386,448,385,445,384,441,382,443,380,445,378,446,377,449,374,452,372,452,370,452,365,452,361,453,359" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".southern_leyte"}'>
		<!-- leyte -->
		<area class="leyte" shape="poly" coords="416,347,417,346,419,346,420,347,421,347,423,345,424,345,426,345,429,346,430,348,431,349,431,351,430,354,428,355,425,356,422,356,420,355,418,357,416,358,415,357,414,354,413,350,414,348" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".leyte"}'>
		<area class="leyte" shape="poly" coords="417,287,420,285,422,284,424,284,427,284,430,285,431,287,432,290,434,293,436,295,437,297,436,299,432,302,431,302,432,304,433,306,435,307,439,307,442,306,443,304,445,301,449,300,452,300,455,300,457,302,458,304,458,306,458,309,458,311,460,314,460,317,461,319,460,321,461,323,461,325,462,327,462,329,461,332,461,336,460,338,460,340,460,343,462,344,465,345,466,347,468,349,470,352,469,354,467,355,466,357,464,358,461,358,459,359,456,360,455,362,455,366,455,370,454,373,453,375,450,377,447,380,446,382,443,383,441,380,441,377,441,375,441,372,442,371,439,368,438,364,438,361,438,358,440,357,441,355,442,353,442,350,442,347,442,343,441,341,439,340,437,337,435,334,434,333,434,337,432,338,430,338,426,340,423,338,421,335,419,332,419,329,421,327,419,324,418,320,418,317,418,314,417,311,416,308,415,305,413,301,412,298,413,295,415,293,417,293,415,289" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".leyte"}'>
		<!-- eastern samar -->
		<area class="eastern_samar" shape="poly" coords="418,250,421,249,424,250,425,247,427,246,429,247,431,249,433,249,435,250,437,252,440,253,443,252,443,251,444,251,447,252,448,253,450,252,451,251,453,251,456,251,459,251,460,249,462,247,464,248,466,249,467,250,467,254,469,255,467,258,465,260,466,263,466,266,468,265,470,266,473,267,474,271,475,274,475,277,475,280,475,283,475,287,476,290,477,293,476,296,479,299,480,301,480,304,480,308,479,311,477,313,475,316,475,319,474,324,472,326,469,325,467,323,466,321,465,319,465,316,461,315,459,315,457,315,455,312,454,310,453,308,454,306,452,306,450,305,447,303,444,297,446,295,448,295,451,294,452,292,454,291,454,289,453,286,455,285,452,285,449,284,447,282,444,279,442,277,439,277,436,273,435,271,433,269,431,269,428,268,425,267,422,263,419,260,417,256,415,253,416,250" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".eastern_samar"}'>
		<!-- western samar -->
		<area class="western_samar" shape="poly" coords="466,245,468,243,469,241,471,243,472,246,473,249,475,248,477,248,480,249,484,250,486,252,488,253,489,256,488,258,485,259,486,262,488,262,488,266,486,267,485,268,485,270,484,272,484,275,486,277,486,280,487,283,488,286,487,288,486,291,487,293,488,296,490,298,489,301,491,303,495,305,496,308,495,312,492,313,492,315,494,314,496,315,499,318,500,320,502,322,502,326,501,331,499,330,496,328,494,324,493,324,490,325,488,325,484,326,480,327,477,325,474,324,472,321,471,318,471,315,472,314,473,312,474,311,475,309,476,307,476,304,476,301,474,299,471,297,472,294,472,291,471,286,471,283,471,279,471,275,470,273,470,269,468,269,465,270,462,268,461,266,461,263,461,260,463,257" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".western_samar"}'>
		<!-- northern samar -->
		<area class="northern_samar" shape="poly" coords="411,233,414,232,417,232,420,234,425,234,429,235,436,236,440,236,442,235,443,233,446,234,448,232,450,231,453,231,455,232,457,233,459,231,462,231,466,231,468,232,469,235,472,236,475,239,476,242,476,246,477,249,475,252,474,252,471,251,470,250,470,248,470,247,469,248,467,250,464,251,462,252,460,254,455,254,452,255,449,256,445,256,443,254,442,256,438,256,434,254,432,253,431,253,428,252,427,251,426,253,422,253,419,253,416,253,413,248,411,240,409,237" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".northern_samar"}'>
	
	</map>
	
	<map name="mindanao_map">
		<!-- tawi tawi -->
		<area class="tawi_tawi" shape="poly" coords="233,458,235,458,237,459,238,460,238,462,240,464,240,467,238,469,237,472,234,474,232,472,231,471,229,473,227,471,227,474,226,476,222,477,220,475,217,477,216,479,212,479,211,477,211,474,211,471,215,469,218,467,224,464" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".tawi_tawi"}'>
		<!-- sulu -->
		<area class="sulu" shape="poly" coords="267,424,268,423,271,422,274,420,276,419,280,419,282,421,284,423,286,424,290,424,294,424,295,425,296,427,296,430,294,432,290,435,287,435,285,434,283,431,282,432,281,434,277,435,274,433,272,434,269,434,266,432,265,428,266,424" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".sulu"}'>
		<!-- basilan -->
		<area class="basilan" shape="poly" coords="326,383,328,385,330,387,332,389,335,388,338,389,340,390,341,392,340,394,337,396,335,395,334,398,334,401,332,403,328,404,325,405,322,406,319,406,317,403,315,401,314,399,314,396,311,394,310,391,311,387,313,387,317,387" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".basilan"}'>
		<!-- zamboanga_del_sur -->
		<area class="zamboanga_del_sur" shape="poly" coords="319,363,323,363,326,363,329,364,330,361,332,358,332,354,333,351,335,347,337,343,337,340,340,337,341,334,346,330,351,324,355,324,358,323,361,321,364,322,367,323,369,324,372,321,374,319,376,318,379,319,379,315,379,309,380,307,383,307,387,306,391,306,397,306,400,307,400,310,400,314,400,316,405,317,406,319,407,322,407,326,403,330,402,332,398,331,397,331,396,332,396,334,396,336,396,339,394,342,391,343,391,344,392,347,394,348,395,350,395,353,393,355,389,356,387,354,386,352,384,351,383,349,382,347,381,350,379,350,376,349,375,347,374,345,375,342,376,341,375,339,374,342,373,345,373,348,371,349,371,350,368,348,366,350,370,350,371,352,370,354,369,357,366,359,363,361,360,360,359,358,358,356,358,353,359,350,360,349,359,345,359,343,358,340,358,336,357,334,354,336,351,337,349,339,347,340,348,341,349,343,347,346,345,348,343,348,342,351,343,352,343,355,342,358,340,359,338,363,337,366,336,370,334,375,331,379,329,382,326,381,323,380,320,377,318,375,316,372,315,368,315,363" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".zamboanga_del_sur"}'>
		<!-- zamboanga_del_norte -->
		<area class="zamboanga_del_norte" shape="poly" coords="316,364,317,361,320,359,323,357,323,355,323,350,325,346,326,344,326,338,325,335,326,331,329,327,332,325,332,321,337,319,343,316,350,316,354,312,359,314,363,313,367,311,369,309,366,307,365,305,368,302,368,298,370,295,374,293,378,292,381,292,382,289,385,289,386,286,388,285,385,283,385,281,388,278,390,279,392,281,394,282,396,283,397,287,399,289,399,293,400,306,399,308,395,308,392,308,389,308,387,309,383,309,382,312,382,316,382,319,379,321,376,322,375,323,372,326,369,327,366,326,364,325,361,324,359,325,355,326,352,328,348,332,344,335,342,338,341,341,340,344,338,348,336,352,334,356,335,359,332,362,330,366,326,367,320,367,317,365" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".zamboanga_del_norte"}'>
		<!-- undefine -->
		<area class="undefine" shape="poly" coords="397,287,399,285,402,285,405,287,409,289,410,292,412,296,414,302,415,308,414,313,412,317,409,319,406,320,404,318,401,320,398,318,397,315,397,308,396,302,397,288" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".undefine"}'>
		<!-- lanao_del_norte -->
		<area class="lanao_del_norte" shape="poly" coords="404,316,408,313,412,312,416,310,418,308,421,307,426,307,429,306,430,301,432,301,435,299,438,299,441,298,445,302,448,304,449,307,450,310,449,313,448,316,444,313,441,312,439,310,436,309,435,310,437,313,436,315,435,318,432,321,429,323,427,325,425,326,425,329,424,332,421,335,418,336,416,335,412,337,407,337,405,333,402,331,400,328,403,326,405,323,403,319" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".lanao_del_norte"}'>
		<!-- lanao_del_sur -->
		<area class="lanao_del_sur" shape="poly" coords="415,333,419,334,421,331,422,328,422,326,423,324,426,323,426,320,428,320,430,320,432,317,434,315,433,312,433,310,435,308,437,307,438,308,440,310,441,311,444,311,445,313,446,314,448,315,450,316,452,318,454,321,455,323,453,325,451,326,453,327,454,329,456,331,458,334,459,337,458,339,455,341,451,342,448,341,446,339,445,337,443,340,441,341,439,344,437,347,432,349,430,351,428,353,425,353,423,349,422,346,418,343,415,340,413,337,413,336" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".lanao_del_sur"}'>
		<!-- maguindanao -->
		<area class="maguindanao" shape="poly" coords="427,350,429,347,431,345,435,344,437,340,440,337,443,336,444,337,445,339,445,343,445,346,447,348,447,351,443,355,441,358,438,361,439,362,442,358,444,357,446,358,447,360,446,363,445,365,446,367,448,370,450,372,454,372,453,368,452,363,453,360,456,360,459,361,460,363,462,366,463,370,464,372,464,376,465,379,467,381,469,382,471,386,468,388,466,390,465,392,461,392,457,391,455,389,454,387,455,386,453,384,452,382,451,382,450,384,450,386,447,389,445,389,442,389,438,388,435,389,432,388,430,387,428,386,423,387,420,387,417,386,415,384,417,381,414,379,415,374,418,368,420,364,423,363,426,361,426,359,428,357,428,354,427,352,427,349" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".maguindanao"}'>
		<!-- sultan_kudarat -->
		<area class="sultan_kudarat" shape="poly" coords="420,384,423,383,427,383,430,383,432,384,435,385,438,385,443,386,445,386,447,384,447,381,449,379,451,378,454,378,455,379,456,382,457,383,458,385,459,387,461,389,463,390,465,387,466,385,469,384,472,382,476,382,478,385,478,387,480,390,479,394,479,397,475,398,472,398,468,397,466,398,463,400,460,400,459,397,457,396,455,395,452,396,453,399,454,400,454,404,454,408,454,411,452,413,448,413,444,413,440,413,438,413,441,416,440,419,438,421,432,421,428,417,425,414,422,408,419,403,419,393" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".sultan_kudarat"}'>
		<!-- south_cotabato -->
		<area class="south_cotabato" shape="poly" coords="434,409,439,408,446,409,451,409,452,407,450,404,451,400,449,398,449,395,451,392,453,390,455,392,457,390,459,392,462,396,464,395,468,394,472,394,475,394,479,394,479,397,478,399,480,401,481,403,483,406,487,406,491,406,494,408,495,411,496,414,496,416,498,420,496,422,495,425,494,429,494,432,493,435,492,438,489,442,488,444,483,447,482,444,480,441,478,438,475,436,475,433,476,431,479,427,480,425,479,421,478,423,477,424,477,427,475,429,474,433,472,434,469,436,465,435,463,434,458,433,453,430,450,429,446,427,443,425,439,423,437,421,436,418,437,415,434,413,433,409" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".south_cotabato"}'>
		<!-- davao_del_sur -->
		<area class="davao_del_sur" shape="poly" coords="484,339,487,339,491,339,494,340,495,342,494,347,494,348,496,350,495,353,495,357,498,357,501,358,503,360,504,362,506,362,508,364,508,367,508,370,508,373,509,376,507,378,504,377,502,373,501,370,498,370,496,371,495,374,494,378,492,381,490,384,489,388,490,391,494,392,496,394,498,396,500,400,501,403,504,406,505,412,506,415,506,420,505,425,502,429,499,434,495,441,493,447,489,450,483,449,482,445,483,444,486,441,488,438,489,435,491,433,491,430,491,427,492,424,493,422,495,420,493,417,492,413,491,411,489,409,487,409,484,410,481,409,479,406,477,403,475,399,476,394,476,391,474,389,474,385,475,382,476,380,477,378,479,376,481,374,481,371,483,370,483,367,482,366,479,364,479,360,480,359,479,357,479,354,479,349,481,344" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".davao_del_sur"}'>
		<!-- north_cotabato -->
		<area class="north_cotabato" shape="poly" coords="446,335,448,337,450,339,453,338,456,338,459,337,460,339,462,340,462,343,463,345,464,347,464,349,466,349,469,351,471,349,473,346,475,344,477,342,480,341,483,339,485,341,484,344,483,347,482,350,482,352,482,354,483,356,483,360,482,362,485,364,486,367,486,370,485,372,484,374,482,377,479,380,478,385,475,386,472,386,469,387,466,386,464,383,461,381,460,377,461,373,459,369,457,365,456,363,456,367,456,370,455,373,450,375,446,374,444,370,442,367,442,363,443,361,442,361,440,364,437,364,435,362,438,358,440,354,441,351,444,349,442,346,442,342,443,338,444,336" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".north_cotabato"}'>
		<!-- bukidnon -->
		<area class="bukidnon" shape="poly" coords="460,293,461,290,463,289,465,287,468,287,472,288,474,287,476,286,479,287,481,288,480,294,481,297,484,300,485,303,486,305,485,308,487,311,488,313,488,318,490,322,492,326,491,331,491,335,489,338,486,338,485,340,483,342,479,345,475,348,472,351,470,353,467,353,464,352,461,350,460,348,458,344,457,340,456,336,454,334,452,331,450,328,447,326,450,323,452,322,450,321,448,318,447,315,447,312,447,311,446,307,448,303,449,299,451,298,458,296" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".bukidnon"}'>
		<!-- misamis_oriental -->
		<area class="misamis_oriental" shape="poly" coords="430,301,431,297,431,292,433,289,434,288,437,287,440,285,443,286,446,288,448,290,451,292,454,292,455,288,454,286,452,285,453,282,454,281,454,275,454,270,454,267,457,265,460,264,463,265,467,267,468,268,470,270,472,273,474,271,473,265,474,261,477,260,479,262,480,263,481,266,481,271,481,276,480,288,478,289,474,288,472,290,467,289,466,290,464,292,463,294,463,297,461,300,458,300,454,299,453,300,452,302,452,304,451,306,448,308,444,305,442,304,439,301,436,303,432,305,430,303" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".misamis_oriental"}'>
		<area class="misamis_oriental" shape="poly" coords="449,252,453,251,455,252,458,253,459,255,459,257,460,260,460,263,458,264,456,265,451,265,449,263,447,259,447,254" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".misamis_oriental"}'>
		<!-- agusan_del_norte -->
		<area class="agusan_del_norte" shape="poly" coords="489,242,492,241,496,242,500,243,503,244,505,248,504,251,505,253,507,255,508,259,507,263,505,267,505,272,505,275,504,279,504,283,501,284,497,284,494,285,493,287,489,290,486,289,482,290,478,289,478,286,478,283,478,279,478,274,478,270,478,267,480,263,482,265,485,265,488,264,490,262,491,259,489,254,487,248,487,243" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".agusan_del_norte"}'>
		<!-- agusan_del_sur -->
		<area class="agusan_del_sur" shape="poly" coords="480,287,484,287,486,286,489,287,490,284,492,282,494,281,497,281,501,281,501,279,501,277,502,275,502,272,503,270,503,267,503,262,505,260,507,260,507,263,508,267,510,270,512,273,515,276,516,279,518,283,519,285,517,288,517,291,519,294,521,297,523,298,525,298,527,299,528,301,529,305,528,307,528,310,531,314,532,317,532,320,529,321,526,321,522,321,519,321,516,321,514,322,508,322,504,322,500,322,497,321,493,321,489,321,487,320,485,316,485,313,482,310,483,306,483,304,481,303,477,298,478,292" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".agusan_del_sur"}'>
		<!-- davao_del_norte -->
		<area class="davao_del_norte" shape="poly" coords="489,318,493,317,496,317,498,318,501,319,507,318,512,318,516,317,522,317,525,317,527,318,529,321,530,324,530,328,531,332,532,336,533,340,531,343,531,345,532,348,533,351,535,353,535,356,532,359,528,362,525,365,523,366,520,367,517,370,514,371,510,367,509,363,508,360,506,357,504,357,503,359,501,361,498,360,494,360,492,358,492,354,491,351,491,347,491,343,488,343,484,343,481,341,482,338,484,334,485,334,487,334,488,331,489,327,488,325,487,321,487,318" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".davao_del_norte"}'>
		<!-- davao_oriental -->
		<area class="davao_oriental" shape="poly" coords="526,319,529,318,531,318,533,320,535,323,536,325,539,327,542,330,544,332,546,335,546,339,546,345,546,349,545,351,546,356,546,360,544,363,542,367,541,370,539,373,536,373,534,373,532,376,529,377,528,378,529,380,530,382,532,384,531,387,530,390,531,394,530,398,530,403,530,408,528,411,526,408,524,406,522,404,521,399,519,394,519,388,519,383,518,379,514,376,513,372,514,369,517,367,521,363,525,360,529,356,531,356,530,354,528,351,526,347,527,343,530,341,528,333,526,326,526,321" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".davao_oriental"}'>
		<!-- surigao_del_sur -->
		<area class="surigao_del_sur" shape="poly" coords="512,239,515,242,515,244,513,246,516,248,517,251,519,253,521,251,525,248,528,250,527,252,526,255,525,259,526,262,529,265,531,267,533,270,533,274,533,278,530,280,528,283,527,285,525,285,523,286,523,289,526,290,528,288,533,290,535,291,537,292,537,295,536,298,534,301,535,303,535,306,538,305,540,305,540,308,539,312,539,316,539,318,539,321,536,324,533,325,531,319,529,315,526,312,525,308,525,305,525,302,524,300,521,301,518,299,516,294,514,291,514,287,515,286,516,285,515,283,513,281,511,279,509,276,509,273,507,271,504,268,503,264,505,259,504,257,501,254,501,250,502,246,507,242" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".surigao_del_sur"}'>
		<!-- surigao_del_norte -->
		<area class="surigao_del_norte" shape="poly" coords="487,245,486,242,485,239,483,236,482,232,483,229,485,225,487,223,490,224,493,225,495,226,497,229,498,233,500,233,503,234,506,236,508,238,510,239,513,241,510,244,505,248,503,249,501,247,499,245,497,244,494,244,491,245,490,247,488,248" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".surigao_del_norte"}'>
		<area class="surigao_del_norte" shape="poly" coords="509,226,513,227,515,229,517,233,516,238,514,240,512,240,510,239,508,237,508,234,508,231" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".surigao_del_norte"}'>
		<area class="surigao_del_norte" shape="poly" coords="517,210,519,210,520,213,521,216,523,220,521,222,523,223,525,224,525,228,522,229,518,230,515,230,514,227,512,225,510,222,511,217,514,212" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".surigao_del_norte"}'>
		<area class="surigao_del_norte" shape="poly" coords="494,190,496,189,498,189,501,191,501,193,501,195,500,199,500,202,500,205,502,209,502,212,502,216,502,219,503,222,501,226,498,227,495,226,492,224,493,221,494,220,493,218,492,216,491,214,489,213,487,211,487,208,489,205,489,203,488,200,488,197" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false,"groupBy": ".surigao_del_norte"}'>

		
	</map>
	
	
	<!-- below are the scripts -->
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery2.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/jqueryui.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery.form.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/highlight.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>video_player/video.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/script.js"></script>
	
	
</body>
</html>



















































