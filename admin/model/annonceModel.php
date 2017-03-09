<?php
	
	class AnnonceModel {
		private $id_anno;
		private $titre_anno;
		private $description_anno;
		private $profilRecherche_anno;
		private $conditionAvantage_anno;
		private $typeContrat_anno;
		private $dateLimite_anno;
		private $libelleEntreprise_anno;
		private $descriptionEntreprise_anno;
		private $lien_anno;
		

		// Accesseur getter 
		public function getId(){
			return $this->id_anno;
		}

		public function getTitre(){
			return $this->titre_anno;
		}

		public function getDescription(){
			return $this->description_anno;
		}

		public function getProfilRecherche(){
			return $this->profilRecherche_anno;
		}

		public function getConditionAvantage(){
			return $this->conditionAvantage_anno;
		}

		public function getTypeContrat(){
			return $this->typeContrat_anno;
		}

		public function getDateLimite(){
			return $this->dateLimite_anno;
		}

		public function getLibelleEntreprise(){
			return $this->libelleEntreprise_anno;
		}

		public function getDescriptionEntreprise(){
			return $this->DescriptionEntreprise;
		}

		public function getLien(){
			return $this->lien_anno;
		}

		

		// Accesseur setter 	

		public function setId($value){
			$this->id_anno = $value;
		}

		public function setTitre($value){
			$this->titre_anno= $value;
		}

		public function setDescription($value){
			return $this->description_anno=$value;;
		}

		public function setProfilRecherche($value){
			return $this->profilRecherche_anno=$value;;
		}

		public function setConditionAvantage($value){


			$this->conditionAvantage_anno= $value;
		}

		public function setTypeContrat($value){
			$this->typeContrat_anno= $value;
		}

		public function setDateLimite($value){
			$this->dateLimite_anno= $value;
		}

		
		public function setLibelleEntreprise($value){
			$this->libelleEntreprise_anno= $value;
		}

		public function setDescriptionEntreprise($value){
			$this->descriptionEntreprise_anno= $value;
		}

		public function setLien($value){
		
			$this->lien_anno = $value;		
		}


///  FONCTIONS CRUD
		


		//Ajouter une annonce

		public function addAnnonce($idcandidat){

			//require_once('../model/Database.php');			

			$sql = 'INSERT INTO annonce (id_anno, id_candat, titre_anno, description_anno, profilRecherche_anno, conditionAvantage_anno, typeContrat_anno, dateLimite_anno, libelleEntreprise_anno, descriptionEntreprise_anno, lien_anno) value (:id_anno, :id_candat, :titre_anno, :description_anno, :profilRecherche_anno, :conditionAvantage_anno, :typeContrat_anno, :dateLimite_anno, :libelleEntreprise_anno, :descriptionEntreprise_anno, :lien_anno)';

			$dbh->prepare($sql);

			$dbh->bindParam(':id_anno', $this->getId()); 
			$dbh->bindParam(':id_candat', $this->idcandidat);
			$dbh->bindParam(':titre_anno', $this->getTitre());
			$dbh->bindParam(':description_anno', $this->getDescription());
			$dbh->bindParam(':conditionAvantage_anno', $this->getConditionAvantage());
			$dbh->bindParam(':profilRecherche_anno', $this->getProfilRecherche());
			$dbh->bindParam(':typeContrat_anno', $this->getTypeContrat());
			$dbh->bindParam(':dateLimite_anno', $this->getDateLimite()); 
			$dbh->bindParam(':libelleEntreprise_anno', $this->getLibelleEntreprise());
			$dbh->bindParam(':descriptionEntreprise_anno', $this->getDescriptionEntreprise());
			$dbh->bindParam(':lien_anno', $this->getLien());
			

			$dbh->execute();

			//$dbh = NULL;
			




		}

		//Modifier les informations d'une annonce

		public function updateAnnonce($idannonce){

			//require_once('../model/Database.php');	


			$sql = 'UPDATE annonce SET 
			titre_anno = :titre_anno,
			description_anno = :description_anno,
			profilRecherche_anno = :profilRecherche_anno,
			conditionAvantage_anno = :conditionAvantage_anno,
			typeContrat_anno = :typeContrat_anno,
			dateLimite_anno = :dateLimite_anno,
			libelleEntreprise_anno = :libelleEntreprise_anno,
			descriptionEntreprise_anno = :descriptionEntreprise_anno,
			lien_anno = :lien_anno
			
			 	
			WHERE id_anno = :id_anno'; 

			$dbh->prepare($sql);

			
			$dbh->bindParam(':titre_anno', $this->getTitre());
			$dbh->bindParam(':description_anno', $this->getDescription());
			$dbh->bindParam(':conditionAvantage_anno', $this->getConditionAvantage());
			$dbh->bindParam(':profilRecherche_anno', $this->getProfilRecherche());
			$dbh->bindParam(':typeContrat_anno', $this->getTypeContrat());
			$dbh->bindParam(':dateLimite_anno', $this->getDateLimite());
			$dbh->bindParam(':libelleEntreprise_anno', $this->getLibelleEntreprise());
			$dbh->bindParam(':descriptionEntreprise_anno', $this->getDescriptionEntreprise());
			$dbh->bindParam(':lien_anno', $this->getLien());
			$dbh->bindParam(':profession_anno', $this->getProfession());
			$dbh->bindParam(':id_anno', $this->idannonce);

			$dbh->execute();

			//$dbh = NULL ;
			

		}




		//Supprimer les informations d'une annonce
		public function deleteAnnonce ($idannonce){

			require_once('../../config/config.php');

			
			$sql = 'DELETE FROM annonce WHERE id_anno = :id_anno';
			$stm = $dbh->prepare($sql);
			
			$stm->bindParam(':id_anno', $idannonce);


			$stm->execute();

			
				header("location:../production/annonces.php");
			
			$dbh = NULL;
			
		}


		//Liste des annonces
		public function listAnnonce(){

			$sql = "SELECT * FROM annonce";

			$stm = $dbh->query($sql);  // renvois un objet PDOstatement d'ou le nom de la variable $stm

			$result = $stm->fetchAll(PDO::FETCH_ASSOC); 

			
			return $result;
		}

		//Recherche d'une annonce defini

		public function findAnnonce($idannonce){
			
			$sql = "SELECT * FROM annonce WHERE id_anno =:id_anno";

			$dbh->prepare($sql);

			$dbh->bindParam(':id_anno', $idannonce);

			$dbh->execute();

			$resultat = $dbh->fetchAll(PDO::FETCH_ASSOC);
			
			return $resultat;
		}
		

	}
?>