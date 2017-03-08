
<?php

// on appel le fichier dans la base de donnée une seul fois avec _once

include_once 'modele/connection_bdd.php';

//on veut que tous les champs soient remplis
	if(empty($_POST['nom']) AND
	   empty($_POST['prenom']) AND
	   empty($_POST['age']) AND
	   empty($_POST['langage']) 
	){
	echo "merci de remplir tous les champs";
}
//convertir les caractere en string ->securite ->filtre htmlspecialchars
else{
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$age = htmlspecialchars($_POST['age']);
	$langage = htmlspecialchars($_POST['langage']);
// le nom de ma requete soit $query
	//etape:on prepare la requete
	$query = $bdd->prepare('INSERT INTO eleve (nom,prenom,age,langage) VALUES(?,?,?,?)');
	// etape:executer la requete
	$query->execute(array(
		$nom,
		$prenom,
		$age,
		$langage
		));
	// etape : mettre fin a la requete
	$query->closeCursor();
}	

//redirection 

header('location:form.php');


//en parallele ...
//ecrir  nom dans mon form
//echo $_POST['nom'];

// enregistrement dans la base de donnée

















