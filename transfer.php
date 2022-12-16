<!DOCTYPE html>
<html lang="en">
<head>
  <title>TSF Bank-Transfer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="icon" type="image/x-icon" href="image-removebg-preview (7).png">
</head>
<body style="background-color: rgb(34, 31, 31);">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <a class="navbar-brand" href="index.php"><strong>TSF BANK</strong></a>
  
  
  <ul class="navbar-nav ">
    
    <li class="nav-item">
      <a class="nav-link" href="transaction.php"><i class="fa fa-users"></i> All Customer</a>
      
    </li>
    <li class="nav-item">
      <a class="nav-link" href="moneytransfer.php"><i class="fa fa-money" aria-hidden="true"></i> All Transactions</a>
    </li>
  </ul>
</nav>
<br>
<h1 class="text-center text-light">Transfer Funds</h1>
<br><br><br><br>
<form class="text-center" style="border: 2px solid white;border-radius: 10px;" method="post" action="trans.php"> 
    <br>
    <div class="form-horizontal">
        <label for="Sender's account no." style="color: aliceblue;">Sender's account no.<sup><span style="color:red">*</sup></span></label>
        <input class="text-center" type="number" name="sac" placeholder="Enter account number" style="width: 20vw;" rows="1" required>
    <br><br>
    <div class="form-horizontal">
        <label for="Receiver's account no." style="color: aliceblue;">Receiver's account no.<sup><span style="color:red">*</sup></span></label>
        <input class="text-center" type="number" name="rac" placeholder="Enter account number" rows="1" required style="width: 20vw;">
    </div>
    <br><br>
    <div class="form-horizontal">
        <label for="Amount" style="color: aliceblue;">Amount<sup><span style="color:red">*</sup></span></label>
        <input class="text-center" type="number" name="amt" placeholder="Enter amount" style="width: 20vw;" required>
    </div>
    <br>
    <div class="form-horizontal">
        <button type="submit" name="trbtn" class="btn btn-light btn-xs"><strong>Submit</strong></button>
    </div>
    <br>
    
    
</form>
<br><br><br><br>
<footer style="color:white; text-align: center;">&#169; 2022 Created by Aayush Juhukar</footer><footer style="color:white;text-align: center;">as a part of TSF GRIP</footer>
</body>
</html>