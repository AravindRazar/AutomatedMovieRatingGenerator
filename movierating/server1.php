<?php
session_start();

// initializing variables
$username = "";
$errors = array(); 
$db = mysqli_connect('localhost:3308', 'root', 'aravind7', 'register');
if (isset($_POST['login_user']))
	{
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  $sql="SELECT * from users where username ='$username' and password = '$password'";
  $result = mysqli_query($db,$sql);
  $_SESSION['username'] = $username;
  $check = mysqli_fetch_array($result);
  if(isset($check))
  {
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }
  else
  {
    echo "session failure";
  }

}
?>