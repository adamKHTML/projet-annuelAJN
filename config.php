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
?>
