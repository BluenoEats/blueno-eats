<?php
include "../config/setup.php";
include "upload_img.php";
include "insert_review.php";

$author_id = $_POST['author'];
$dish_id = $_POST['dish'];
$rating = $_POST['rating'];
$content = $_POST['review-msg'];

$review_id = insert_review($dbc, $_POST);

if ($review_id) {
  echo "<p>uploading images..</p>";
  $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/websites/bluenoeats.github.io/upload/";
  $len = count($_FILES['review-img']['name']);
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
