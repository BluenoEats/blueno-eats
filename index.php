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
</head>

<body>
  <?php include D_TEMPLATE . "navigation.php" ?>

  <img src="img/Blueno_Logo.png" class="logo"></img>
  <p class="brief-content"> Intro to website intro to website intro to website</p>
  <?php include D_TEMPLATE . "search_bar.php"; ?>

  <!-- TODO: Cartoon image -->
  <div class="cartoon"></div>

  <?php include D_TEMPLATE . "food_rank.php"; ?>
  <?php include D_TEMPLATE . "footer.php"; ?>
</body>

</html>