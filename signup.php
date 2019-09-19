<?php include 'includes/signup.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Dream-Dev</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<div class="header">
		<h2>Signup</h2>
	</div>

	<form method="post" action="signup.php">

	<?php include 'includes/errors.php';?>

  <div class="container">
    <label for="fullname"><b>Full Name:</b></label>
    <input type="text" placeholder="Enter your Full Name" name="fullname" required>

    <label for="email"><b>Email Address:</b></label>
    <input type="text" placeholder="Enter your email address" name="email" required>

    <label for="fullname"><b>Username:</b></label>
    <input type="text" placeholder="Enter your username" name="username" required>

    <label for="password_1"><b>Enter password:</b></label>
    <input type="password" placeholder="Enter your password" name="password_1" required>

    <label for="password_2"><b>Confirm password:</b></label>
    <input type="password" placeholder="Confirm your password" name="password_2" required>

	<button type="submit" class="btn" name="reg_user">Signup</button>

  </div>

  <div class="container" >
  Already a member? <a href="login.php">Sign in</a>
  </div>
</form>
</body>
</html>
