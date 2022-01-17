<?php
function write_review($dbc, $review_db, $author_id, $dish_id, $rating, $content) {
  // check if the user already wrote a review
  // $query = "SELECT 1 FROM $review_db WHERE author_id=$author_id AND dish_id=$dish_id";
  // $result = mysqli_query($dbc, $query);
  // $exist = mysqli_num_rows($result);
  $exist = 0;

  if ($exist) {
    echo "user #".$author_id." already wrote a review for dish #".$dish_id;
    return 0;
  } else {
    // insert the review into db
    $query = "INSERT INTO $review_db (author_id, dish_id, rating, content)
    VALUES ($author_id, $dish_id, $rating, '$content')";
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
