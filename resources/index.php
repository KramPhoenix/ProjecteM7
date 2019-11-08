
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
	<h1>INMOBILIARY LOGIN</h1>
</div>
<div class="d-flex justify-content-center">
	<form method="POST" action="<?= $_SERVER[PHP_SELF];?>">
		<input type="text" name="user" placeholder="User" <?php if(isset($_COOKIE['savename'])){?> value="<?php echo $_COOKIE['savename'];?>" <?php } ?>> 
		<input type="password" name="password" placeholder="Password" <?php if(isset($_COOKIE['savepass'])){?> value="<?php echo $_COOKIE['savepass'];?>" <?php } ?>>
		<input type="submit" name="submit" value="Entra">
		<div class="d-flex align-items-center"><input type="checkbox" name="cookie" value="1"><p style="padding: 5px; font-size: 20px">Recuérdame</p></div>
	</form>
</div>
<div class="d-flex justify-content-center">
<a href="sign_up.php">No tienes cuenta? Regístrate</a>
</div>
</body>
</html>