<?php
include "../config/setup.php";
include "upload_img.php";
include "insert_review.php";
include "redirect.php";

if (isset($_SESSION['user_id'])) {
  $author_id = $_SESSION['user_id'];
  $review_id = insert_review($dbc, $author_id, $_POST);
} else {
  echo "<p>Please log in first.</p>";
}

if (isset($review_id) && $review_id) {
  $target_dir = dirname(__DIR__).DIRECTORY_SEPARATOR."upload".DIRECTORY_SEPARATOR;
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
    $imageFileType = strtolower(pathinfo($file_info["name"],PATHINFO_EXTENSION));
    $file_name = bin2hex(random_bytes(12)).".".$imageFileType;
    $success = upload_img($target_dir, $file_info, $file_name);
    if ($success) {
      echo "<p>image successfully uploaded</p>";
    }

    // store img sources in database
    if ($success) {
      $db = REVIEW_IMAGES;
      $img_src = "upload".DIRECTORY_SEPARATOR.$file_name;
      $query = "INSERT INTO $db (`review_id`, `img_src`) VALUES ($review_id, '$img_src')";
      mysqli_query($dbc, $query);
    }
  }
}

redirect($_SESSION['prev_page']);
?>
