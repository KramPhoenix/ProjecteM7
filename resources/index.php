
<?php include('../app/login.php');?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
</head>
<body>
<div class="d-flex justify-content-center">
	<h1>IMMOBILIARY LOGIN</h1>
</div>
<div class="d-flex justify-content-center">
	<form method="POST" action="<?= $_SERVER[PHP_SELF];?>">
		<input type="text" name="user" placeholder="User">
		<input type="password" name="password" placeholder="Password">
		<input type="submit" name="submit" value="Entra">
	</form>
</div>
<a href="sign_up.php">No tienes cuenta? Regístrate</a>
</body>
</html>