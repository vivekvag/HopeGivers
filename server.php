<?php
session_start();
// initializing variables
$email    = "";
$errors = array();

// Create connection
$db = mysqli_connect('localhost','root','','hopegivers');

if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $DOB = mysqli_real_escape_string($db, $_POST['DOB']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name)) { array_push($errors, "First Name is required"); }
  if (empty($last_name)) { array_push($errors, "Last Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($DOB)) { array_push($errors, "Date of Birth is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }


  // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM userdata WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
      if ($user['email'] === $email) {
        array_push($errors, "email already exists");
      }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
    	$password = md5($password_1);//encrypt the password before saving in the database

    	$query = "INSERT INTO userdata(first_name, last_name, email, address, DOB, password)
    			  VALUES('$first_name','$last_name', '$email', '$address', '$DOB', '$password')";
    	mysqli_query($db, $query);
    	$_SESSION['email'] = $email;
    	$_SESSION['success'] = "You are now logged in";
    	header('location: index.php');
    }
  }

  // ...

  // LOGIN USER
  if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($email)) {
    	array_push($errors, "Email is required");
    }
    if (empty($password)) {
    	array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
    	$password = md5($password);
    	$query = "SELECT * FROM userdata WHERE email='$email' AND password='$password'";
    	$results = mysqli_query($db, $query);
    	if (mysqli_num_rows($results) == 1) {
    	  $_SESSION['email'] = $email;
    	  $_SESSION['success'] = "You are now logged in";
    	  header('location: index.php');
    	}else {
        array_push($errors, "Wrong Email / Password ");
      }
    }
  }

  ?>
