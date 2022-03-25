<?php
include "../config/setup.php";

$db = ACCOUNT_DB;
$email = $_SESSION['email'];
$new_password = $_POST['new_password'];
$password = $_POST['password'];
$hashed = hash('sha256', $password);
$new_hashed = hash('sha256', $new_password);

$query = "SELECT * FROM " . ACCOUNT_DB . " WHERE email='$email' AND password='$hashed'";
$result = mysqli_query($dbc, $query);
$valid = mysqli_num_rows($result);

if ($valid) {
  $query = "UPDATE " . ACCOUNT_DB . " SET password='$new_hashed' WHERE email='$email' AND password='$hashed'";
  mysqli_query($dbc, $query);
  echo 0; // success
} else {
  echo 1; // incorrect password.
}
