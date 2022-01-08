<?php
$num_dishes = 3;
function echo_food_list($result) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<li><a href="food.php?dish='.$row['id'].'">'.$row['name'].' (rating: '.$row['rating'].')</a></li>'."\n";
  }
}
?>

<div class="rank">
  <div class="flex-item flex-left">
    <h2>Best Food</h2>
    <ol>
      <?php
      $query = "SELECT id, name, rating FROM ".DISH_DB." ORDER BY rating DESC LIMIT $num_dishes";
      $result = mysqli_query($dbc, $query);
      echo_food_list($result);
      ?>
    </ol>
  </div>
  <div class="flex-item flex-right">
  <h2>Worst Food</h2>
    <ol>
      <?php
      $query = "SELECT id, name, rating FROM ".DISH_DB." ORDER BY rating ASC LIMIT $num_dishes";
      $result = mysqli_query($dbc, $query);
      echo_food_list($result);
      ?>
    </ol>
  </div>
</div>
