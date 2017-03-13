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
							while ($donnee = $result->fetch()) {
								echo '<tr>
										<td>' . $donnee['nom'] . '</td>
										<td>' . $donnee['prenom'] . '</td>
										<td>' . $donnee['age']. '</td>
										<td>' . $donnee['langage']. '</td>
				<a href="delete_action.php">' . $donnee['Action'] . '</a>
							 <a href="Edit">' . $donnee['Action'] . '</a>  
									  </tr>';
							}

						?>
						
					</tbody>
				</table>

					
			

<?php include 'includes/footer.php'; ?>