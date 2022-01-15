<?php
include "../config/setup.php";

$db = REVIEW_DB;
$author_id = $_GET['author'];
$dish_id = $_GET['dish'];
$rating = $_GET['rating'];
$content = $_GET['review-msg'];
// $username = $_GET['img'];

// database query
$query = "SELECT 1 FROM $db WHERE author_id=$author_id AND dish_id=$dish_id";
$result = mysqli_query($dbc, $query);
$exist = mysqli_num_rows($result);

if ($exist) {
  echo "user #".$author_id." already wrote a review for dish #".$dish_id;
} else {
  $query = "INSERT INTO $db (`author_id`, `dish_id`, `rating`, `content`)
  VALUES ('$author_id', '$dish_id', '$rating', '$content')";
  $success = mysqli_query($dbc, $query);

  if ($success) {
    $id = mysqli_insert_id($dbc);
    echo "review #".$id." written";
  } else {
    echo "The user or the dish doesn't exist.";
  }
}
?>
