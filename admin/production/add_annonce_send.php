 <?php 
  		//require('../src/annonceModel.php');
        require('../src/annonce.class.php');

           $annonce = new Annonce();
           $annonce->ajouterAnnonce();

 // if (isset($_POST['titre']) && isset($_POST['societe']) && isset($_POST['date']) && isset($_POST['urlannonce']) 
	// 		)

	// 		 {
	// 		 	require('../src/config.php');


	// 		$titre= $_POST['titre']; 
	// 		$societe=$_POST['societe'];
	// 		$urlannonce = $_POST['urlannonce'];
	// 		$date = $_POST['date'] ;
	// 		$contactrecruteur = $_POST['contactrecruteur'] ;
	// 		$adresse1 = $_POST['adresse1'];
	// 		$adresse2 = $_POST['adresse2'];
	// 		$codepostale = $_POST['codepostale'];
	// 		$ville = $_POST['ville'];
	// 		$note = $_POST['note'];
	// 		$id='';

	// 		$idcandidat =1; //  valeur a remplacer plustard


				
			
			

	// 		$sql = 'INSERT INTO annonce (id_anno, id_candat, titre_anno, libelleEntreprise_anno ,dateLimite_anno, lien_anno, contactRecruteur_anno, adresseUnRecruteur_anno, adresseDeuxRecruteur_anno,codePostalEntreprise_anno , villeEntreprise_anno,  note_anno)

	// 			value (:id_anno, :id_candat, :titre_anno, :libelleEntreprise_anno ,:dateLimite_anno, :lien_anno, :contactRecruteur_anno, :adresseUnRecruteur_anno, :adresseDeuxRecruteur_anno, :codePostalEntreprise_anno , :villeEntreprise_anno, :note_anno)';

	// 		$stm = $dbh->prepare($sql);

		

	// 		$stm->bindParam(':id_anno',$id); 
	// 		$stm->bindParam(':id_candat', $idcandidat);
	// 		$stm->bindParam(':titre_anno', $titre);
	// 		$stm->bindParam(':villeEntreprise_anno', $ville);
	// 		$stm->bindParam(':adresseUnRecruteur_anno',$adresse1);
	// 		$stm->bindParam(':contactRecruteur_anno', $contactrecruteur);
	// 		$stm->bindParam(':adresseDeuxRecruteur_anno', $adresse2);
	// 		$stm->bindParam(':dateLimite_anno', $date); 
	// 		$stm->bindParam(':libelleEntreprise_anno', $societe);
	// 		$stm->bindParam(':codePostalEntreprise_anno', $codepostale);
	// 		$stm->bindParam(':lien_anno', $urlannonce);
	// 		$stm->bindParam(':note_anno', $note);

			


			
	// 		//$this->annonceModel->addAnnonce(1);

	// 		echo "<div class= \"alert-success\">Nouvelle annonce sauvegardées</>";
	// 	}

	// 	else {

	// 		echo "erreur d'envoie de données";
	// 	}

      
      
       
?>