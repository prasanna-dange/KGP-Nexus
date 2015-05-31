<?php
	require_once('includes/header.php');
?>

<!-- FORGET PASSWORD DIV -->
<div class="login-03">
	<div class="three-login  hvr-float-shadow specialForm">
		<div class="three-login-head specialForm">
				<img src="images/top-key.png" alt=""/>
				<h3>account reset</h3>
				<lable></lable>
		</div>
		<form class="specialForm">
			<h5>Forgot Password or Username?</h5>
			<p>To reset your account password or username, enter the
				email address and we will send your instruction.</p>
			<li>
				<input type="text" class="text" placeholder="E-mail" id="email2" ><a href="#" class=" icon3 mail2"></a>
			</li>
			<div class="submit three">
				<input type="button" onclick="passwordReset()" value="SIGN UP" >
			</div>
		</form>
	</div>
</div>

<?php
	require_once('includes/footer.php');	
?>