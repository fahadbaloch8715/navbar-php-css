<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FaizanEcom</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

  <!-- navbar -->

  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top custom-nav">
  <div class="container-fluid"> 
    <div class="logo">
    <a class="navbar-brand" href="#">Faizan<span>Ecom</span></a>
    </div>
   <button class="btn d-lg-none ms-auto custom-toggler" type="button"
  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
  aria-controls="offcanvasRight">
  <span class="navbar-toggler-icon">
    <span></span>
  </span>
</button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item cert">
          <a class="nav-link " href="#">Certifications</a>
        </li>
        <li class="nav-item about">
          <a class="nav-link" href="#">About Us</a>
        </li>
         <li class="nav-item why">
          <a class="nav-link" href="#">Why Us</a>
        </li>
        <li class="nav-item dropdown why">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Work
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">400+ SALES PROOF</a></li>
            <li><a class="dropdown-item" href="#">META ADS RESULTS</a></li>
            <li><a class="dropdown-item" href="#">COUNTLESS CLIENT REVIEWS</a></li>
          </ul>
        </li>
         <li class="nav-item service" >
          <a class="nav-link" href="#">Services</a>
        </li>
         <li class="nav-item contact">
          <a class="nav-link" href="#">Contact</a>
        </li>
    </div>
  </div>
</nav>


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Explore <span>Us</span></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <!-- Ye jagah par aap kuch bhi rakh sakte ho -->
    <div class="logo1">
        <hr>
    </div>
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">CERTIFICATIONS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">WHY US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">400+ SALES PROOF</a>
          <a class="nav-link" href="#">META ADS RESULTS</a>
          <a class="nav-link" href="#">COUNTLESS CLIENT REVIEWS</a>
          <a class="nav-link" href="#">SERVICES</a>


        </li>
  </div>
</div>



   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>