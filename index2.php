<?php 
include 'includes/header.php'; 
//inclure notre connection a la base de donnée
include_once 'modele/connection_bdd.php';

//on ecrit la requete pour recup les info dans result 
$result = $bdd->query('SELECT * FROM eleve');

// pour visualiser le tableau
//$result=$result->fetchAll();

//var_dump($result);

?>

			<table>
				<caption>FORMULAIRE </caption>
					<thead>
						<tr>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Age</th>
							<th>Langage</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						<?php
						//fetch (=va chercher)traite la reponse ligne par ligne
							while ($donnee = $result->fetch()) { ?>
								<tr>
						<td><?php echo $donnee['id'];?></td>
						<td><?php echo $donnee['nom'];?></td>
						<td><?php echo $donnee['prenom'];?></td>
						<td><?php echo $donnee['age'];?></td>
						<td><?php echo $donnee['langage'];?></td>
		<td><a href="delete_action.php?id=<?php echo $donnee['id'];?>">Delete</a>
		<a href="edit_action.php?id=<?php echo $donnee['id']; ?>">edit</a></td>
								</tr>
								<?php } ?>
						
					</tbody>
				</table>

					
			

<?php include 'includes/footer.php';?>




