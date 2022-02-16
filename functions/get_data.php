<?php
function get_slideshow($dbc, $db_name, $key, $id) {
  $query = "SELECT * FROM $db_name WHERE $key = $id";
  $result = mysqli_query($dbc, $query);
  return $result;
}

function get_reviews($dbc, $dish) {
  $query = "SELECT SUM(rating) as total_score FROM ".REVIEW_DB." WHERE dish_id = $dish";
  $sum_rating = mysqli_query($dbc, $query);
  $total_score = mysqli_fetch_assoc($sum_rating)['total_score'];

  $query = "SELECT rating, COUNT(*) as num_reviews FROM ".REVIEW_DB." WHERE dish_id=$dish GROUP BY rating";
  $rating_by_stars = mysqli_query($dbc, $query);

  $num_by_stars = array(
    1    => 0,
    2    => 0,
    3    => 0,
    4    => 0,
    5    => 0,
  );
  while($row = mysqli_fetch_assoc($rating_by_stars)) {
    $num_by_stars[$row['rating']] = $row['num_reviews'];
  }

  $query = "SELECT * FROM ".REVIEW_DB." WHERE dish_id = $dish";
  $all_reviews = mysqli_query($dbc, $query);
  $num_reviews = mysqli_num_rows($all_reviews);
  $rating = ($num_reviews ? ($total_score / $num_reviews) : 0);
  $rating = number_format($rating, 1, '.', '');

  // constructing an array containing image sources
  $img_srcs = array();
  while ($review = mysqli_fetch_assoc($all_reviews)) {
    $result = get_slideshow($dbc, REVIEW_IMAGES, 'review_id', $review['id']);
    while ($row = mysqli_fetch_assoc($result)) {
      $img_srcs[] = $row['img_src'];
    }
  }

  mysqli_data_seek($all_reviews, 0);
  return [$rating, $num_reviews, $num_by_stars, $img_srcs, $all_reviews];
}

function get_username($dbc, $user_id) {
    $query = "SELECT username FROM ".ACCOUNT_DB." WHERE id = $user_id";
    $result = mysqli_query($dbc, $query);
    $username = mysqli_fetch_assoc($result)['username'];
    return $username;
}

function get_num_votes($dbc) {
  $query = "SELECT review_id, SUM(vote) AS num_votes FROM ".VOTES." GROUP BY review_id";
  $result = mysqli_query($dbc, $query);

  $num_votes = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $num_votes[$row['review_id']] = $row['num_votes'];
  }
  return $num_votes;
}

function get_votes_by($dbc, $user_id) {
  $query = "SELECT review_id, vote FROM ".VOTES." WHERE user_id = $user_id";
  $result = mysqli_query($dbc, $query);

  $votes = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $votes[$row['review_id']] = $row['vote'];
  }
  return $votes;
}
?>
