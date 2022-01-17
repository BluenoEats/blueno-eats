<?php
include "config/setup.php";
include "functions/write_review.php";
include "upload.php";

$review_db = REVIEW_DB;
$author_id = $_POST['author'];
$dish_id = $_POST['dish'];
$rating = $_POST['rating'];
$content = $_POST['review-msg'];

// echo '<p>author: '.$author_id.'</p>   ';
// echo '<p>dish: '.$dish_id.'</p>   ';
// echo '<p>rating: '.$rating.'</p>   ';
// echo '<p>content: '.$content.'</p>   ';

$review_id = write_review($review_db, $author_id, $dish_id, $rating, $content);

if ($review_id) {
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

    // store img sources in database
    if ($success) {
      $query = 
    }
  }
}

?>
