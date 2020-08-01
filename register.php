<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>HopeGivers</title>
  <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
  <div class="header">
    <h2>Register</h2>
  </div>

  <form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>FirstName</label>
      <input type="text" name="first_name" >
    </div>
    <div class="input-group">
      <label>LastName</label>
      <input type="text" name="last_name">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Address</label>
      <input type="text" class="form-control" name="address" required="required">
    </div>
    <div class="input-group">
      <label>D.O.B</label>
      <input type="date" class="form-control" name="DOB" required="required">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
</body>
</html>
