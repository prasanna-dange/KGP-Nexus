<?php
	require_once('includes/header.php');
?>

<!-- SIGN UP DIV STARTS HERE -->
<div class="login-02">
	<div class="two-login  hvr-float-shadow specialForm">
		<div class="two-login-head specialForm">
				<img src="images/top-note.png" alt=""/>
				<h2>register</h2>
				<lable></lable>
		</div>
		<form class='specialForm'>
			<li>
				<input type="text" class="text" id="rollnumber" placeholder="Roll Number"  ><a href="#" tabindex="-1" class=" icon2 user2"></a>
			</li>
			<li>
				<input type="password" id="password1" placeholder="Password" ><a href="#" tabindex="-1" class=" icon2 lock2"></a>
			</li>
			<li>
				<input type="password" id="password2" placeholder="Confirm Password" ><a href="#" tabindex="-1" class=" icon2 lock2"></a>
			</li>
			<li>
				<input type="text" id="fname" placeholder="First Name" ><a href="#" tabindex="-1" class=" icon2 user2"></a>
			</li>
			<li>
				<input type="text" id="lname" placeholder="Last Name" ><a href="#" tabindex="-1" class=" icon2 user2"></a>
			</li>
			<li>
				<input type="text" id="email1" class="text" placeholder="E-mail"  ><a href="#" tabindex="-1" class=" icon2 mail"></a>
			</li>
			<div class="p-container">
				<label class="checkbox two"><input type="checkbox" name="checkbox" checked><i></i>I agree to the <a href="#">Terms of Servicee</a></label>
			</div>
			<div class="submit two">
					<input type="button" onClick="signUp()" value="SIGN UP" >
			</div>
				<h5>Already a member ?<a data-toggle='modal' data-target='#logInDiv' data-hover="LogIn" class="pointer"> Login Here</a></h5>
		</form>
	</div>
</div>

<?php
	require_once('includes/footer.php');
?>
	