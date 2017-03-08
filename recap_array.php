<?php 
var_dump($_POST);


------------------

if (empty($_POST['nom'])&& empty($_POST['prenom'])){
echo $_POST['nom'].$_POST['prenom'].$_POST['age'];
}

else{
	echo htmlspecialchars($_POST['nom']) . htmlspecialchars($_POST['prenom'] . htmlspecialchars($_POST['age']);
}
----------------
$tab_assoc = [
	'nom'=> 'boubou',
	'prenom'=> 'caroline',
	'age'=> '40'
	];

foreach ($tab_assoc as $key => $value){
	echo $key .':' $value . '<br>';
}

?>

---------------
if (empty($_POST['prenom']) && empty($_POST['age'])){
		echo "remplir les info";
}
		else{
			$result = [];
			foreach($_POST as $key => $value){
				$result[$key] = htmlspecialchars($value);
			}

		}
var_dump($result);

