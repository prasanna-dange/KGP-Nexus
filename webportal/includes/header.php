<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>
		KGP Forum
	</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/media.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />

		<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>

	<!-- META TAGS NEED TO BE INSERTED HERE TO IMPROVE SEO -->
	<meta name="keywords" content="kgp forum, kgp,swg,iit,iit kgp,forum" />
	<script type="application/x-javascript">
		addEventListener("load", function(){ 
			setTimeout(hideURLbar, 0); }, false); 
		function hideURLbar(){ 
			window.scrollTo(0,1); 
		} 
	</script>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
	<script src="js/jquery.js"></script>

	<link rel="stylesheet" href="css/events.css" type="text/css" media="all"/>

	<!-- SCRIPTS TO BE INCLUDED FOR THE EVENTS SLIDER -->
	<!-- start-smooth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smooth-scrolling -->
</head>
<body>

	<!-- DIV FOR SHOWING THE LOADING IMAGE ICON UNTIL THE PAGE LOADS COMPLETELY -->
	<div class="startload"> &nbsp; </div>

	<!-- LOADING IMAGE THAT IS SHOWN WHEN AN AJAX REQUEST IS BEING DONE -->

	<div class="loading loader">	</div>

	<!-- TOPMOST HEADER STARTS HERE -->
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" class="img-responsive" alt=""></a>
			</div>
			<div class="person">
				<p>A personal blog about everything.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<!-- TAB MENU STARTS HERE -->
	<div class="header-bottom"  >
		<div class="container"  >
			<div class="head-nav" >
				<span class="menu"> </span>
					<ul class="cl-effect-15" align="center" style="margin-left:15%;">
						<li><a class="color2" href="index.php" data-hover="Home">Home</a></li>
						<li><a class="color1" href="counsellingCenter.php" data-hover="Counselling Center">Counselling Center</a></li>
						<li><a class="color3" href="events.php" data-hover="Events">Events</a></li>
						<li><a class="color4" href="games.php" data-hover="Games">Games</a></li>
						<li><a class="color6" href="animals.php" data-hover="Animals">Animals</a></li>
						<li><a class="color5" href="404.php" data-hover="Avisos">Avisos</a></li>
						<li><a class="color7" href="noticias.php" data-hover="Notícias">Notícias</a></li>
						<?php
							if(!isset($_SESSION['username'])){
								echo "<li><a class='color9 pointer' data-toggle='modal' data-target='#logInDiv' data-hover='LogIn'>LogIn</a></li>";
							}
							else{
								echo "<li><a class='color9' href='logout.php'>LogOut</a></li>";
							}
						?>
						<div class="clearfix"> </div>
					</ul>
					<!-- script-for-nav -->
				<script>
					$( "span.menu" ).click(function() {
					  $( ".head-nav ul" ).slideToggle(300, function() {
						// Animation complete.
					  });
					});
				</script>
				<!-- script-for-nav --> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
			
	<!-- LOG IN MODAL -->
	<div class="login-01 modal fade" id="logInDiv" tabindex="-1" role="dialog" aria-labelledby="loginInDiv" aria-hidden="true">
		<div class="modal-dialog"> 
			<div class="modal-content "> 
				<div class="modal-header logInDivHeader"> 
					<div class="one-login-head">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> 
							&times; 
						</button>
						<img src="images/top-lock.png" alt=""/>
						<h1>LOGIN</h1>
						
					</div>
				</div>
				<div class="modal-body logInDivBody">
					<div class="one-login  hvr-float-shadow">								
						<form >
							<li class="highlightDiv">
								<input type="text" class="text" id="username" placeholder="Username"  required><a href="#" class=" icon user"></a>
							</li>
							<li>
								<input type="password" placeholder="Password" id="password" required><a href="#" class=" icon lock"></a>
							</li>
							<div class="p-container">
									<label class="checkbox">
										<input type="checkbox" name="checkbox" ><i></i>Remember Me
									</label>
									<h6><a href="forgetPassword.php">Forgot Password ?</a> </h6>
										<div class="clear"> </div>
							</div>
							<div class="submit">
									<input type="button" onclick="checkLogin()" value="SIGN IN" >
							</div>
							<div class="social-icons">
								<p>Or you can Login with one of the following</p>
									<ul class="soc_icons2">
										<li class="pic"><a href="#"><i class="icon_4"></i></a></li>
										<li class="pic"><a href="#"><i class="icon_5"></i></a></li>
										<li class="pic"><a href="#"><i class="icon_6"></i></a></li>
											<div class="clear"> </div>
									</ul>
							</div>
								<h5>Don't have an account ?<a href='signUp.php'> Sign Up </a></h5>
							</form>
					</div>
				</div>
			</div>
		</div>
	</div>		

	<!-- ALERT MODAL DIV -->
	<div class="modal fade" id="alertDiv" tabindex="-1" role="dialog" aria-labelledby="alertDiv" aria-hidden="true">
		<div class="modal-dialog" style="margin-top:20em;"> 
			<div class="modal-content " style+"border-radius:5px;"> 
				<div class="modal-header " style="background-color:#E8504A;padding:1px;text-align:center"> 
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> 
						&times; 
					</button>
					<h4>ALERT</h4>
				</div>
				<div class="modal-body" >
					<img src="images/alert.png" class="alertpic">
					<div id="alertContent">
						&nbsp;
					</div>
				</div>
			</div>
		</div>
	</div>
