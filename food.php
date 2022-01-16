<?php
include "config/setup.php";
include "functions/get_page.php";
include "functions/get_data.php";
# Retrieve food page
$page = get_dish_page($dbc, $_GET['dish']);
[$rating, $num_reviews, $num_by_stars, $reviews] = get_reviews($dbc, $_GET['dish']);
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

        <script src="scripts/manual-slide.js" type="text/javascript"></script>
        <script src="scripts/modal.js" type="text/javascript"></script>
    </head>

    <body>
      <?php include D_TEMPLATE."navigation.php" ?>

      <div class="food-body food">
          <div class="food-item food-left">
              <h1 id="food-name"><?php echo $page['name']; ?></h1>
          </div>
          <?php include D_TEMPLATE."dish_slideshow.php"; ?>
      </div>

      <?php if (isset($page['content'])) {
        // echo '<p class="food-intro">'.$page['content'].'</p>';
      }?>
      <p class="food-intro"><?php echo $page['content']; ?></p>

      <?php include D_TEMPLATE."review_preview.php"; ?>
      <?php include D_TEMPLATE."review_slideshow.php"; ?>

      <!-- Trigger/Open The Modal -->
      <div class="food-body">
      <button id="wr-btn" onclick="openModal('wr-modal')">Write a Review...</button>
      </div>

      <!-- Write review Modal -->
      <div id="wr-modal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <span class="close" onclick="closeModal('wr-modal')">&times;</span>
            <h2> <?php echo $page['name']; ?> </h2>
          </div>
          <div class="modal-body">
            <p>Some text in the Modal..</p>
       <!-- TODO: Hover effect -->
            <div class="user-rate">
              <i class="rating__star far fa-star"></i>
              <i class="rating__star far fa-star"></i>
              <i class="rating__star far fa-star"></i>
              <i class="rating__star far fa-star"></i>
              <i class="rating__star far fa-star"></i>
            </div>
            <script src="scripts/rate.js" type="text/javascript"></script>
            <div class="user-form">
              <form>
                  <label for="review-msg">Add a written review</label>
                  <input type="text" id="review-msg" name="review-msg" placeholder="What did you like or dislike about this dish?">

                  <label for="review-img">Add a photo</label>
                  <input type="file" id="review-img" name="review-img" accept="image/*" multiple>

                  <input type="submit" value="Submit" onclick="send_form()">

                  <button type="button" name="button" onclick="send_form()"></button>
              </form>
              <script src="scripts/review-form.js" type="text/javascript"></script>
            </div>
          </div>
       </div>
      </div>

      <div class="food-body user-comment">
      <p> See all images </p>

      <?php
      include D_TEMPLATE.'review.php';
      while ($review = mysqli_fetch_assoc($reviews)) {
        display_review($dbc, $review['author_id'], $review['rating'], $review['content']);
      }?>

      <script src="scripts/modal.js" type="text/javascript"></script>
      <?php include D_TEMPLATE."footer.php"; ?>
    </body>

</html>
