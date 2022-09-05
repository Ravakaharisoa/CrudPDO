<?php
//ouverture de la connexion
	$objetPDO = new PDO('mysql:host=localhost;dbname=agenda','root','');
	//preparation de la requete
	$pdoStat = $objetPDO->prepare('UPDATE contact set nom=:nom,prenom=:prenom,tel=:tel,mail=:mail WHERE id= :num LIMIT 1');
	
	$pdoStat->bindvalue(':num', $_POST['numContact'], PDO::PARAM_INT);
	$pdoStat ->bindvalue(':nom',$_POST['nom'],PDO::PARAM_STR);
	$pdoStat ->bindvalue(':prenom',$_POST['prenom'],PDO::PARAM_STR);
	$pdoStat ->bindvalue(':tel',$_POST['phone'],PDO::PARAM_STR);
	$pdoStat ->bindvalue(':mail',$_POST['mail'],PDO::PARAM_STR);
	
	$executeIsOk = $pdoStat->execute();
	
	if($executeIsOk){
		$message='Le contact a été mis a jour';
	}
	else{
		$message ='Echec de la mise a jour du contact';
	}
?>