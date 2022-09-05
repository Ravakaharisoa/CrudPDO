<?php
	//ouverture de la connexion
	$objetPDO = new PDO('mysql:host=localhost;dbname=agenda','root','');
	//preparation de la requete
	$pdoStat = $objetPDO->prepare('DELETE FROM contact WHERE id= :num LIMIT 1');
	
	//liaison du parametre nommee
	$pdoStat->bindvalue(':num', $_GET['numContact'], PDO::PARAM_INT);
	//execution de la requete
	$executeIsOk = $pdoStat->execute();
	if($executeIsOk){
		$message='Le contact a ete supprime';
	}
	else{
		$message='Echec de la suppression du contact';
	}
	
	?>
	
	<!--AFFICHER MESSAGE-->