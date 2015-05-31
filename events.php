<?php
	require_once('includes/header.php');
?>	

<!-- SLIDER DIV -->

	<div class="container" id="event-container">
		<!-- Codrops top bar -->
        <br/><br/>
		
		<section id="dg-container" class="dg-container">
			<div class="dg-wrapper">
				<a class="pointer"><img id="1" onclick="showEventInfo($(this))" src="images/1.jpg" alt="image01"><div>http://www.colazionedamichy.it/</div></a>
				<a href="#"><img src="images/2.jpg" onclick="checkLogin()" alt="image02"><div>http://www.percivalclo.com/</div></a>
				<a href="#"><img src="images/3.jpg" alt="image03"><div>http://www.wanda.net/fr</div></a>
				<a href="#"><img src="images/4.jpg" alt="image04"><div>http://lifeingreenville.com/</div></a>
				<a href="#"><img src="images/5.jpg" alt="image05"><div>http://circlemeetups.com/</div></a>
				<a href="#"><img src="images/6.jpg" alt="image06"><div>http://www.castirondesign.com/</div></a>
				<a href="#"><img src="images/7.jpg" alt="image07"><div>http://www.foundrycollective.com/</div></a>
				<a href="#"><img src="images/8.jpg" alt="image08"><div>http://www.mathiassterner.com/home</div></a>
				<a href="#"><img src="images/9.jpg" alt="image09"><div>http://learnlakenona.com/</div></a>
				<a href="#"><img src="images/10.jpg" alt="image10"><div>http://www.neighborhood-studio.com/</div></a>
				<a href="#"><img src="images/11.jpg" alt="image11"><div>http://www.beckindesign.com/</div></a>
				<a href="#"><img src="images/12.jpg" alt="image12"><div>http://kicksend.com/</div></a>
			</div>
			<nav>	
				<span class="dg-prev">&lt;</span>
				<span class="dg-next">&gt;</span>
			</nav>
		</section>
    </div>

    <div class="modal fade" id="eventInfoDiv" tabindex="-1" role="dialog" aria-labelledby="eventInfoDiv" aria-hidden="true">
		<div class="modal-dialog"> 
			<div class="modal-content "> 
				<div class="modal-header"> 
					<div class="one-login-head">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> 
							&times; 
						</button>
						<img src="images/top-lock.png" alt=""/>
						<h1>LOGIN</h1>
						
					</div>
				</div>
				<div class="modal-body">
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


<?php
	require_once('includes/footer.php');
?>