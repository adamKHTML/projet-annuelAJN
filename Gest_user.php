<DOCTYPE html>
<html>
<head>
    <title>Gestion Utilisateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <?php require_once 'process.php'; ?>

    <?php

    if (isset($_SESSION['message'])): ?>
    <div class="alert-<?=$_SESSION['msg_type']?>">

             <?php
             echo $_SESSION['message'];
             unset($_SESSION['message']);
             ?>
  </div>
  <?php endif ?>
    <div class="container">
    <?php 
    $mysqli = new mysqli('localhost' ,'root' ,'root', 'users') or die(mysqli_error($mysqli));
    $result =$mysqli->query("SELECT * FROM users") or die($mysqli->error);
    //pre_r($result);
    ?>

    <div class="row justify-content-center">
        <table class="table">
            <thread>
                <tr>
                    
                    <th>pseudo</th>
                    <th>email</th>
                    <th>password</th>
                    <th>image</th>
                    <th colspan="2">Action</th>
                </tr>  
</thread>
<?php 
      while ($row = $result->fetch_assoc()): ?>
        <tr>
        
        <td><?php echo $row['pseudo']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['image']; ?></td>
        <td>
            <a href="Gest_user.php?edit=<?php echo $row['id']; ?>"
            class="btn btn-info">Editer</a>
            <a href="process.php?delete=<?php echo $row['id']; ?>"
            class="btn btn-danger">Supprimer</a>
        </td>
      </tr>
      <?php endwhile; ?>
</table>
</div>
    <?php
    function pre_r( $array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
    ?>
    <div class="row justify-content-center">
    <form action="process.php" method="POST">
        <div class="form-group">
        <label>Name</label>
        <input type="text" name="pseudo" class="form-control" placeholder="Entrez le pseudo">
        </div>
        <div class="form-group">
        <label>Adresse mail</label>
        <input type="text" name="email" class="form-control" placeholder="Entrez l'Adresse mail">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary" name="save">Enregistrer</button>
       </div>
    </form>
    </div>
    </div>
    </body>