<?php

// Connecting to the database
$errors = "";
$db = mysqli_connect('localhost','root','','hopegivers');

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];



  if (empty($name)) {
    $errors = "You must add new task";
  }else {
    mysqli_query($db, "INSERT INTO contact(name, email, subject, message) VALUES ('$name' , '$email' , '$subject' , '$message') ");
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Contact</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
  <link rel="stylesheet" href="css/contact.css">
</head>

<body>
  <?php include "navbar.php" ?>
  <?php include "loader.html" ?>
  <div class="jumbotron text-light" style="background-color: #34317A;" >
    <div class="text-center">
      <h1>Contact Us</h1>
    </div>

  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xl-4 my-3 text-light">
        <div class="card d-block bg-danger h-100 box-shadow-hover pointer">
          <div class="pt-3 h-75p align-items-center d-flex justify-content-center">
            <i class="fas fa-mobile fa-4x"></i>
          </div>
          <div class="card-body p-4">
            <h3 class="h4"><strong>PHONE NO</strong></h3>
            <p>022 454565</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xl-4 my-3 text-light">
        <div class="card d-block bg-primary h-100 box-shadow-hover pointer">
          <div class="pt-3 h-75p align-items-center d-flex justify-content-center">
            <i class="fas fa-map-marker-alt fa-4x"></i>
          </div>

          <div class="card-body p-4">
            <h3 class="h4"><strong>ADDRESS</strong></h3>
            <p>India, Mumbai.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xl-4 my-3 text-light">
        <div class="card d-block bg-danger h-100 box-shadow-hover pointer">
          <div class="pt-3 h-75p align-items-center d-flex justify-content-center">
            <i class="fas fa-envelope fa-4x"></i>
          </div>
          <div class="card-body p-4">
            <h3 class="h4"><strong>E-MAIL</strong></h3>
            <p>Email id: contact@hopegivers.com</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container">
    <div style="text-align:center">
      <h3><b><p>IF YOU GOT ANY QUESTIONS</p>
        <p>PLEASE DO NOT HESITATE TO SEND US A MESSAGE</p></b></h3>
      </div>
      <div class="row">
        <div class="column">
        </div>
        <div class="column">

          <form action="contact.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name.." required>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your Email.." required>
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Subject...">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write something.." style="height:180px" required></textarea>
            <input type="submit" name="submit" value="Send Message">
          </form>
        </div>
      </div>
    </div>

    <?php include "footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  </body>

  </html>
