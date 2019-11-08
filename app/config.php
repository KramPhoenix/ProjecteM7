<?php

if(isset($_POST['submit'])){
	if(!empty($_POST['user'])&&!empty($_POST['password'])){
		$user=$_POST['user'];
		$pwd=$_POST['password'];
	}
}

 //Configuracion de la Base de Datos

 $dbuser=['usr'=>'marc',
          'pass'=>'marc123']; //Guardaremos nuestros datos de usuario de la Base de Datos en un array asociativo

        try { $dbh = new PDO('mysql:host=localhost;dbname=users', $config['usr'], $config['pass']); }
        catch(PDOException $e) {
            echo $e->getMessage();

$stmt=$dbh->prepare("SELECT user,pwd FROM users WHERE user=:user AND pwd=:pwd");
//$stmt->bindParam(':user',$user);
//$stmt->bindParam(':pwd', $pwd);
$result=$stmt->execute([$user,$pwd]);
$arr=$stmt->fetchAll();
echo $arr[0]['user'];

?>