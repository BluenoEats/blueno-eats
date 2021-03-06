<?php
# Defining folders
define('D_TEMPLATE', 'template' . DIRECTORY_SEPARATOR);

# Databse Connection
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "blueno_eats");
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE) or die('Could not connect because: ' . mysqli_connect_error());

define('DINING_HALL_DB', 'hall_pages');
define('DISH_DB', 'dish_pages');
define('HALL_SLIDESHOW_DB', 'hall_slideshow');
define('DISH_SLIDESHOW_DB', 'dish_slideshow');
define('ACCOUNT_DB', 'accounts');
define('REVIEW_DB', 'reviews');
define('REVIEW_IMAGES', 'review_images');
define('VOTES', 'votes');

# avoid redirection back to some urls
include "avoid_url.php";
session_start();
$_SESSION['prev_page'] = avoid_url($_SERVER['REQUEST_URI'], $_SESSION['prev_page']);
