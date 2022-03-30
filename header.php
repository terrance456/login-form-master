


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Login Form</title>
</head>
<body>
	
	<header>
	<div class="header-login">
		<form action="includes/login.inc.php" method="post">
			<input type="text" name="mailuid" placholder="E-mail/username">
			<input type="password" name="pwd" placeholder="password">
			<button type ="submit" name="login-submit">login</button>
		</form>
		<a  href="sign-up.php" class="header-signup">signup</a>
		<form action="includes/logout.inc.php" method="post">
			<button type="submit" name="logout-submit">logout</button>
		</form>
	</div>
</header>



