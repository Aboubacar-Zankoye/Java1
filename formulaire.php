<!Doctype html>
<html>
    <head>
        <meta charset = "utf-8"/>
        <title> ma page</title>
    </head>
	<body>
	<a href="d.html"> 
     lien vers la page d
	</a>
    <br>
	<br>
	<br>
	<form method="POST" action="transmission2.php">
		<label>Nom</label>
		<input type="text" id="nom" name="nom" >
		 <br> 
		 <br>  
		<label>Prenom</label> 
		<input type="text" id="prenom" name="prenom" > 
		<br><br>
		<label>Adress</label>
		<input type="text" id="adresse" name="adresse">
		<br> <br>
		<label>Pays</label> 
		<select name="pays">
		<option value="Niger">Niger</option>
		<option value="Ghana">Ghana</option>
		<option value="Nigeria">Nigeria</option>
		<option value="Togo" selected="selected">Togo</option>
		</select>
		<br><br>
		<label>Bonjour directeur,? ça va</label>
		<label for="oui">oui</label>
		<input type="radio" name="radio" value="oui"id="oui">
		<label for="non">non</label>
		<input type="radio" name="radio" value="non"id="non">
		<input type="submit" name="envoyer" value="envoyer"> 
	</form>
	<body>
	</html>