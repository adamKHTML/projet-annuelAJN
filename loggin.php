<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" type="text/css" href="styles.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    
    <header>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
		<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
	 </svg>

   <!-- Navbar Transparante -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">BuyOrRent</a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link"  href="#">Acheter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Louer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Vendre</a>
          <li class="nav-item">
          <a class="nav-link" href="#">Enchère</a>
        </li>
        </li>
         
        
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
</header>
   <!--
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="Accuei.html"> BuyOrRent</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
	  
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a href="#list-monument" class="nav-link">Acheter</a>
				
			</li>
			<li class="nav-item">
				<a href="#list-monument" class="nav-link">Louer</a>
			</li>
			<li class="nav-item">
				<a href="#list-monument" class="nav-link">Vendre</a>
			</li>
			<li class="nav-item">
				<a href="#list-monument" class="nav-link">Enchère</a>
			</li>
            
			
		  </ul>
		</div>
	  </nav>
</header> 
-->
    <body>
    
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="Connexion.php" method="POST">
                <h1>Connexion</h1>
                
                
                <form>
    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">En suivant les clauses de confidentialité , nous ne partagerons pas votre e-mail</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
    <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Doit contenir entre 4-20 caractères.
    </span>
  </div>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
  <a href="Forgotpass.php" class="text-decoration-none">Mot de passe oublié ?</a>
</form> 
</form>
        </div>
    </body>
  <!--
    <footer class="page-footer font-small stylish-color-dark pt-4 bg-dark ">

	
<div class="container text-center text-md-left">

  
  <div class="row">

  
  <div class="col-md-4 mx-auto">

    
    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">BuyOrRent</h5>
    <p>Entreprise de vente, achat et location de voitures</p>

  </div>
  

  <hr class="clearfix w-100 d-md-none">

  
  <div class="col-md-2 mx-auto">

    
    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Nos services</h5>

    <ul class="list-unstyled">
    <li>
      <a href="#!">Achat</a>
    </li>
    <li>
      <a href="#!">Vente</a>
    </li>
    <li>
      <a href="#!">Location</a>
    </li>

    </ul>

  </div>
  

  <hr class="clearfix w-100 d-md-none">

  
  <div class="col-md-2 mx-auto">

    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Compte</h5>

    <ul class="list-unstyled">
    <li>
      <a href="#!">Inscription</a>
    </li>
    <li>
      <a href="#!">Connexion</a>
    </li>
    <li>
      <a href="#!">Mot de passe oublié</a>
    </li>
    </ul>

  </div>
  

  <hr class="clearfix w-100 d-md-none">

  
  <div class="col-md-2 mx-auto">

    
    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Information</h5>

    <ul class="list-unstyled">
    <li>
      <a href="#!">Magazine</a>
    </li>
    <li>
      <a href="#!">Thème</a>
    </li>
    </ul>

  </div>
  

  </div>
  

</div>


<hr>


<ul class="list-unstyled list-inline text-center py-2">
  <li class="list-inline-item">
  <h5 class="mb-1">Newsletter</h5>
  </li>
  <li class="list-inline-item">
  <a href="#!" class="btn btn-danger btn-rounded">S'inscrire</a>
  </li>
</ul>

<hr>


<ul class="list-unstyled list-inline text-center">
  <li class="list-inline-item">
  <a>
    Facebook
  </a>
  </li>
  <li class="list-inline-item">
  <a>
    Twitter
  </a>
  </li>
  <li class="list-inline-item">
  <a>
    Youtube
  </a>
  </li>
</ul>



<div class="footer-copyright text-center py-3">© 2022 Copyright:
  <a href="https://mdbootstrap.com/"> NJA</a>
</div>
             

   </footer>
   -->
</html>