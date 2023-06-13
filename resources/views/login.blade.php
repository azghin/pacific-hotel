<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

	<!-- JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
	
    <title>Login</title>
</head>

<style>

@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  width : 100%;
  height : auto;
}
.form-inline{
	padding: 0 15px;
	margin: 2px 0;
	width: 100%;
	display : inline;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #FFFFFF;
	background-color: #1c1069;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #5a41ff;
	background: -webkit-linear-gradient(to right, #5a41ff, #1c1069);
	background: linear-gradient(to right, #5a41ff, #1c1069);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}

</style>
<body>
	<video autoplay muted loop id="myVideo">
		<source src="../images/video.mp4" type="video/mp4">
	</video>
	
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="/createUser" method="post" >
			@csrf
			<h1>Create Account</h1>
			{{-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> --}}
			<span>or use your email for registration</span>
			<input type="text" name="name" placeholder="Name" value="{{ old('name') }}" />
			@error('name')
			 <span class="text-muted">{{ $message }}</span>
			@enderror
			<input type="tel" name="phone" id="phone"  placeholder="Phone Number"  value="{{ old('phone') }}"  />
			@error('phone')
			 <span class="text-muted">{{ $message }}</span>
			@enderror
			<input type="email" name="email" placeholder="Email"  value="{{ old('email') }}"  />
			@error('email')
			 <span class="text-muted">{{ $message }}</span>
			@enderror
			<input type="password" name="password" placeholder="Password" />
			@error('password')
			 <span class="text-muted">{{ $message }}</span>
			@enderror
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="/login" method="post" id="Sign">
			@csrf
			<h1>Sign in</h1>
			{{-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> --}}
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="email" value="{{ old('email') }}" >
			@error('email')
			 <span class="text-muted">{{ $message }}</span>
			@enderror
			<input type="password" placeholder="Password" name="password" id="password">
			@error('password')
			 <span class="text-muted">{{ $message }}</span>
			@enderror
			<input type="checkbox" name="check" id="check">show Password
			<a href="#" id="btnForget">Forgot your password?</a>
			<button>Sign In</button>
		</form>
		<form action="" method="" style="margin-top: 120px;" id="forget" >
			@csrf
			<h3 style="margin-bottom: 40px;"><b>Reset Password</b></h3>
			<input type="email" placeholder="Email" name="email" value="{{ old('email') }}" >
			@error('email')
			 <span class="text-muted">{{ $message }}</span>
			@enderror
			<button style="margin-top: 20px;">Forget Password</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		pacific hotel
	</p>
</footer>

<script>
    const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');
	const check = document.getElementById('check');
	const password = document.getElementById('password');

	const btnForget = document.getElementById('btnForget');
	const FormSign = document.getElementById('Sign');
	const FormForget = document.getElementById('forget');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});

	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");

		
		FormForget.style.display = "none";
		FormSign.style.display = "block";
	});

	btnForget.addEventListener('click', () => {
		FormSign.style.display = "none";
		FormForget.style.display = "block";
	});

	check.onclick = togglePassword;

	function togglePassword() {
		if (check.checked) {
			password.type = "text";
		} else {
			password.type = "password";
		}
	}
	
	
</script>
</body>
</html>