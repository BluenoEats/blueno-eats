<?php include "config/setup.php"; ?>

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

    <h1> Blueno Eats</h1>
    <p class="brief-content"> Intro to website intro to website intro to website</p>

    <!-- TODO: Implement action -->

    <form autocomplete="off" action="/action_page.php">
      <div class="autocomplete" style="width:300px;">
        <input id="myInput" type="text" name="search-bar" placeholder="Search for food or Dining hall...">
        <script src="scripts/search.js" type="text/javascript"></script>
      </div>
      <input type="submit" value="">
    </form>

    <!-- TODO: Cartoon image -->
    <img src="img/placeholding.png" class="cartoon" alt="Cartoon image">

    <div class="additional-content">
      <p> Want to learn more about Dining Services at Brown?
        <a href="https://dining.brown.edu/" target="_blank">Click here...</a>
      </p>
    </div>

    <?php include D_TEMPLATE."food_rank.php"; ?>
    
    <?php include D_TEMPLATE."footer.php"; ?>
  </body>

</html>
