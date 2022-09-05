<?php
	$objetPDO = new PDO('mysql:host=localhost;dbname=agenda','root','');

	$pdoStat = $objetPDO ->prepare('INSERT INTO contact VALUES(NULL,:nom,:prenom, :tel,:mail)');
	
	$pdoStat ->bindvalue(':nom',$_POST['nom'],PDO::PARAM_STR);
	$pdoStat ->bindvalue(':prenom',$_POST['prenom'],PDO::PARAM_STR);
	$pdoStat ->bindvalue(':tel',$_POST['phone'],PDO::PARAM_STR);
	$pdoStat ->bindvalue(':mail',$_POST['mail'],PDO::PARAM_STR);
	
	$insertIsOk = $pdoStat->execute();
	
	if($insertIsOk){
		$message='Le contact a été ajoute dans la bdd';
	}
	else{
		$message ='Echec de l\'insertion';
	}
?>
<!--AFFICHER MESSAGE-->