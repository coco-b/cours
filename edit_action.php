<?php include 'includes/header.php'; ?>
requet pour recuperer les elements de mon article en fonction de mon id		
		<form method="POST" action="edit_student_action.php?id=<?php echo $_GET['id'];?>">
							
			<fieldset>
				<h1>MODIFICATION</h1>
				<label for="nom">Your name:</label>
				<input type="text" name="nom" id="nom" autofocus/><br/>

				<label for="prenom">Your first name:</label>
				<input type="text" name="prenom" id="prenom"/><br/>

				<label for="age">Age:</label>
				<input type="number" name="age" id="age"><br/>
					
				<label for="langage">Langage:</label>
					<select name="langage">
						<option disabled selected>choisi ton langage</option> 
							<option value="php">Php</option>
							<option value="Ruby">Ruby</option>
							<option value="Js">Js</option>
					</select>  				
			</fieldset>
				<div id="envoyer"><input type="submit" value="envoyer"/></div>
</form>

<?php include 'includes/footer.php'; ?>