<?php
include "../config/setup.php";

$db = ACCOUNT_DB;
$email = $_SESSION['email'];
$new_username = $_POST['new_username'];
$password = $_POST['password'];
$hashed = hash('sha256', $password);

$query = "SELECT * FROM " . ACCOUNT_DB . " WHERE email='$email' AND password='$hashed'";
$result = mysqli_query($dbc, $query);
$valid = mysqli_num_rows($result);

if ($valid) {
  $query = "UPDATE " . ACCOUNT_DB . " SET username='$new_username' WHERE email='$email' AND password='$hashed'";
  mysqli_query($dbc, $query);
  $_SESSION['username'] = $new_username;
  echo 0; // success
} else {
  echo 1; // incorrect password.
}
