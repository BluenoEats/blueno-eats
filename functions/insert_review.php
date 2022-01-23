<?php
function insert_review($dbc, $author_id, $review) {
  // $author_id = $review['author'];
  $dish_id = $review['dish'];
  $rating = $review['rating'];
  $content = $review['review-msg'];
  $anonymous = isset($review['anonymous']);

  // check if the user already wrote a review
  $query = "SELECT 1 FROM ".REVIEW_DB." WHERE author_id='$author_id' AND dish_id='$dish_id'";
  $result = mysqli_query($dbc, $query);
  $exist = mysqli_num_rows($result);

  if ($exist) {
    echo "user #".$author_id." already wrote a review for dish #".$dish_id;
    return 0;
  } else {
    // insert the review into db
    $query = "INSERT INTO ".REVIEW_DB." (author_id, dish_id, rating, content, anonymous)
    VALUES ($author_id, $dish_id, $rating, '$content', $anonymous)";
    $success = mysqli_query($dbc, $query);

    if ($success) {
      $id = mysqli_insert_id($dbc);
      echo "review #".$id." written";
      return $id;
    } else {
      echo "The user or the dish doesn't exist.";
      return 0;
    }
  }
}
?>