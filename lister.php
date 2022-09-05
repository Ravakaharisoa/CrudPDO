<?php
	$objetPDO = new PDO('mysql:host=localhost;dbname=agenda','root','');
	
	$pdoStat = $objetPDO->prepare('SELECT * FROM contact ORDER BY nom ASC');
	$executeIsOk = $pdoStat->execute();
	
	$contacts = $pdoStat->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
	<title>liste</title>
	<meta charset="utf-8">
	<link rel="stylesheet"type="text/css" href="css/.css"/>
</head>
<body>
	<h1>Listes des contacts</h1>
	<ul>
		<?php foreach($contacts as $contact){ ?>
		<li>
			<?= $contact['nom'] ?>
			<?= $contact['prenom'] ?>
			<?= $contact['tel'] ?>
			<?= $contact['mail'] ?>
			<a href="supprimer.php?numContact=<?= $contact['id']?>">Supprimer</a>
			<a href="form_modification.php?numContact=<?= $contact['id']?>">Modifier</a>
		</li>
		<?php } ?>
	</ul>
</body>
</html>