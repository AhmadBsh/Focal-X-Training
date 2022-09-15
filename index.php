<!DOCTYPE html>
<html lang="en">

<head>
	<title>Restaurantly</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/php-style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>

<body>
	<?php if (isset($_GET['rs'])) { ?>
		<h2 class="rs" style="color:rgb(72, 237, 43) ;"><?php echo $_GET['rs']; ?></h2>
	<?php } ?>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="register.php" method="post">
				<h1>Create Account</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your email for registration</span>
				<input type="text" name="name" placeholder="Name" />
				<input type="email" name="email" placeholder="Email" />
				<input type="password" name="password" placeholder="Password" />
				<input type="text" name="image" placeholder="Image (link)" />
				<?php if (isset($_GET['rerror'])) { ?>
					<p class="error"><?php echo $_GET['rerror']; ?></p>
				<?php } ?>
				<button type="submit">Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="login.php" method="post">
				<h1>Sign in</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your account</span>
				<input type="email" name="email" placeholder="Email" />
				<input type="password" name="password" placeholder="Password" />
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>
				<a href="#">Forgot your password?</a>
				<button type="submit">Sign In</button>
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

</body>
<script>
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});

	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>

</html>