<?php
	
	class CandidatModel {
		private $id_candat;
		private $nom_candat;
		private $prenom_candat;
		private $sexe_candat;
		private $dateNaissance_candat;
		private $email_candat;
		private $adresse_candat;
		private $codePostal_candat;
		private $ville_candat;
		private $pays_candat;
		private $profession_candat;

		// Accesseur getter 
		public function getId(){
			return $this->id_candat;
		}

		public function getNom(){
			return $this->nom_candat;;
		}

		public function getPrenom(){
			return $this->prenom_candat;;
		}

		public function getSexe(){
			return $this->sexe_candat;;
		}

		public function getDateNaissance(){
			return $this->DateNaissance_candat;;
		}

		public function getEmail(){
			return $this->email_candat;;
		}

		public function getAdresse(){
			return $this->adresse_candat;;
		}

		public function getCodePostal(){
			return $this->nom_candat;;
		}

		public function getVille(){
			return $this->ville_candat;;
		}

		public function getPays(){
			return $this->pays_candat;;
		}

		public function getProfession(){
			return $this->profession_candat;;
		}


		// Accesseur setter 	


		public function setNom($value){
			$this->nom_candat= $value;
		}

		public function setPrenom($value){
			return $this->prenom_candat=$value;;
		}

		public function setSexe($value){
			return $this->sexe_candat=$value;;
		}

		public function setDateNaissance($value){


			$this->dateNaissance_candat= $value;
		}

		public function setAdresse($value){
			$this->adresse_candat= $value;
		}

		public function setVille($value){
			$this->ville_candat= $value;
		}

		public function setcodePostal$value){
			if(is_numeric($value))
				$this->codePostal_candat= $value;
			else{
				$this->codePostal_candat= O;
			}
			
		}

		public function setPays($value){
			$this->nom_candat= $value;
		}

		public function setProfession($value){
			$this->nom_candat= $value;
		}

		public function setDate($value){
			
		if (preg_match('#^([0-9]{2})([/-])([0-9]{2})\2([0-9]{4})$#', $value, $m) == 1 && checkdate($m[3], $m[1], $m[4]))
		{
            this->dateNaissance_candat = $value;
        }
		else
		{
 		 	this->dateNaissance_candat = NULL ;
		}

		}


///  FONCTIONS CRUD
		


		//Ajouter un candidat

		public function addCandidat(){

			//require_once('../model/Database.php');			

			$sql = 'INSERT INTO candidat (id_candat, nom_candat, prenom_candat, sexe_candat, dateNaissance_candat, email_candat, adresse_candat, codePostal_candat, ville_candat, pays_candat, profession_candat) value (:id_candat, :nom_candat, :prenom_candat, :sexe_candat, :dateNaissance_candat, :email_candat, :adresse_candat, :codePostal_candat, :ville_candat, :pays_candat, :profession_candat)';

			$dbh->prepare($sql);

			$dbh->bindParam(':id_candat', this->getId());
			$dbh->bindParam(':nom_candat', this->getNom());
			$dbh->bindParam(':prenom_candat', this->getPrenom());
			$dbh->bindParam(':dateNaissance_candat', this->getDateNaissance());
			$dbh->bindParam(':sexe_candat', this->getSexe());
			$dbh->bindParam(':email_candat', this->getEmail());
			$dbh->bindParam(':adresse_candat', this->getAdresse());
			$dbh->bindParam(':codePostal_candat', this->getCodePostal());
			$dbh->bindParam(':ville_candat', this->getVille());
			$dbh->bindParam(':pays_candat', this->getPays());
			$dbh->bindParam(':profession_candat', this->getProfession());

			$dbh->execute();

			//$dbh = NULL;
			




		}

		//Modifier les informations d'un candidat

		public function updateCandidat($idcandidat){

			//require_once('../model/Database.php');	


			$sql = 'UPDATE candidat SET 
			nom_candat = :nom_candat,
			prenom_candat = :prenom_candat,
			sexe_candat = :sexe_candat,
			dateNaissance_candat = :dateNaissance_candat,
			email_candat = :email_candat,
			adresse_candat = :adresse_candat,
			codePostal_candat = :codePostal_candat,
			ville_candat = :ville_candat,
			pays_candat = :pays_candat,
			profession_candat = :profession_candat,
			 	
			WHERE id_candat = :id_candat'; 

			$dbh->prepare($sql);

			
			$dbh->bindParam(':nom_candat', this->getNom());
			$dbh->bindParam(':prenom_candat', this->getPrenom());
			$dbh->bindParam(':dateNaissance_candat', this->getDateNaissance());
			$dbh->bindParam(':sexe_candat', this->getSexe());
			$dbh->bindParam(':email_candat', this->getEmail());
			$dbh->bindParam(':adresse_candat', this->getAdresse());
			$dbh->bindParam(':codePostal_candat', this->getCodePostal());
			$dbh->bindParam(':ville_candat', this->getVille());
			$dbh->bindParam(':pays_candat', this->getPays());
			$dbh->bindParam(':profession_candat', this->getProfession());
			$dbh->bindParam(':id_candat', this->idcandidat);

			$dbh->execute();

			//$dbh = NULL ;
			

		}




		//Supprimer les informations d'un candidat
		public function deleteCandidat ($idcandidat){

			//require_once('../model/Database.php');	

			$sql = 'DELETE FROM candidat WHERE id_candat = :id_candat';
			$dbh->prepare($sql);
			
			$dbh->bindParam(':id_candat', this->idcandidat);

			$dbh->execute();

			//$dbh = NULL;
			
		}


		//Liste des candidats
		public function listCandidat(){

			$sql = "SELECT * FROM candidat";

			$stm = $dbh->query($sql);  // renvois un objet PDOstatement d'ou le nom de la variable $stm

			$result = $stm->fetchAll(PDO::FETCH_ASSOC); 

			
			return $result;
		}

		//Recherche d'un candidat defini

		public function findCandidat($idcandidat){
			
			$sql = "SELECT * FROM candidat WHERE id_candat =:id_candat";

			$dbh->prepare($sql):

			$dbh->bindParam(':id_candat', $idcandidat);

			$dbh->execute();

			$resultat = $dbh->fetchAll(PDO::FETCH_ASSOC);
			
			return $resultat;
		}
		

	}
?>