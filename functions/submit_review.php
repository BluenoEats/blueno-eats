<?php
include "../config/setup.php";
include "upload_img.php";
include "insert_review.php";

session_start();
if (isset($_SESSION['user_id'])) {
  $author_id = $_SESSION['user_id'];
  $dish_id = $_POST['dish'];
  $rating = $_POST['rating'];
  $content = $_POST['review-msg'];
  $review_id = insert_review($dbc, $author_id, $_POST);
} else {
  echo "<p>Please log in first.</p>";
}

if (isset($review_id) && $review_id) {
<<<<<<< HEAD
  $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/series/bluenoeats/upload/";
=======
  $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/websites/bluenoeats.github.io/upload/";
  // $target_dir = dirname("../upload/");
  // $target_dir = "../upload/";
>>>>>>> c72e7621882a6ad957a1b206ae04125590ea41de
  $len = count($_FILES['review-img']['name']);
  if ($len > 0) {
    echo "<p>uploading images..</p>";
  }
  for ($i=0; $i < $len; $i++) {
    $file_info = array(
      'name'      => $_FILES['review-img']['name'][$i],
      'type'      => $_FILES['review-img']['type'][$i],
      'tmp_name'  => $_FILES['review-img']['tmp_name'][$i],
      'error'     => $_FILES['review-img']['error'][$i],
      'size'      => $_FILES['review-img']['size'][$i],
    );
    // upload photos
    $success = upload_img($target_dir, $file_info);
    if ($success) {
      echo "<p>image successfully uploaded</p>";
    }

    // store img sources in database
    if ($success) {
      $db = REVIEW_IMAGES;
      $img_src = "upload/".$file_info['name'];
      $query = "INSERT INTO $db (`review_id`, `img_src`) VALUES ($review_id, '$img_src')";
      mysqli_query($dbc, $query);
    }
  }
}
?>
