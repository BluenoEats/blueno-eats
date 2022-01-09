<?php
include "config/setup.php";

$db = ACCOUNT_DB;
$email = $_GET['email'];
$password = $_GET['password'];
$username = $_GET['username'];

do {
  $uuid = hexdec(bin2hex(random_bytes(2)));
  $query = "INSERT INTO $db (`id`, `email`, `password`, `username`)
  VALUES ($uuid, '$email', '$password', '$username')";
} while (!mysqli_query($dbc, $query));

echo $_GET['username']."'s account created";
?>
