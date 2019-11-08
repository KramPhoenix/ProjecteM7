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
</body>
</html>
