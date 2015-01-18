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
		
		<!-- below is the background for the discussion -->
		<img src="<?php echo base_url(); ?>images/start_discussion_background.png" alt="Start Discussion Background" id="start_discussion_background" />
		
		<div id="discussion_content">
			<!-- below is first rope then luzon -->
			<img src="<?php echo base_url(); ?>images/rope.png" alt="first rope" id="first_rope" />
			<img src="<?php echo base_url(); ?>images/luzon.png" alt="luzon" id="luzon" class='button' />
			
			<!-- below is second rope then visayas -->
			<img src="<?php echo base_url(); ?>images/rope.png" alt="second rope" id="second_rope" />
			<img src="<?php echo base_url(); ?>images/visayas.png" alt="visayas" id="visayas" class='button visayas_featured sidebar_button' />
			
			<!-- below is third rope then mindanao -->
			<img src="<?php echo base_url(); ?>images/rope.png" alt="third rope" id="third_rope" />
			<img src="<?php echo base_url(); ?>images/mindanao.png" alt="mindanao" id="mindanao" class='button mindanao_featured sidebar_button' />
			
			<!-- below is fourth rope then back -->
			<img src="<?php echo base_url(); ?>images/rope.png" alt="fourth rope" id="fourth_rope" />
			<img src="<?php echo base_url(); ?>images/back.png" alt="Home Back" id="home_back" class='button' />
			
			<!-- below is for the discuss -->
			<img src="<?php echo base_url(); ?>images/discuss_background.png" alt="Discussion background" id="discuss_background"/>
			
			<img src="<?php echo base_url(); ?>images/luzon_separate.png" alt="Luzon Separate" id="luzon_separate" class='button'/>
			<img src="<?php echo base_url(); ?>images/visayas_separate.png" alt="Visayas Separate" id="visayas_separate" class='button visayas_featured'/>
			<img src="<?php echo base_url(); ?>images/mindanao_separate.png" alt="Mindanao Separate" id="mindanao_separate" class='button mindanao_featured'/>
		
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
		
		<script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery2.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>scripts/jqueryui.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery.form.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>scripts/script.js"></script>

	</div> <!-- end container -->
</body>
</html>






























