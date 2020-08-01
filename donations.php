<?php
session_start();

if (!isset($_SESSION['email'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['email']);
  header("location: index.php");
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Donation</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
  <link rel="stylesheet" type="text/css" href="donations.css">
</head>
<body>
  <?php include "loader.html" ?>
  <?php include "navbar.php" ?>


  <div class="jumbotron text-light" style="background-color: #34317A;" >
    <div class="text-center">
      <h1 style="text-transform:uppercase;">Donate</h1>
    </div>
  </div>

  <h1 style="text-transform:uppercase; font-size: 35px; text-align:center">WE NEED YOUR HELP TO HELP OTHERS</h1>

  <form action="past-history.php" method="post">
    <div class="container pt-5">
      <label style=" font-size: 20px;" for="amount" class="font-weight-bold ml-3">Amount:</label>
      <div style="margin-left: 5em;"class="d-inline-flex col-6">
        <input type="text" name="amount" class="form-control" placeholder="Amount*" required>
      </div>
      <br>
      <div class="my-4">
        <textarea class="form-control" placeholder="Message" cols= "8", rows="8"></textarea>
      </div>
      <center><button type="submit" class="btn btn-danger p-md-3">DONATE NOW</button></center>
    </div>
  </form>
  <div class="pb-5"></div>
  <?php include "footer.php" ?>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
