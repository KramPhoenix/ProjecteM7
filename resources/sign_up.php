
<?php include('../app/sign_up.php');?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
</head>
<body>
<div class="d-flex justify-content-center">
	<h1>IMMOBILIARY SIGN UP</h1>
</div>
<div class="d-flex justify-content-center">
	<form method="POST" action="<?= $_SERVER[PHP_SELF];?>">
		<input type="text" name="user" placeholder="User">
		<input type="password" name="password" placeholder="Password">
		<select name="rol">
            <option selected value="0"> -- Selecciona un rol -- </option>
            <option value="1">Comprador</option> 
           	<option value="2">Vendedor</option> 
        </select><br>
		<input type="submit" name="submit" value="REGISTRA">
	</form>
	</div>
	<div class="d-block mt-3"><?php if($state==true){?><h3>El nombre de usuario ya existe. Prueba con otro nombre.</h3><?php }?></div>

</body>
</html>