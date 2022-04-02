

<?php 
  session_start();

  ?>
<!--Première tentative Dashboard-->
<html>
<head>
<meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" type="text/css" href="styleadmin.css" />
        <!--Bootstrap --->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Tableau de bord</title>
        <!--Boxicons--> 
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="sidebar">
<a class="navbar-brand" href="#">BuyOrRent</a>

<ul class="nav-link">
    
    <li>
     <a href="#"> 
     <i class='bx bxs-dashboard'></i>
     <span class="link-name">Tableau de bord</span>
    </a>
    </li>
    <li>
     <a href="#"> 
     <i class='bx bx-chat' ></i>
     <span class="link-name">Messages</span>
    </a>
    </li>
    <li>
     <a href="Gest_user.php"> 
     <i class='bx bxs-user-account' ></i>
     <span class="link-name">Gestion profils</span>
    </a>
    </li>
    <li>
     <a href="#"> 
     <i class='bx bx-conversation' ></i>
     <span class="link-name">Gestions commentaires</span>
    </a>
    </li>
    <li>
     <a href="#"> 
     <i class='bx bx-calendar-event' ></i>
     <span class="link-name">Activité</span>
    </a>
    </li>
    <li>
    <a href="#"> 
    <i class='bx bx-photo-album' ></i>
     <span class="link-name">Gestion Photo</span>
    </a>
    </li>
</ul>
</div>
 
<!--Navbar-->

<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu' ></i>
            <span class="dashboard">Tableau de bord</span>
         </div>
         <form class="d-flex">
         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
</form>
<div class="profile">
    <img src="#" alt="icon">
    <span class="admin_name">Adam Lemoel</span>
    <i class='bx bx-chevron-down' ></i>
</div>
    </nav>

    <!---Contenue de la page-->
    <div class="home-content">
        <div class="overview-boxes">
            <div class="box">
                <div class="left-side">
                    <div class="box_topic">Nombre de visiteurs</div>
                    <div class="number">500</div>
                    <div class="indicateur">
                         <i class='bx bx-up-arrow-alt' ></i>
                    </div>
                    <span class="text">en augmentation depuis hier</span>
                   
                </div>
            </div>
            <i class='bx bx-shocked'></i>
        </div>
        <div class="box">
                <div class="left-side">
                    <div class="box_topic">Total des Ventes</div>
                    <div class="number">500</div>
                    <div class="indicateur">
                         <i class='bx bx-up-arrow-alt' ></i>
                    </div>
                    <span class="text">en augmentation depuis hier</span>
</div>
</div>
<i class='bx bxs-cart-alt cart two' ></i>
    </div>
    <div class="box">
                <div class="left-side">
                    <div class="box_topic">Utilisateurs</div>
                    <div class="number">500</div>
                    <div class="indicateur">
                         <i class='bx bx-up-arrow-alt' ></i>
                    </div>
                    <span class="text">en augmentation depuis hier</span> 
</div>
</div>
<i class='bx bxs-user'></i>
</div>
</div>
<!--plus d'info-->



    
</section>


</body>

    </html>