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
        <div class="user-comment">
          <p> User Name </p>
            <div class="user-rate">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          <img src="img/place4.jpeg">
          <p class="comment"> Very Good! </p>

          <button class="vote" id="upvote"><i class="fas fa-caret-up"></i></button>
          <button class="vote" id="downvote"><i class="fas fa-caret-down"></i></button>
          <span id="votenum"> 0 </span>
          <script src="scripts/vote.js" type="text/javascript"></script>

          <br>
          <button onclick="openModal('report-modal')" class="report"> Report </button>
          <div id="report-modal" class="modal">
            <div class="modal-content">
              <div class="modal-header">
                <span class="close" onclick="closeModal('report-modal')">&times;</span>
                <h2> Report an issue</h2>
              </div>
              <div class="modal-body">
                  <p> If you find this content inappropriate and think it should be removed from the BluenoEats site, please help us to understand the problem. What is going on with this post? </p>
                  <form>
                    <input type="checkbox" name="report" value="Spam"> It's suspicious or spam <br>
                    <input type="checkbox" name="report" value="Abuse"> It's abusive or harmful<br>
                    <input type="checkbox" name="report" value="Mislead"> It's misleading<br>
                    <input type="checkbox" name="report" value="Suicide"> It expresses intentions of self-harm or suicide<br>
                    <input type="checkbox" name="report" value="Other"> Other<br>
                    <input type="submit" value="Submit">
                  </form>
              </div>
                    <!-- TODO: Show success after submit -->
            </div>
          </div>
        </div>

    <script src="scripts/modal.js" type="text/javascript"></script>
    <?php include D_TEMPLATE."footer.php"; ?>
  </body>

</html>
