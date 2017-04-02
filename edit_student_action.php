<?php
//ligne qui permets d'etre connecté a la base de donnée 
include ('modele/connection_bdd.php');

//convertir les caractere en string ->securite ->filtre htmlspecialchars
	
	if(empty($_POST['nom']) OR
	   empty($_POST['prenom']) OR
	   empty($_POST['age']) OR
	   empty($_POST['langage']) 
	){
	echo "merci de remplir tous les champs";
}
else {

	if (is_numeric($_GET['id'])){
		include_once 'modele/connection_bdd.php';

	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$age = htmlspecialchars($_POST['age']);
	$langage = htmlspecialchars($_POST['langage']);


$query = $bdd->prepare('UPDATE eleve SET nom = :nom, prenom = :penom, age = :age, langage = :langage WHERE id = :id'); 
	//$_Get permet de definir le paramette id (ne pas oublier)
$query->execute(array(
	':nom' =>$nom,
	':prenom' =>$prenom,
	':age' =>$age,
	':langage' =>$langage
	));
$query->closeCursor();
//permets de voir effacement en direct 
	header('location:index2.php');

}

else {
	echo "id n'est pas un nombre";
	header('Refresh: 5;url=index2.php');	
}
}
?>