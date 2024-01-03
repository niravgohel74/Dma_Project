<!DOCTYPE html>
<html>
<head>
<title>SignUp</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="css/Signup.css" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>SignUp</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form method="post" action="">
					<input class="text" type="text" name="Username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="cpassword" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP" name="sub_btn">
				</form>
				<p>Have an Account? <a href="Login.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		  
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>	
<?php
    $con= mysqli_connect('localhost','root','','dma');
    if($con){}
    else {die("Connection Failed"). mysqli_connect_error();}
	if($_POST['sub_btn']){
		$usr= filter_input(INPUT_POST,'Username');
		$email= filter_input(INPUT_POST,'email');
		$pswrd= filter_input(INPUT_POST,'password');
                $conf_pass= filter_input(INPUT_POST,'cpassword');
		if($pswrd==$conf_pass){	
			$sql="insert into user_data values('$usr','$email','$pswrd')";
			$res=mysqli_query($con,$sql);
			if($res){header("Location: index.php");}
		}
		else{
			echo'Password does not match';
		}
	}
	else{}
?>