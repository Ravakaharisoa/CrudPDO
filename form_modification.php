<?php
	//ouverture de la connexion
	$objetPDO = new PDO('mysql:host=localhost;dbname=agenda','root','');
	//preparation de la requete
	$pdoStat = $objetPDO->prepare('SELECT * FROM contact WHERE id= :num');
	
	$pdoStat->bindvalue(':num', $_GET['numContact'], PDO::PARAM_INT);
	
	$executeIsOk = $pdoStat->execute();
	
	$contact = $pdoStat->fetch();
	?>
	
	<!DOCTYPE html>
<html>
<head>
	<title>form modification</title>
	<meta charset="utf-8">
	<link rel="stylesheet"type="text/css" href="css/.css"/>
</head>
<body>
	<form action="modifier.php" method="POST">
		<table>
			<tr>
				<td></td>
				<td><input type="hidden" name="numContact" value="<?= $contact['id']?>"></td>
			</tr>
			<tr>
				<td>Nom</td>
				<td><input type="text" name="nom"id="nom" value="<?= $contact['nom'];?>"></td>
			</tr>
			<tr>
				<td>Prenom</td>
				<td><input type="text" name="prenom"id="prenom" value="<?= $contact['prenom'];?>"></td>
			</tr>
			<tr>
				<td>Telephone</td>
				<td><input type="text" name="phone" id="tel" value="<?= $contact['tel'];?>"></td>
			</tr>
			<tr>
				<td>Adresse electronique</td>
				<td><input type="email" name="mail" id="mel" value="<?= $contact['mail'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Modifier"></td>
			</tr>
		</table>
	</form>
</body>
</html>