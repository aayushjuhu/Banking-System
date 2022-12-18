<?php 
include 'links.php';
?>
<!DOCTYPE html>
<html lang="!">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSF BANK-Transactions</title>
</head>
<body style="background-color: rgb(34, 31, 31);">
<!-- navbar -->
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
<br><br><br><br>
    <h1 class="text-center text-light"><u>All Transactions</u></h1>
    <br>

    <!-- Customer table -->
    <table class="table table-stripped" style="color:white">
        <thead>
          <tr>
            <th>SrNo</th>
            <th>From</th>
            <th>To</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Date/Time</th>
          </tr>
        </thead>
        <tbody>
      <?php 
      include "conn.php"; //importing the connection file
      $sql="Select Srno,Sender,Receiver,Amount,Transfer_status,Date_Time from transfers"; //fetching data from database
      $result = mysqli_query($conn,$sql); //executing the query and storing the result

      //dynamically adding the rows from the database into the table
      if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
      ?>
          <tr>
          <td><?php echo $row['Srno'];?></td>
          <td><?php echo $row['Sender'];?></td>
          <td><?php echo $row['Receiver'];?></td>
          <td><?php echo "₹".$row['Amount'];?></td>
          <td><?php echo $row['Transfer_status'];?></td>
          <td><?php echo $row['Date_Time'];?></td>
        </tr>
        <?php
        }
      } else {
        echo "0 results";
      }?>
        </tbody>
      </table>
      <footer style="color:white; text-align: center;">&#169; 2022,TSF BANK<br>Created by Aayush Juhukar <br>as a part of TSF GRIP</footer>
</body>
</html>