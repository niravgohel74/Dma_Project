<!DOCTYPE html>
<html>
<head>
<title>Log In</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="css/Login.css" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Log In</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form method="POST" >
					<input class="text email" type="email" name="email" placeholder="Email" required>
					<input class="text" type="password" name="password" placeholder="Password" required=""><br>
                    <div class="wthree-text">
						<label class="anim">
							<span>Forgot Password?</span>
						</label>
						<div class="clear"> </div>
					</div><br>
                                        <?php
                                            if(isset($_POST["sub_btn"])){    
                                            $con= mysqli_connect('localhost','root','','dma');
                                            if($con){}
                                            else {die("Connection Failed"). mysqli_connect_error();}
                                            $email= $_POST['email'];
                                            $pswrd= $_POST['password'];
                                            $sql="Select email, password from user_data where email='$email' AND password='$pswrd'";
                                            $res=mysqli_query($con,$sql) or die("Query failed");
                                            if(mysqli_num_rows($res) > 0){
                                                while($row= mysqli_fetch_assoc($res)){
                                                header("Location: index1.php");
                                                }
                                            }
                                            else {?>
                                        <p style="color:#ff4f4f; font-weight: bold">Email or Password doesn't match</p>
                                            <?php
                                            }
                                            }    
                                        ?>
					<input type="submit" value="Log In" name="sub_btn">
				</form>
				<p>Need an account? <a href="signup.php" style = color="#ffff"> Sign Up!</a></p>
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