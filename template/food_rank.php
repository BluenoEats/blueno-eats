<?php
$num_dishes = 3;
function echo_food_list($result) {
  while ($row = mysqli_fetch_assoc($result)) { ?>
    <li><a href="food.php?dish=<?php echo $row['id']; ?>"><?php echo $row['name']; ?> (rating: <?php echo $row['rating']; ?>)</a></li>
  <?php }
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
