<?php
include "../config/setup.php";
echo vote($dbc, $_SESSION['user_id'], $_POST['review_id'], $_POST['vote']);

function vote($dbc, $user_id, $review_id, $vote) {
  if ($vote != '1' && $vote != '-1') {
    // false
    return 0;
  }

  $query = "INSERT INTO ".VOTES." (user_id, review_id, vote)
  VALUES ($user_id, $review_id, $vote) ON DUPLICATE KEY UPDATE vote=$vote";
  $success = mysqli_query($dbc, $query);

  return $success;
}
?>
