<?php
include "config/setup.php";
include "functions/get_data.php";
[$rating, $num_reviews, $num_by_stars, $reviews] = get_reviews($dbc, $_GET['dish']);
?>

<!DOCTYPE html>
<html>
    <body>
        <h1>Hello World</h1>
        <p><?php echo 'rating: '.$rating.'; num_reviews: '.$num_reviews; ?></p>
        <?php for ($i=1; $i <= 5; $i++) {
          echo "<p>$i stars: ".$num_by_stars[$i]."</p>";
        }?>
    </body>
</html>
