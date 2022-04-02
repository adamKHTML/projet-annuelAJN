<?php
   
   $user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8','root','root' );
    }catch(Exception $e){
        die('ERREUR : ' . $e->getMessage());
    }
 session_start();

    if (isset($_POST['save'])){
        $pseudo = $_POST['pseudo'];
        $email =$_POST['email'];
       

        $bdd->query("INSERT INTO users (pseudo, email) VALUES('$pseudo', '$email')") or
        die($bdd->error); 
        $_SESSION['message'] = "Le compte est bien enregistré";
        $_SESSION['msg_type'] = "success";

        header("location: Gest_user.php");
    }
    
    if (isset($_GET['delete'])){
       $id = $_GET['delete'];
       $bdd->query("DELETE FROM users WHERE id=$id") or die($bdd->error());
    
       $_SESSION['message'] = "Le compte a bien été supprimer!";
        $_SESSION['msg_type'] = "danger";

        header("location: Gest_user.php");
    }
?>

