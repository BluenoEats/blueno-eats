<?php
include "config/setup.php";
include "functions/get_page.php";
include "functions/get_data.php";
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
    <?php include D_TEMPLATE."navigation.php"; ?>

    <h1><?php echo $page['official_name']; ?></h1>
    <h2><?php echo $page['name']; ?></h2>

      <!-- TODO: Dining hall image -->
    <?php include D_TEMPLATE."hall_slideshow.php"; ?>

    <script src="scripts/auto-slide.js" type="text/javascript"></script>

      <!-- TODO: Implement action -->
      <div class="search-bar">
        <form autocomplete="off" action="/action_page.php">
          <div class="autocomplete" style="width:300px;">
            <input id="myInput" type="text" name="search-bar" placeholder="Search for food or Dining hall...">
            <script src="scripts/search.js" type="text/javascript"></script>
          </div>
          <i class="fa fa-search input-icon"></i>
          <input type="submit" value="">
        </form>
      </div>

        <br>

    <?php include D_TEMPLATE."food_rank.php"; ?>

    <?php include D_TEMPLATE."footer.php"; ?>
  </body>

</html>
