<?php
function get_slideshow($dbc, $db_name, $key, $id) {
  $query = "SELECT * FROM $db_name WHERE $key = $id";
  $result = mysqli_query($dbc, $query);
  return $result;
}

function get_reviews($dbc, $dish) {
  $query = "SELECT SUM(rating) as total_score FROM ".REVIEW_DB." WHERE dish_id = $dish";
  $result = mysqli_query($dbc, $query);
  $total_score = mysqli_fetch_assoc($result)['total_score'];

  $query = "SELECT rating, COUNT(*) as num_reviews FROM ".REVIEW_DB." WHERE dish_id=$dish GROUP BY rating";
  $result = mysqli_query($dbc, $query);
  // $num_by_stars = mysqli_query($dbc, $query);

  $num_by_stars = array(
    1    => 0,
    2    => 0,
    3    => 0,
    4    => 0,
    5    => 0,
  );
  while($row = mysqli_fetch_assoc($result)) {
    $num_by_stars[$row['rating']] = $row['num_reviews'];
  }

  $query = "SELECT * FROM ".REVIEW_DB." WHERE dish_id = $dish";
  $result = mysqli_query($dbc, $query);
  $num_reviews = mysqli_num_rows($result);
  $rating = ($num_reviews ? ($total_score / $num_reviews) : 0);

  return [$rating, $num_reviews, $num_by_stars, $result];
}
?>
