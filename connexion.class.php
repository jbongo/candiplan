<?php

class Connexion {


	public function seConnecter(){
		require "config/config.php";

		if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']) ){


			if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['email'])) // Vérification de l'adresse mail
		        {
		          	$email = htmlspecialchars($_POST['email']);
		          	$password = md5(htmlspecialchars($_POST['password']));

		          	$sql = " SELECT * from user where email_user = :email_user and password_user = :password_user";
		          	$stm = $dbh->prepare ($sql);

		          	$stm->execute(array(
		          		':email_user'=>$email,
		          		'password_user'=>$password
		          		));

		          	if($data = $stm->fetch() ){

		          		$_SESSION['id_user'] = $data['id_user'];
		          		$_SESSION['email'] = $data['email_user'];

		          		header('location:admin/production/index.php');

		          	}
		          	else
		          	{
		          		echo "<div class = \"alert alert-danger\"><strong>Email ou mot de passe incorect</strong></div>";
		          	}

		        }

		}
	}
}
?>