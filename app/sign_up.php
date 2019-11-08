<?php
include('config.php');
if(isset($_POST['submit'])){
	if(!empty($_POST['user'])&&!empty($_POST['password'])&&$_POST['rol']!=0){
		$user=$_POST['user'];
		$pass=$_POST['password'];
		if ($_POST['rol'] == 1) { $rol="comprador"; }
		else { $rol="vendedor"; }
		$stmt=$dbh->prepare("SELECT name FROM users WHERE name=:user");
		$stmt->bindParam(':user',$user);
		$result=$stmt->execute();

		if ($stmt -> rowCount() == 1){
			$state = true;
		}

		else {
			$stmt=$dbh->prepare("INSERT INTO users (name, password, rol) VALUES (:user, :pass, :rol)");
			$stmt->bindParam(':user',$user);
			$stmt->bindParam(':pass',$pass);
			$stmt->bindParam(':rol',$rol);
			$result=$stmt->execute();
			session_start();
			$_SESSION['user'] = $user;
			//ruta a donde redireccionar
			header('Location:../resources/loginview.php');
		}

	}
}
