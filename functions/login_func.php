<?php
include "../config/setup.php";

$db = ACCOUNT_DB;
$email = $_POST['email'];
$password = $_POST['password'];
$hashed = hash('sha256', $password);

$query = "SELECT * FROM " . ACCOUNT_DB . " WHERE email='$email' AND password='$hashed'";
$result = mysqli_query($dbc, $query);
$valid = mysqli_num_rows($result);

if ($valid) {
  $user = mysqli_fetch_assoc($result);
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['email'] = $user['email'];
  $_SESSION['username'] = $user['username'];
  echo $_SESSION['prev_page'];  // success
} else {
  echo 1; // incorrect email or password.
}
