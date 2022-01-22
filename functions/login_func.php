<?php
include "../config/setup.php";

$db = ACCOUNT_DB;
$email = $_POST['email'];
$password = $_POST['password'];
$hashed = hash('sha256', $password);

// // verify the user login
// if (!empty($email) && !empty($password)) {
//   $query = "SELECT 1 FROM ".ACCOUNT_DB." WHERE email='$email' AND password='$hashed'";
//   $result = mysqli_query($dbc, $query);
//   $valid = mysqli_num_rows($result);
// } else {
//   $valid = 0;
// }
$query = "SELECT * FROM ".ACCOUNT_DB." WHERE email='$email' AND password='$hashed'";
$result = mysqli_query($dbc, $query);
$valid = mysqli_num_rows($result);

if ($valid) {
  session_start();
  $user = mysqli_fetch_assoc($result);
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['email'] = $user['email'];
  $_SESSION['username'] = $user['username'];
  echo bin2hex(random_bytes(8));
} else {
  echo 0;
}
?>
