<?php
	
	class AnnonceModel {
		private $id_anno;
		private $titre_anno;
		private $libelleEntreprise_anno;
		private $dateLimite_anno;
		private $lien_anno;
		private $contactRecruteur_anno;
		private $adresseUnRecruteur_anno;
		private $adresseDeuxRecruteur_anno;
		private $villeEntreprise_anno;		
		private $codePostalEntreprise_anno;

		private $note_anno;

		private $dbh;
		
		
		public function __construct(){

			

		}

		// Accesseur getter 
		public function getId(){
			return $this->id_anno;
		}

		public function getTitre(){
			return $this->titre_anno;
		}

		public function getVilleEntreprise(){
			return $this->villeEntreprise_anno;
		}

		public function getContactRecruteur(){
			return $this->contactRecruteur_anno;
		}

		public function getAdresseUnRecruteur(){
			return $this->adresseUnRecruteur_anno;
		}

		public function getAdresseDeuxRecruteur(){
			return $this->adresseDeuxRecruteur_anno;
		}

		public function getDateLimite(){
			return $this->dateLimite_anno;
		}

		public function getLibelleEntreprise(){
			return $this->libelleEntreprise_anno;
		}

		public function getCodePostalEntreprise(){
			return $this->codePostalEntreprise_anno;
		}

		public function getLien(){
			return $this->lien_anno;
		}

		public function getNote(){
			return $this->note_anno;
		}

		

		// Accesseur setter 	

		public function setId($value){
			$this->id_anno = $value;
		}

		public function setTitre($value){
			$this->titre_anno= $value;
		}

		public function setVilleEntreprise($value){
			return $this->villeEntreprise_anno=$value;;
		}

		public function setContactRecruteur($value){
			return $this->contactRecruteur_anno=$value;;
		}

		public function setAdresseUnRecruteur($value){


			$this->adresseUnRecruteur_anno= $value;
		}

		public function setAdresseDeuxRecruteur($value){
			$this->adresseDeuxRecruteur_anno= $value;
		}

		public function setDateLimite($value){
			$this->dateLimite_anno= $value;
		}

		
		public function setLibelleEntreprise($value){
			$this->libelleEntreprise_anno= $value;
		}

		public function setCodePostalEntreprise($value){
			$this->codePostalEntreprise_anno= $value;
		}

		public function setLien($value){
		
			$this->lien_anno = $value;		
		}

		public function setNote($value){
		
			$this->note_anno = $value;		
		}


///  FONCTIONS CRUD
		


		//Ajouter une annonce

		public function addAnnonce($idcandidat){

			require('../src/config.php');	
			//this->$idcandidat = $idcandidat	;
			

			$sql = 'INSERT INTO annonce (id_anno, id_candat, titre_anno, libelleEntreprise_anno ,dateLimite_anno, lien_anno, contactRecruteur_anno, adresseUnRecruteur_anno, adresseDeuxRecruteur_anno,codePostalEntreprise_anno , villeEntreprise_anno,  note_anno)

				value (:id_anno, :id_candat, :titre_anno, :libelleEntreprise_anno ,:dateLimite_anno, :lien_anno, :contactRecruteur_anno, :adresseUnRecruteur_anno, :adresseDeuxRecruteur_anno, :codePostalEntreprise_anno , :villeEntreprise_anno, :note_anno)';

			$stm = $dbh->prepare($sql);

		

			// $stm->bindParam('id_anno', this->getId()); 
			// $stm->bindParam('id_candat', this->idcandidat);
			// $stm->bindParam('titre_anno', this->getTitre());
			// $stm->bindParam('villeEntreprise_anno', this->getVilleEntreprise());
			// $stm->bindParam('adresseUnRecruteur_anno', this->getAdresseUnRecruteur());
			// $stm->bindParam(':contactRecruteur_anno', this->getContactRecruteur());
			// $stm->bindParam(':adresseDeuxRecruteur_anno', this->getAdresseDeuxRecruteur());
			// $stm->bindParam(':dateLimite_anno', this->getDateLimite()); 
			// $stm->bindParam(':libelleEntreprise_anno', this->getLibelleEntreprise());
			// $stm->bindParam(':codePostalEntreprise_anno', this->getCodePostalEntreprise());
			// $stm->bindParam(':lien_anno', this->getLien());
			// $stm->bindParam(':note_anno', this->getNote());
			

			$stm->execute( array(
				':id_anno'=>$this->getId(),
				':id_candat'=>$idcandidat,
				':titre_anno'=>$this->getTitre(),
				':libelleEntreprise_anno'=>$this->getLibelleEntreprise(),
				':dateLimite_anno'=>$this->getDateLimite(),
				':lien_anno'=>$this->getLien(),
				':contactRecruteur_anno'=>$this->getContactRecruteur(),
				':adresseUnRecruteur_anno'=>$this->getAdresseUnRecruteur(),
				':adresseDeuxRecruteur_anno'=>$this->getAdresseDeuxRecruteur(),
				':codePostalEntreprise_anno'=>$this->getCodePostalEntreprise(),
				':villeEntreprise_anno'=>$this->getVilleEntreprise(),
				':note_anno'=>$this->getNote() ,
				));

			//$dbh = NULL;
			




		}

		//Modifier les informations d'une annonce  ++++++++++++++++++++++++++++++

		public function updateAnnonce($idannonce){

			//require_once('../model/Database.php');	


			$sql = 'UPDATE annonce SET 
			titre_anno = :titre_anno,
			villeEntreprise_anno = :villeEntreprise_anno,
			contactRecruteur_anno = :contactRecruteur_anno,
			adresseUnRecruteur_anno = :adresseUnRecruteur_anno,
			adresseDeuxRecruteur_anno = :adresseDeuxRecruteur_anno,
			dateLimite_anno = :dateLimite_anno,
			libelleEntreprise_anno = :libelleEntreprise_anno,
			codePostalEntreprise_anno = :codePostalEntreprise_anno,
			lien_anno = :lien_anno
			
			 	
			WHERE id_anno = :id_anno'; 

			$dbh->prepare($sql);

			
			// $dbh->bindParam(':titre_anno', this->getTitre());
			// $dbh->bindParam(':villeEntreprise_anno', this->getVilleEntreprise());
			// $dbh->bindParam(':adresseUnRecruteur_anno', this->getAdresseUnRecruteur());
			// $dbh->bindParam(':contactRecruteur_anno', this->getContactRecruteur());
			// $dbh->bindParam(':adresseDeuxRecruteur_anno', this->getAdresseDeuxRecruteur());
			// $dbh->bindParam(':dateLimite_anno', this->getDateLimite());
			// $dbh->bindParam(':libelleEntreprise_anno', this->getLibelleEntreprise());
			// $dbh->bindParam(':codePostalEntreprise_anno', this->getCodePostalEntreprise());
			// $dbh->bindParam(':lien_anno', this->getLien());
			// $dbh->bindParam(':profession_anno', this->getProfession());
			// $dbh->bindParam(':id_anno', this->idannonce);

			// $dbh->execute();

			//$dbh = NULL ;
			

		}




		//Supprimer les informations d'une annonce
		public function deleteAnnonce ($idannonce){

			//require_once('../model/Database.php');	

			$sql = 'DELETE FROM annonce WHERE id_anno = :id_anno';
			$dbh->prepare($sql);
			
			// $dbh->bindParam(':id_anno', this->idannonce);

			$dbh->execute();

			//$dbh = NULL;
			
		}


		//Liste des annonces
		public function listAnnonce($idcandidat){

			require_once('config.php');	

			$sql = "SELECT * FROM annonce where id_candat = :id_candat";

			$stm = $dbh->prepare($sql);// renvois un objet PDOstatement d'ou le nom de la variable $stm

			$stm->execute(array(':id_candat'=>$idcandidat)); 

			$result = $stm->fetchAll(PDO::FETCH_ASSOC); 

			
			return $result;
		}

		//Recherche d'une annonce defini

		public function findAnnonce($idannonce){
			
			$sql = "SELECT * FROM annonce WHERE id_anno =:id_anno";

			$dbh->prepare($sql);

			// $dbh->bindParam(':id_anno', $idannonce);

			$dbh->execute();

			$resultat = $dbh->fetchAll(PDO::FETCH_ASSOC);
			
			return $resultat;
		}
		

	}
?>