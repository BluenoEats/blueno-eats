<?php
include "config/setup.php";
include "functions/get_page.php";
include "functions/get_data.php";
# Retrieve dining hall page
$page = get_hall_page($dbc, $_GET['hall']);
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
</head>

<body>
  <?php include D_TEMPLATE . "navigation.php"; ?>

  <h1><?php echo $page['official_name']; ?></h1>

  <?php if (isset($page['id'])) {
    include D_TEMPLATE . "hall_slideshow.php";
  } ?>

  <?php include D_TEMPLATE . "search_bar.php"; ?>

  <?php include D_TEMPLATE . "food_rank.php"; ?>
  
  <?php include D_TEMPLATE . "footer.php"; ?>
</body>

</html>