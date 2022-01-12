<?php
include "config/setup.php";
include "functions/get_page.php";
include "functions/get_data.php";
# Retrieve food page
$page = get_dish_page($dbc, $_GET['dish']);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Blueno Eats Website </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="styles/main.css" rel="stylesheet" type="text/css">
        <link href="styles/navigation.css" rel="stylesheet" type="text/css">
        <link href="styles/info.css" rel="stylesheet" type="text/css">
        <link href="styles/ranking.css" rel="stylesheet" type="text/css">
        <link href="styles/search.css" rel="stylesheet" type="text/css">
        <link href="styles/slideshow.css" rel="stylesheet" type="text/css">
        <link href="styles/food.css" rel="stylesheet" type="text/css">
        <link href="styles/modal.css" rel="stylesheet" type="text/css">

        <script src="scripts/auto-slide.js" type="text/javascript"></script>
        <script src="scripts/manual-slide.js" type="text/javascript"></script>
        <script src="scripts/modal.js" type="text/javascript"></script>
    </head>

    <body>
      <?php include D_TEMPLATE."navigation.php" ?>

      <div class="food">
          <div class="food-item food-left">
              <h1 id="food-name"><?php echo $page['name']; ?></h1>
          </div>
          <?php include D_TEMPLATE."dish_slideshow.php"; ?>
      </div>

      <p class="food-intro"><?php echo $page['content']; ?></p>

      <?php include D_TEMPLATE."review_preview.php"; ?>

      <!-- Trigger/Open The Modal -->
      <button id="wr-btn" onclick="openModal('wr-modal')">Write a Review...</button>

      <!-- The Modal -->
      <div id="wr-modal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close" onclick="closeModal('wr-modal')">&times;</span>
        <p>Some text in the Modal..</p>
      </div>

      </div>

      <div class="food-imgs">
          <div class="food-imgs-row">
              <div class="food-imgs-col">
                <img src="img/place4.jpeg" style="width:100%" onclick="openModal('food-pic-modal');currentSlide(1)" class="hover-shadow cursor">
              </div>
              <div class="food-imgs-col">
                <img src="img/place3.jpeg" style="width:100%" onclick="openModal('food-pic-modal');currentSlide(2)" class="hover-shadow cursor">
              </div>
              <div class="food-imgs-col">
                <img src="img/place2.jpeg" style="width:100%" onclick="openModal('food-pic-modal');currentSlide(3)" class="hover-shadow cursor">
              </div>
              <div class="food-imgs-col">
                <img src="img/placeholding.png" style="width:100%" onclick="openModal('food-pic-modal');currentSlide(4)" class="hover-shadow cursor">
              </div>
          </div>

          <div id="food-pic-modal" class="modal">
            <span class="close" onclick="closeModal('food-pic-modal')">&times;</span>
            <div class=" modal-content">
                <div class="food-imgs-slide">
                  <div class="food-imgs-numtext">1 / 4</div>
                  <img src="img/place4.jpeg" style="width:100%">
                </div>
                <div class="food-imgs-slide">
                  <div class="food-imgs-numtext">2 / 4</div>
                  <img src="img/place3.jpeg" style="width:100%">
                </div>
                <div class="food-imgs-slide">
                  <div class="food-imgs-numtext">3 / 4</div>
                  <img src="img/place2.jpeg" style="width:100%">
                </div>
                <div class="food-imgs-slide">
                  <div class="food-imgs-numtext">4 / 4</div>
                  <img src="img/placeholding.png" style="width:100%">
                </div>
                <a class="food-imgs-prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="food-imgs-next" onclick="plusSlides(1)">&#10095;</a>
                <div class="food-imgs-caption-container">
                  <p id="caption"></p>
                </div>

                <div class="food-imgs-col">
                  <img class="food-imgs-cur cursor" src="img/place4.jpeg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
                </div>
                <div class="food-imgs-col">
                  <img class="food-imgs-cur cursor" src="img/place3.jpeg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
                </div>
                <div class="food-imgs-col">
                  <img class="food-imgs-cur cursor" src="img/place2.jpeg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                </div>
                <div class="food-imgs-col">
                  <img class="food-imgs-cur cursor" src="img/placeholding.png" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                </div>
            </div>
          </div>
      </div>
      <script src="scripts/modal.js" type="text/javascript"></script>



    <?php include D_TEMPLATE."footer.php"; ?>
  </body>

</html>
