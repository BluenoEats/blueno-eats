<?php
# Defining folders
define('D_TEMPLATE', 'template'.DIRECTORY_SEPARATOR);

# Databse Connection
define("DB_HOST", "localhost");
define("DB_USER", "dev");
define("DB_PASSWORD", "12345");
define("DB_DATABASE", "blueno_eats");
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE) OR die('Could not connect because: '.mysqli_connect_error());

define('DINING_HALL_DB', 'hall_pages');
define('DISH_DB', 'dish_pages');
define('HALL_SLIDESHOW_DB', 'hall_slideshow');
define('DISH_SLIDESHOW_DB', 'dish_slideshow');
define('ACCOUNT_DB', 'accounts');
define('REVIEW_DB', 'reviews');
define('REVIEW_IMAGES', 'review_images');

session_start();
if (!str_contains($_SERVER['REQUEST_URI'], 'login.php')) {
    $_SESSION['prev_page'] = $_SERVER['REQUEST_URI'];
}

// if ($_SERVER['REQUEST_URI'] !== "/websites/bluenoeats.github.io/login.php") {
//     $_SESSION['prev_page'] = $_SERVER['REQUEST_URI'];
// }
?>
