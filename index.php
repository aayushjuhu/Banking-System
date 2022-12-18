<?php
include 'links.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TSF Bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color: rgb(34, 31, 31);">

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php"><strong>TSF BANK</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="nav">
    <ul class="navbar-nav">
    
      <li class="nav-item">
        <a class="nav-link" href="transaction.php"><i class="fa fa-users"></i> All Customer</a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="moneytransfer.php"><i class="fa fa-money" aria-hidden="true"></i> All Transactions</a>
      </li>
  </ul>
  </div>
</nav>
<br><br>

<!-- carousel -->
<div class="container-fluid">
    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="2000">

        
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          
        </ul>
        
        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="img-fluid" src="Picture2.jpg" alt="tsfmain" width="1500vw" height="400vw">
          </div>
          <div class="carousel-item">
            <img class="img-fluid" src="Picture1.jpg" alt="hastrans" width="1500vw" height="400vw">
          </div>
          
        </div>
        
        
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      <br><br><br><br>

  <div class="text-center" style="border: 2px solid white;color:white;">
    <p>We at TSF have pledged to provide you with hassel-free banking services. We always assure that our customer has a great experience banking with us. Our team works round the clock to ensure well-being of our system.</p>
  </div>

</div>
<br><br><br><br>
<footer style="color:white; text-align: center">&#169; 2022,TSF BANK<br>Created by Aayush Juhukar <br>as a part of TSF GRIP</footer>


</body>
</html>
