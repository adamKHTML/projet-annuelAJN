<?php 
	
	include('includes/config.php');
	include('includes/msg_error.php');
	include('includes/salt.php');

	$email = $_POST['email'];
	$password = $_POST['password'];

	verif_champ($email,'connexion','Veuillez entrer une adresse mail.');
		setcookie('email',$email,time() + 3600*24);

		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			error_msg('connexion','Veuillez entrer une adresse mail valide.');
		}

	verif_champ($password,'connexion','Veuillez entrer un mot de passe.');

	$empreinteSalee = hash('sha512', $salt . $password);

	$q='SELECT id,pseudo FROM users WHERE email = ? AND password = ?';
	$req = $bdd->prepare($q);
	$req->execute([$email,$empreinteSalee]);
	$userInfos = $req->fetchAll();

	if (count($userInfos) != 0){

		session_start();
		$_SESSION['id'] = $userInfos[0]['id'];

		header('location:Dashboard.php?validateMSG=Bienvenue ' . $userInfos['pseudo'] . ' !');
		exit;
		
	}else{
		error_msg('connexion','E-mail ou mot de passe incorrect(e)');
	}
?>