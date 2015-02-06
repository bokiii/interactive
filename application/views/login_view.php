
<!DOCTYPE html>
<html>
<head>
	<title>The Entrar-shadow Website form | w3layouts</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo base_url(); ?>login_design/css/style.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>

	<div class="main">
		<div class="login-form">
			<h1>Admin Login</h1>
			<div class="head">
				<img src="<?php echo base_url(); ?>login_design/images/user.png" alt="User Image"/>
			</div>
			<form method="post" action="<?php echo base_url(); ?>index.php/login/process_admin_login">
				<input name="username" type="text" class="text" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" >
				<input name="password" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
				<div class="submit">
				<input type="submit" value="LOGIN" >
				</div>	
				<p><a style="color: red;" href="#"><?php echo $this->session->flashdata('error'); ?></a></p>
			</form>
			
		</div>

	</div>

</body>
</html>