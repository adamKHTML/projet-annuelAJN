<?php 

include('includes/print_error.php');
include('includes/new_cookie.php');
$title = 'Connexion';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $title?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php include('includes/header.php');?>

	<main>
		<h1>INSCRIPTION</h1>
        <div class="form-container" id="form2">
				<h2>Je crée un compte</h2>

				<?php if(!empty($_GET['inscription'])) 
					  print_error($_GET['inscription'])?>

				<form action="verif_inscription.php" method="post" enctype="multipart/form-data">
					<input class="form-input" type="text" name="pseudo" value="<?php cookie('pseudo');?>" placeholder="pseudo">
					<input class="form-input" type="email" name="email" value="<?php cookie('email');?>" placeholder="E-mail">
					<input class="form-input" type="password" name="password" placeholder="Mot de passe">
					<div id="file-up">
						<label>Image de profil (optionel) :</label>
						<input  type="file" name="image" accept="image/png, image/jpeg, image/gif">
					</div>
					<button class="form-btn" type="submit">Inscription</button>
				</form>
			</div>
</main> 
</body>
</html>