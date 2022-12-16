<!DOCTYPE html>
<html lang="!">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="image-removebg-preview (7).png">
    <title>TSF BANK-Transactions</title>
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
    <h1 class="text-center text-light">All Transactions</h1>
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
      include "conn.php";
      $sql="Select Srno,Sender,Receiver,Amount,Transfer_status,Date_Time from transfers";
      $result = mysqli_query($conn,$sql);
      if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
      ?>
          <tr>
          <td><?php echo $row['Srno'];?></td>
          <td><?php echo $row['Sender'];?></td>
          <td><?php echo $row['Receiver'];?></td>
          <td><?php echo $row['Amount'];?></td>
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
    <footer style="color:white; text-align: center;">&#169; 2022 Created by Aayush Juhukar</footer><footer style="color:white;text-align: center;">as a part of TSF GRIP</footer>
</body>
</html>