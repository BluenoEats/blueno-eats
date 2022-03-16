<?php
include "../config/setup.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashed = hash('sha256', $password);

$query = "SELECT 1 FROM " . ACCOUNT_DB . " WHERE email='$email'";
$result = mysqli_query($dbc, $query);
$exist = mysqli_num_rows($result);

if ($exist) {
  echo 1; // "Email $email has already been used."
} else {
  $counter = 0;
  do {
    $uuid = hexdec(bin2hex(random_bytes(2)));
    $query = "INSERT INTO " . ACCOUNT_DB . " (`id`, `email`, `password`, `username`)
              VALUES ($uuid, '$email', '$hashed', '$username')";
  } while (!mysqli_query($dbc, $query) && ++$counter < 100);
  if ($counter == 100) {
    echo 2; // "A problem occurs while creating your account. Please try again later."
  } else {
    echo 0; // success
  }
}
