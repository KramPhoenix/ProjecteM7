<?php include('../app/login.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Bienvenido <?php echo $_SESSION['user']?></h1>
	<form method="POST" action="<?= $_SERVER[PHP_SELF];?>"> 
		<input type="submit" name="disconnect" value="DESCONECTAR">
	</form>
</body>
</html>
