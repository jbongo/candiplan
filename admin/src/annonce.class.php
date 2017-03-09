<?php


 
class Annonce {

	private $annonceModel;
	public $listeAnnonce;

	public function __construct(){

		

		require ('annonceModel.php');
		 $this->annonceModel = new annonceModel();
	}
	
	

	public function ajouterAnnonce()
	{
		if (isset($_POST['titre']) && isset($_POST['societe']) && isset($_POST['date']) && isset($_POST['urlannonce']) 
			)

			 {


			$this->annonceModel->setTitre($_POST['titre']); 
			$this->annonceModel->setLibelleEntreprise($_POST['societe']) ;
			$this->annonceModel->setLien($_POST['urlannonce']) ;
			$this->annonceModel->setDateLimite($_POST['date']) ;
			$this->annonceModel->setContactRecruteur($_POST['contactrecruteur']) ;
			$this->annonceModel->setAdresseUnRecruteur($_POST['adresse1']) ;
			$this->annonceModel->setAdresseDeuxRecruteur($_POST['adresse2']) ;
			$this->annonceModel->setCodePostalEntreprise($_POST['codepostale']) ;
			$this->annonceModel->setVilleEntreprise($_POST['ville']) ;
			$this->annonceModel->setNote($_POST['note']) ;

			$this->annonceModel->addAnnonce(1);

			echo "<div class= \"alert-success\">Nouvelle annonce sauvegardées</>";
		}

		else {

			echo "erreur d'envoie de données";
		}

	}


	public function afficherAnnonce(){

		$this->listeAnnonce = $this->annonceModel->listAnnonce(1);

		return $this->listeAnnonce;
	}

}


?>