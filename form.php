<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulaire</title>
    
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>		
		<form method="POST" action="result.php">
			<fieldset>
				<label for="nom">Your name:</label>
				<input type="text" name="nom" id="nom" autofocus/><br/>

				<label for="prenom">Your first name:</label>
				<input type="text" name="prenom" id="prenom"/><br/>

				<label for="age">Age:</label>
				<input type="number" name="age" id="age"><br/>
					
				<label for="langage">Langage:</label>
				<input type="langage" name="langage" id="langage"/><br/>
					<select name="langage">
						<option disabled selected>choisi ton langage</option> 
							<option value="php">Php</option>
							<option value="php">Ruby</option>
							<option value="php">Js</option>
					</select>  				
			</fieldset>
				<div id="envoyer"><input type="submit" value="envoyer"/></div>
</form>
</body>
</html>
		

					
				</form>