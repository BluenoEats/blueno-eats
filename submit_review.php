<?php
include "config/setup.php";
include "functions/write_review.php";
include "functions/upload_img.php";

$review_db = REVIEW_DB;
$author_id = $_POST['author'];
$dish_id = $_POST['dish'];
$rating = $_POST['rating'];
$content = $_POST['review-msg'];

echo '<h>Review info.</h>';
echo '<p>author: '.$author_id.'</p>   ';
echo '<p>dish: '.$dish_id.'</p>   ';
echo '<p>rating: '.$rating.'</p>   ';
echo '<p>content: '.$content.'</p>   ';

$review_id = write_review($dbc, $_POST);

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
