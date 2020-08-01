<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
  /*Footer Section*/
  *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
  }

  footer {
    display: flex;
    align-items: center;
    justify-content: space-around;
    background-color: #1B1C25;
    color: #fff;
    padding: 20px 0;
  }

  footer ul {
    display: flex;
    list-style: none;
  }

  footer ul li {
    margin-left: 16px;
  }

  footer ul li a{
    color: #cdcdcd;
  }

  footer ul li a:hover{
    color: #fff;
  }

  footer p {
    text-transform: uppercase;
    font-size: 14px;
    opacity: 0.6;
    align-self: center;
  }

  @media (max-width: 1100px) {
    footer {
      flex-direction: column;
    }

    footer p {
      text-align: center;
      margin-bottom: 20px;
    }

    footer ul li {
      margin: 0 8px;
    }
  }

  </style>

</head>
<body>

  <footer>
    <p>All Rights Reserved</p>
    <p>Developed by HopeGivers</p>
    <ul>
      <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i> </a> </li>
      <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i> </a> </li>
      <li><a href="#"><i class="fab fa-instagram-square fa-2x"></i></a> </li>
    </ul>
  </footer>

</body>
</html>
