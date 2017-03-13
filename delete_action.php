<?php
//ligne qui permets d'etre connecté a la base de donnée 
include ('modele/connection_bdd.php');
// on recup des donnee dans URL ->les id 

//pour verifier que le id est un nombre
if (is_numeric($_GET['id'])){
	echo "id est un nombre";

//effacer une ligne par rapport à l'id FROM ->pour effacer toute la ligne (nom,prenom,age, birth, langage)
	$query = $bdd->prepare('DELETE FROM eleve WHERE id=?');
	//$_Get permet de definir le paramette id (ne pas oublier)
	$query->execute(array($_GET['id']));
	$query->closeCursor();
//permets de voir effacement en direct 
	header('location:index2.php');
}
else {
	echo "id n'est pas un nombre";
}


?>
