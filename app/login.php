<?php
include('config.php');

// Autenticación de usuario

if(isset($_POST['submit'])){
	if(!empty($_POST['user'])&&!empty($_POST['password'])){
		$user=$_POST['user'];
		$pass=$_POST['password'];
	}
}

// Hacer una consulta

$stmt=$dbh->prepare("SELECT name,password FROM users WHERE name=:user AND password=:pass");
$stmt->bindParam(':user',$user);
$stmt->bindParam(':pass',$pass);
$result=$stmt->execute();

if ($stmt -> rowCount() == 1){
	session_start();
	$_SESSION['user'] = $user;
	header('Location:../resources/loginview.php');
}
// Establecer variables de sesión y redirigir

?>