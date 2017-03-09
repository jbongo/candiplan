<?php


class Inscription {


	public function sinscrire (){

		require("config/config.php");

		if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmPassword'])  &&
		!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmPassword'])  ) 
		{

			
			if($_POST['password'] == $_POST['confirmPassword'] )// on compare les mots de passes saisis 
			{  
				if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['email'])) // Vérification de l'adresse mail
		        {
		          	$email = htmlspecialchars($_POST['email']);
		          	$password = htmlspecialchars($_POST['password']);
					$confirmPassword = htmlspecialchars($_POST['confirmPassword']);


					$sql1 = "SELECT * from user where email_user = :email_user ";
					$stm = $dbh->prepare($sql1);
					$stm->execute(array(':email_user'=>$email));

					if ($stm->fetchColumn() == 0) // verifie que l'utilisateur n'existe pas
					{
						$activationKey_user = md5(microtime(TRUE)*100000);
						$password = md5($password);

						$sql2 = "INSERT into user (id_user, email_user, password_user, status_user, activationKey_user) values (:id_user, :email_user, :password_user, :status_user, :activationKey_user)" ;

						$stm = $dbh->prepare($sql2);
						
						$stm->execute(array(
							':id_user'=>'',
							':email_user'=>$email,
							':password_user'=>$password,
							':status_user'=>0,
							':activationKey_user'=>$activationKey_user));

						$_SESSION['email'] = $email; // on sauvergade l'email afin de pouvoir envoyer un mail de confirmation

						echo "<div class = \"alert alert-success\"><strong>Félicitation </strong></div>";
						


					}
					else
					{
						echo "<div class = \"alert alert-danger\"><strong>Cette adresse email existe déjà </strong></div>";
					}

		        }
		      	else
		        {
		         echo "<div class = \"alert alert-danger\"><strong>email invalide </strong></div>";
		        }

			



				
				
			}
			else{

				echo "<div class = \"alert alert-danger\"><strong>Les mots de passe saisis sont différents </strong></div>";
			}

		}	              
		

	}
}

?>