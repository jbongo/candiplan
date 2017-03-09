<?php
	
	class CandidatureModel {
		private $id_candur;
		private $date_candur;
		private $lettreMotivation_candur;
		
		
		

		// Accesseur getter 
		public function getId(){
			return $this->id_candur;
		}

		public function getDate(){
			return $this->date_candur;
		}

		public function getLettreMotivation(){
			return $this->lettreMotivation_candur;
		}

		

		

		// Accesseur setter 	

		public function setId($value){
			$this->id_candur = $value;
		}

		public function setDate($value){
			$this->date_candur= $value;
		}

		public function setLettreMotivation($value){
			return $this->lettreMotivation_candur=$value;
		}

		


///  FONCTIONS CRUD
		


		//Ajouter une candidature

		public function addCandidature($idannonce){

			//require_once('../model/Database.php');			

			$sql = 'INSERT INTO candidature (id_candur, id_anno date_candur, lettreMotivation_candur) value (:id_candur, :id_anno, :date_candur, :lettreMotivation_candur)';

			$dbh->prepare($sql);

			$dbh->bindParam(':id_candur', this->getId()); 
			$dbh->bindParam(':id_anno', this->idannonce);
			$dbh->bindParam(':date_candur', this->getDate());
			$dbh->bindParam(':lettreMotivation_candur', this->getLettreMotivation());
	
			
			$dbh->execute();

			//$dbh = NULL;
			




		}

		//Modifier les informations d'une candidature

		public function updateCandidature($idcandidature,$idannonce){

			//require_once('../model/Database.php');	


			$sql = 'UPDATE candidature SET 
			id_anno = :id_anno,
			date_candur = :date_candur,			
			lettreMotivation_candur = :lettreMotivation_candur,					
			 	
			WHERE id_candur = :id_candur'; 

			$dbh->prepare($sql);

			
			$dbh->bindParam(':id_anno', this->idannonce);
			$dbh->bindParam(':date_candur', this->getDate());			
			$dbh->bindParam(':lettreMotivation_candur', this->getLettreMotivation());
			$dbh->bindParam(':id_candur', this->idcandidature);

			$dbh->execute();

			//$dbh = NULL ;
			

		}




		//Supprimer les informations d'une candidature
		public function deleteCandidature ($idcandidature){

			//require_once('../model/Database.php');	

			$sql = 'DELETE FROM candidature WHERE id_candur = :id_candur';
			$dbh->prepare($sql);
			
			$dbh->bindParam(':id_candur', this->idcandidature);

			$dbh->execute();

			//$dbh = NULL;
			
		}


		//Liste des candidatures
		public function listCandidature(){

			$sql = "SELECT * FROM candidature";

			$stm = $dbh->query($sql);  // renvois un objet PDOstatement d'ou le nom de la variable $stm

			$result = $stm->fetchAll(PDO::FETCH_ASSOC); 

			
			return $result;
		}

		//Recherche d'une candidature defini

		public function findCandidature($idcandidature){
			
			$sql = "SELECT * FROM candidature WHERE id_candur =:id_candur";

			$dbh->prepare($sql):

			$dbh->bindParam(':id_candur', $idcandidature);

			$dbh->execute();

			$resultat = $dbh->fetchAll(PDO::FETCH_ASSOC);
			
			return $resultat;
		}
		

	}
?>