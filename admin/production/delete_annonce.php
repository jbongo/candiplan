<?php

if (isset($_GET['del']) && is_numeric($_GET['del'])){

require "../model/annonceModel.php";
	

$annonceModel = new annonceModel ();
$annonceModel->deleteAnnonce($_GET['del']);



}

?>