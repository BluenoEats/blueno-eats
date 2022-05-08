<?php
include "config/setup.php";
include "functions/get_page.php";
include "functions/get_data.php";
# Retrieve food page
$page = get_dish_page($dbc, $_GET['dish']);
[$rating, $num_reviews, $num_by_stars, $img_srcs, $reviews] = get_reviews($dbc, $_GET['dish']);
$num_images = count($img_srcs);
$num_votes = get_num_votes($dbc);

# get votes by the current user
if (isset($_SESSION['user_id'])) {
  $votes = get_votes_by($dbc, $_SESSION['user_id']);
}

# assign votes to each 
foreach ($reviews as $key => $review) {
  $reviews[$key]['num_votes'] = isset($num_votes[$review['id']]) ? $num_votes[$review['id']] : 0;
  $reviews[$key]['vote'] = isset($votes[$review['id']]) ? $votes[$review['id']] : 0;
}

# sort reviews by num_votes
usort($reviews, function ($a, $b) {
  return - $a["num_votes"] + $b["num_votes"];
});

# put the current user's review first
if (isset($_SESSION['user_id'])) {
  foreach ($reviews as $key => $review) {
    if ($review['author_id'] == $_SESSION['user_id']) {
      $my_review = $review;
      unset($reviews[$key]);
      array_unshift($reviews , $review);
    }
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title> Blueno Eats Website </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/fa6b154dde.js" crossorigin="anonymous"></script>
  <link href="styles/main.css" rel="stylesheet" type="text/css">
  <link href="styles/navigation.css" rel="stylesheet" type="text/css">
  <link href="styles/slideshow.css" rel="stylesheet" type="text/css">
  <link href="styles/food.css" rel="stylesheet" type="text/css">
  <link href="styles/modal.css" rel="stylesheet" type="text/css">
  <link href="styles/form.css" rel="stylesheet" type="text/css">
  <link href="styles/comment.css" rel="stylesheet" type="text/css">
  <link href="styles/food-img.css" rel="stylesheet" type="text/css">
  <link href="styles/rate.css" rel="stylesheet" type="text/css">

  <script src="scripts/modal.js" type="text/javascript"></script>
  <script>
    var images = <?php echo json_encode($img_srcs); ?>;
    var num_slides = <?php echo $num_images; ?>;
  </script>
</head>

<body>
  <?php include D_TEMPLATE . "navigation.php" ?>

  <?php if (isset($page['id'])) { ?>
    <div class="food-body">
        <h1><?php echo $page['name']; ?></h1>
      <?php include D_TEMPLATE . "dish_slideshow.php"; ?>
    </div>

    <?php include D_TEMPLATE . "review_preview.php"; ?>
    <?php if ($num_images) {
      include D_TEMPLATE . "review_slideshow.php";
    } ?>

    <div class="food-body">
      <?php 
      include D_TEMPLATE . 'review_body.php';
      foreach ($reviews as $review) {
        if (!empty($review['content']) || $review['author_id'] == $_SESSION['user_id']) {
          display_review($dbc, $review, $_SESSION['user_id']);
        }
      }
      ?>
    </div>
    <script src="scripts/vote.js" type="text/javascript"></script>
    <script src="scripts/manage_review_images.js" type="text/javascript"></script>
    <script src="scripts/review_manage.js" type="text/javascript"></script>

  <?php } else { ?>
    <h1> The page doesn't exist.</h1>
  <?php } ?>

  <?php include D_TEMPLATE . "footer.php"; ?>
</body>

</html>