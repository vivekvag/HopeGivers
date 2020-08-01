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

<?php


// Connecting to the database

$errors = "";
$db = mysqli_connect('localhost','root','','hopegivers');

  $amount = $_POST['amount'];

  if (isset($_SESSION['email'])){
    $email = $_SESSION['email'];
  }

  $date = date("d/m/Y");

  if (empty($amount)) {
    $errors = "You must add new task";
  }else {
    mysqli_query($db, "INSERT INTO donate(amount, email, date) VALUES ('$amount' , '$email' , '$date') ");


  }


$email = $_SESSION['email'];


$donate_amount = mysqli_query($db, "SELECT * FROM donate where email ='$email' ");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap Link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

  <?php include "navbar.php" ?>

  <div class="jumbotron mt-3 text-light mx-3" style="background-color: #34317A; " >
    <div class="text-center">
      <h1>Thanks for Helping Us</h1>
    </div>

  </div>

  <!-- This is the Section where table is created, which includes Task ID, Task Name & Task action -->
  <div class="container-fluid container-md mt-4 table-responsive table-hover">
    <table  class="table table-design">
      <!-- Name of the columns in the table -->
      <thead class="thead">
        <tr class="thead-font">
          <th scope="col-1" >SN.</th>
          <th scope="col-9" width='50%'>Amount</th>
          <th scope="col-1" class="pl-4">Date</th>
        </tr>
      </thead>
      <tbody>

        <!-- body which will be fetched from the database with the action buttons -->
        <?php $i =1; while ($row = mysqli_fetch_array($donate_amount)) { ?>
          <tr>

            <!-- Fetching the data  -->
            <th scope="row"><?php echo $i; ?></th>
            <td>
              <div  class='edit' id='amount_<?php echo $id; ?>'>
                <?php echo $row['amount']; ?>
              </div>
            </td>
            <td>
              <?php echo $row['date']; ?>
            </td>
          </tr>
          <?php $i++; } ?>
        </tbody>
      </table>

      <!-- BootStrap Links -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </body>
    </html>
