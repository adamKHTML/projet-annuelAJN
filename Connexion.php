<?php
   
    include('config.php');
    include('msg_error.php');
    include('salt.php');
 
    $email = $_POST['email'];
    $password = $_POST['password'];
 
       if(!empty($_POST['email'])) {  
    verif_champ($email,'loggin','Veuillez entrer une adresse mail.');
 }
 
    verif_champ($password,'loggin','Veuillez entrer un mot de passe.');
 
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
        error_msg('loggin','E-mail ou mot de passe incorrect(e)');
    }
?>

   