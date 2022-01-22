<?php
include "config/setup.php";
include "functions/get_page.php";
include "functions/get_data.php";
# Retrieve food page
$page = get_dish_page($dbc, $_GET['dish']);
[$rating, $num_reviews, $num_by_stars, $reviews] = get_reviews($dbc, $_GET['dish']);

session_start();
$_SESSION['dish'] = $_GET['dish'];
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

        <script src="scripts/manual-slide.js" type="text/javascript"></script>
        <script src="scripts/modal.js" type="text/javascript"></script>
        <script src="scripts/array-slide.js" type="text/javascript"></script>
    </head>

    <body>
      <?php include D_TEMPLATE."navigation.php" ?>
      
      <?php if (isset($page['id'])) { ?>
      <div class="food-body food">
          <div class="food-item food-left">
              <h1 id="food-name"><?php echo $page['name']; ?></h1>
          </div>
          <?php include D_TEMPLATE."dish_slideshow.php"; ?>
      </div>
      
      <p class="food-intro food-body"><?php echo $page['content']; ?></p>

      <?php include D_TEMPLATE."review_preview.php"; ?>
      <?php include D_TEMPLATE."review_slideshow.php"; ?>

      <div class="food-body">
      <?php
      include D_TEMPLATE.'review_body.php';
      while ($review = mysqli_fetch_assoc($reviews)) {
        if (!empty($review['content'])) {
          display_review($dbc, $review);
        }
      }?>
      </div>

      <?php } else { ?>
      <h1> The page doesn't exist.</h1>
      <?php } ?>

      <?php include D_TEMPLATE."footer.php"; ?>
    </body>

</html>
