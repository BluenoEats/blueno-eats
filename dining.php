<?php
include "config/setup.php";
include "functions/get_page.php";
// include "functions/get_data.php";
# Retrieve dining hall page
$page = get_hall_page($dbc, $_GET['hall']);
// $slideshow = get_hall_slideshow($dbc, $page['id']);
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

        <script src="scripts/auto-slide.js" type="text/javascript"></script>
        <script src="scripts/manual-slide.js" type="text/javascript"></script>
        <script src="scripts/modal.js" type="text/javascript"></script>
    </head>

    <body>
      <?php include D_TEMPLATE."navigation.php" ?>

      <h1><?php echo $page['official_name']; ?></h1>
      <h2><?php echo $page['name']; ?></h2>

    <!-- TODO: Dining hall image -->
      <div class="slideshow-container">
        <?php
        if (isset($page['id'])) {
          $query = "SELECT * FROM ".HALL_SLIDESHOW_DB." WHERE hall_id = ".$page['id'];
          $result = mysqli_query($dbc, $query);
          $num_rows = mysqli_num_rows($result);
          if ($num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo '
              <div class="mySlides fade">
                <img src="'.$row['img_src'].'" class="slide-img">
                <div class="text">'.$row['assoc_text'].'</div>
              </div>
              ';
            }

            echo '
            <div class="arrow">
              <div class="arrow-left" onclick="plusDivs(-1)">&#10094;</div>
              <div class="arrow-right" onclick="plusDivs(1)">&#10095;</div>
            </div>

            <div class="dot-container">';

            for ($i=1; $i <= $num_rows; $i++) {
              echo '<span class="dot" onclick="currentDiv('.$i.')"></span>';
            }

            echo '
            </div>';
          }
        } else {
          echo "The page doesn't exist";
        }
        ?>
      </div>

    <!-- <div class="slideshow-container">

        <div class="mySlides fade">
          <img src="img/placeholding.png" class="slide-img">
          <div class="text">The changes of the images may be automatic and at regular intervals or they may be manually controlled by a presenter or the viewer.
            </div>
        </div>

        <div class="mySlides fade">
          <img src="img/place2.jpeg" class="slide-img">
          <div class="text">Today in this blog I'll share the image slideshow effect using javascript. In this program, there are five images, and these images automatically change after a certain period. I used JavaScript to change the image after a certain time interval.
          </div>
        </div>

        <div class="mySlides fade">
          <img src="img/place3.jpeg" class="slide-img">
          <div class="text">You can copy the codes from the given boxes or download the code files from the given link but I recommend you to download the source code files instead of copying codes because you won't get images if you copy the codes
          </div>
        </div>

        <div class="arrow">
          <div class="arrow-left" onclick="plusDivs(-1)">&#10094;</div>
          <div class="arrow-right" onclick="plusDivs(1)">&#10095;</div>
        </div>

        <div class="dot-container">
          <span class="dot" onclick="currentDiv(1)"></span>
          <span class="dot" onclick="currentDiv(2)"></span>
          <span class="dot" onclick="currentDiv(3)"></span>
      </div>
    </div> -->

      <script src="scripts/auto-slide.js" type="text/javascript"></script>

    <!-- TODO: Implement action -->
        <form autocomplete="off" action="/action_page.php">
            <div class="autocomplete" style="width:300px;">
                <input id="myInput" type="text" name="search-bar" placeholder="Search for food or Dining hall...">
                <script src="scripts/search.js" type="text/javascript"></script>
            </div>
            <input type="submit">
        </form>

        <br>

    <?php include D_TEMPLATE."food_rank.php"; ?>

    <?php include D_TEMPLATE."footer.php"; ?>
  </body>

</html>
