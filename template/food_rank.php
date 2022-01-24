<?php
$num_dishes = 5;

function get_dish_name($dbc, $dish_id) {
  $query = "SELECT name FROM ".DISH_DB." WHERE id = $dish_id";
  $result = mysqli_query($dbc, $query);
  $page = mysqli_fetch_assoc($result);

  return $page['name'];
}

function echo_food_list($dbc, $result) {
  while ($row = mysqli_fetch_assoc($result)) { 
    $dish_id = $row['dish_id'];
    $dish_name = get_dish_name($dbc, $dish_id);
    $rating = number_format($row['rating'], 1, '.', '');
    ?>
    <li><a href="food.php?dish=<?php echo $dish_id; ?>">
      <?php echo $dish_name ?> (rating: <?php echo $rating; ?>)
    </a></li>
  <?php }
}
?>

<div class="rank">
  <div class="flex-item flex-left">
    <h2>Best-rated Food</h2>
    <ol>
      <?php
      $query = "SELECT dish_id, SUM(rating)/COUNT(rating) as rating FROM ".REVIEW_DB." GROUP BY dish_id ORDER BY rating DESC LIMIT $num_dishes";
      $result = mysqli_query($dbc, $query);
      echo_food_list($dbc, $result);
      ?>
    </ol>
  </div>
  
  <div class="flex-item flex-right">
    <h2>Worst-rated Food</h2>
    <ol>
      <?php
      $query = "SELECT dish_id, SUM(rating)/COUNT(rating) as rating FROM ".REVIEW_DB." GROUP BY dish_id ORDER BY rating ASC LIMIT $num_dishes";
      $result = mysqli_query($dbc, $query);
      echo_food_list($dbc, $result);
      ?>
    </ol>
  </div>
</div>
