<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Dream-Dev</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">
		
	<?php include('errors.php'); ?>

  <div class="imgcontainer">
    <img src="img/login_avatar.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
	<button type="submit" class="btn" name="login_user">Login</button>
	
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" >
    <span class="psw"><a href="#">Forgot password?</a></span>
  </div>
</form>


</body>
</html>
