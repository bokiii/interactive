<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Philippine Interactive Map</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>styles/normalize.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>styles/style.css" />
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
		
		
		<div id="group_discussion_content">
			
			<div id="left_content" class="left">
				<img src="<?php echo base_url(); ?>images/rope.png" alt="left rope" id="left_rope" class="left" />
				<div class="clear"></div>
				<img src="<?php echo base_url(); ?>images/big_back.png" alt="Big Back" id="big_back" class="left button" />
			</div>
			
			<div id="right_content" class="right">
				<img src="<?php echo base_url(); ?>images/discuss_background.png" alt="right background" id="right_background" class="right" />
				<div id="highlight_div">
					<img src="<?php echo base_url(); ?>images/for_highlight.png" width="768" height="675" alt="Highlight" id="luzon_highlight" usemap="#luzon_map" />
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
	
	</div> <!-- end container -->
	
	<!-- below are the images for the highlight -->
	
	<map name="luzon_map">
		<!--<area class="palawan" shape="poly" coords="160,620,170,620,180,620,190,629" data-maphilight='{"stroke":false, "fillColor":"4D0180","fillOpacity":0.6,"alwaysOn": false}'>-->
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

	<!-- below are the scripts -->
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery2.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/jqueryui.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery.form.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/highlight.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/script.js"></script>
	
	
</body>
</html>



















































