//function to hide the initial loading icon
$(window).load(function(){
	setTimeout(function() {
		$(".startload").css("display","none");	
	}, 2000);
	
})


//functions to show and hide the waiting logo
function showWaiting(){
	$(".loading").show('fast');
}	
function hideWaiting(){
	$(".loading").hide('fast');
}
// function to log user in using ajax
function checkLogin(){
	showWaiting();
	var username=$("#username").val();
	var password=$("#password").val();
	if(username==""){
		$("#alertContent").text("username cannot be empty!");
		$("#alertDiv").modal('show');
		hideWaiting();
	}
	else if(password==""){
		$("#alertContent").text("Password cannot be empty!");
		$("#alertDiv").modal('show');
		hideWaiting();
	}
	else{
		$.ajax({
			method:"POST",
			url:"includes/checkLogin.php",
			data:{username:username,password:password,login:true}	
		}).success(function(msg){
			//alert(msg);
			if(msg=="1"){
				window.location.reload(true);
			}
			else{
				$("#alertContent").text("Wrong Username and password combination!");
				$("#alertDiv").modal('show');
				hideWaiting();
			}
		})
	}
	hideWaiting();
}

//function to check data and then sign up user
function signUp(){
	showWaiting();
	var username 	= $("#rollnumber").val();
	var password1 	= $("#password1").val();
	var password2	= $("#password2").val();
	var fname		= $("#fname").val();
	var lname		= $("#lname").val();
	var email		= $("#email1").val();
	if(username==""){
		$("#alertContent").text("Roll Number cannot be blank!");
		$("#alertDiv").modal('show');
		hideWaiting();
	}
	else if(password1=="" || password2==""){
		$("#alertContent").text("Password field cannot be blank!");
		$("#alertDiv").modal('show');	
		hideWaiting();
	}
	else if(!(password1==password2)){
		$("#alertContent").text("Password do not match!");
		$("#alertDiv").modal('show');
		hideWaiting();
	}
	else if(fname==""){
		$("#alertContent").text("First Name cannot be blank!");
		$("#alertDiv").modal('show');
		hideWaiting();
	}
	else if(email==""){
		$("#alertContent").text("Email cannot be blank!");
		$("#alertDiv").modal('show');
		hideWaiting();
	}
	else{
		$.ajax({
			url:'includes/checkLogin.php',
			method:'POST',
			data:{username:username,password:password1,fname:fname,lname:lname,email:email,signUp:true},
		}).success(function(msg){
			if(msg=="01"){
				window.location.assign("index.php");
			}

			else if(msg=="0Duplicate entry '"+email+"' for key 'rollNumber'"){
				$("#alertContent").text("EMail ID already registerd! ");
				$("#alertDiv").modal('show');	
				hideWaiting();
			}
			else if(msg=="12" || msg=="0Duplicate entry '"+username.toUpperCase()+"' for key 'userName'"){
				$("#alertContent").text("User already registerd! ");
				$("#alertDiv").modal('show');
				hideWaiting();
			}
			else{
				window.location.reload(true);
			}
		})
	}
	hideWaiting();
}

// function to reset password
function passwordReset(){
	showWaiting();
	var email=$("#email2").val();
	//alert(email);
	if(email==""){
		$("#alertContent").text("Email field cannot be empty!");
		hideWaiting();
		$("#alertDiv").modal('show');
	}
	else{
		$.ajax({
			method:"POST",
			url:"includes/checklogin.php",
			data:{email:email,reset:true}
		}).success(function(msg){
			//alert(msg);
			if(msg=="24"){
				$("#alertContent").text("Reset Email successfully sent. Check your Email to reset password! ");
				hideWaiting();
				$("#alertDiv").modal('show');
			}
			else if(msg=="25"){
				$("#alertContent").text("Wrong Email Address");
				hideWaiting();
				$("#alertDiv").modal('show');
			}
		})
	}
	hideWaiting();
}