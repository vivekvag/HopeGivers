
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>HopeGivers</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">

  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

  <link rel="stylesheet" href="css/carousel.css">
  <link rel="stylesheet" href="css/styles.css">

</head>
<body>
  <?php include "loader.html" ?>
  <?php include "navbar.php" ?>

  <!-- Scrolling Image -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img\kids-1.jpg" class="d-block w-100" alt="Insert Image Here">
        <div class="carousel-caption">
          <h2 class="animated bounceInDown" >Help The Future Generation</h2>
          <h4 class="animated-cite">Brings to life again with spirituality</h4>
          <a class="btn btn-danger carousel-button" href="#charity-kids" role="button">Read More</a>
        </div>

      </div>

      <div class="carousel-item">
        <img src="img\slide2.jpg" class="d-block w-100" alt="Insert Image Here">
        <div class="carousel-caption">
          <h2 class="animated-header" >Raise A Fund</h2>
          <h4 class="animated-cite">Show that you care for others.</h4>
          <a class="btn btn-danger carousel-button" href="#charity-kids" role="button">Read More</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img\kids-3.jpg" class="d-block w-100" alt="Insert Image Here">
        <div class="carousel-caption">
          <h2 class="animated bounceInDown" >Give Little One a Chance</h2>
          <h4 class="animated-cite">Fall seven times, stand up eight. </h4>
          <a class="btn btn-danger carousel-button" href="#charity-kids" role="button">Read More</a>
        </div>
      </div>
    </div>

    <a class="carousel-control-prev controller" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next controller" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <section class="charity" id="charity-kids">
    <h3 class="title main-header">About Us</h3>
    <hr>
    <p>Welcome to HopeGivers. We are a charity which is dedicated towards the education,health and well-being of underpriviliged childeren in India. Our main aim is to help children who are deprived of a normal life due to some circumstances and are not able to have a good childhood. The money that you donate goes straight into the welfare and development of these children.</p>
    <p>Individual wealth in India witnessed a growth rate of 10.91% in the year 2016-17 against 8.50% in 2015-16 . India also created higher number of high-net-worth-individuals with a growth rate of 9.5% against the Asia growth rate of 7.5%*.And yet, 36% of children under 5 in India are malnourished*, 51 per cent of the women of reproductive age suffer from anemia*, 33 million children still do not attend school and employed in various forms of child labor,* 350 million Indians still face the burden of open defecation due to lack of access to sanitation facilities,* and close to 18,000 villages in India still do not have storage facilities for water.</p>

    <div class="readmore-button">
      <a class="btn btn-danger" href="donations.php" role="button">Donate Now</a>
      <a class="btn btn-outline-danger" href="about.php" role="button">Read More</a>
    </div>

  </section>

  <section class="packages">
    <h3 class="title-packages">What we do?</h3>
    <hr class="packages">
    <h5 class="packages">HopeGivers, online donation platform, allows you to support a cause of your choice with trasparency</h5>

    <ul class="grid">

      <li>
        <i class="fas fa-money-bill fa-4x"></i>
        <h4>Donate For Children</h4>
        <p>Remember that the happiest people are not those getting more, but those giving more.</p>
      </li>

      <li>
        <i class="fas fa-thumbs-up fa-4x"></i>
        <h4>Help Little hands</h4>
        <p>You can have everything you want in life if you just help enough people get what they want in life.</p>
      </li>

      <li>
        <i class="fas fa-utensils fa-4x" style ="padding:25px 35px;"></i>
        <h4>Feed For Hungry Child</h4>
        <p>The nourishment of body is food, while the nourishment of the soul is feeding others.</p>
      </li>

      <li>
        <i class="fas fa-home fa-4x"></i>
        <h4>Home For homeless</h4>
        <p>The hungry and the homeless don't care about liberty any more than they care about cultural heritage.</p>
      </li>
    </ul>
  </section>

  <section class="education">
    <h3 class="title">How can you help?</h3>
    <hr>
    <h5>For people in developing countries, education can change everything.</h5>

    <ul class="grid">
      <li ><iframe width="550" height="350" src="https://www.youtube.com/embed/ZDAdi6ZLktc"></iframe></li>
      <li >
        <div class = "education">
          <i class="fas fa-gift fa-4x"></i>
          <span class="education">BECOME A VOLUNTEER </span>
          <p class="education">You select the program that you wish to commit to support.</p>
        </div>
        <div class = "education">
          <i class="fas fa-school fa-3x"></i>
          <span class="education">Provide a Scholarship </span>
          <p>We utilize the money towards to enusre they have bright future.</p>
        </div>
        <div class = "education">
          <i class="fas fa-hands-helping fa-4x"></i>
          <span class="education">Make a Gift </span>
          <p>We give you periodic updates about the people you are helping.</p>
        </div>
      </li>
    </ul>
  </section>

  <section class="projects">
    <h3 class="title-projects">Our Mission</h3>
    <hr class="projects">
    <h5 class="projects">Here is how we ensure that your contribution reaches the people and the organization you support.</h5>

    <div class="container mt-4">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="img/gallery1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-dark text-center project-title">Assam Flood</h5>
              <p class="card-text text-dark">The Assam Floods in 2020 have already affected 16.5 Lakh people and 107 people have died.</p>
              <div class="text-center">
                <a href="missions.php" class="btn btn-primary">View More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" >
            <img src="img/gallery2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-dark text-center project-title">Bengal Flood</h5>
              <p class="card-text text-dark">Storm surge and torrential rain brought by Cyclone Amphan caused flooding in parts of West Bengal in India</p>
              <div class="text-center">
                <a href="missions.php" class="btn btn-primary">View More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" >
            <img src="img/gallery3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-dark text-center project-title">Uttarakhand 2013</h5>
              <p class="card-text text-dark">The flooding also caused more than US$3.8 billion in economic losses and reason of flood was rainfall.</p>
              <div class="text-center">
                <a href="missions.php" class="btn btn-primary">View More</a>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>

    <ul class="grid">

    </ul>
  </section>

  <section class="contact">
    <h3 class="title">Learn More</h3>
    <p>Want to know more? Just sign up for our mailing list. No spam from us, we promise! </p>
    <hr>

    <form>
      <input type="email" placeholder="Enter your Email">
      <a href="#" class="btn">Subscribe Now</a>
    </form>
  </section>

  <?php include "footer.php" ?>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
