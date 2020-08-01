<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;700&display=swap" rel="stylesheet">
  <style>

  .topnav {
    overflow: hidden;
    font-family: 'Open Sans', sans-serif;
    font-weight: 500;
  }

  .topnav a {
    color: #8e8a8a;
    float: left;
    display: block;
    text-align: center;
    padding: 10px 18px;
    text-decoration: none;
    font-size: 18px;
    line-height: 50px;
    text-transform: capitalize;
  }

  .topnav .logo{
    font-family: 'Montserrat', sans-serif;
    font-size: 35px;
    line-height: 50px;
    font-weight: 600;
    margin-right: 50px;
    margin-left: 120px;
    color: #2F3191;

  }

  .topnav a:hover {
    color: #C82333;
  }

  .topnav a:first-child:hover {
    color: #2F3191;
  }

  .topnav .icon {
    display: none;
  }

  .float-btn{
    position: absolute;
    top: 1em;
    right: 8em;
  }

  @media screen and (max-width: 600px) {
    .topnav a:not(:first-child) {display: none;}
    .topnav a.icon {
      float: right;
      display: block;
    }
  }

  @media screen and (max-width: 1260px) {
    .topnav.responsive {position: relative;}
    .topnav.responsive .icon {
      position: absolute;
      right: 0;
      top: 0;
    }
    .topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
    .topnav .logo{
      font-size: 30px;
      margin-left: auto;

    }
  }
</style>
</head>
<body>

  <div class="topnav" id="myTopnav">
    <a href="index.php" class="logo">
      <span>HopeGivers</span>
    </a>

    <a href="index.php" class="active">Home</a>
    <a href="about.php">About</a>
    <a href="missions.php">Missions</a>
    <a href="gallery.php">Gallery</a>
    <a href="contact.php">Contact</a>
    <?php  if (isset($_SESSION['email'])) : ?>
      <a href="index.php?logout='1'">Logout</a>
    <?php endif ?>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <!-- Donate Button -->
  <a href="donations.php">
    <button type="button" class="btn btn-outline-danger float-btn">Donate Now</button>
  </a>

  <script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script>

</body>
</html>
