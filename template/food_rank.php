<?php
  $num_dishes = 3;
?>

<div class="rank">
  <div class="flex-item flex-left">
    <h2>Best Food</h2>
    <ol>
      <?php
      $query = "SELECT id, name, rating FROM ".DISH_DB." WHERE id != 0 ORDER BY rating DESC LIMIT $num_dishes";
      $result = mysqli_query($dbc, $query);

      while ($row = mysqli_fetch_assoc($result)) {
        echo '<li><a href="food.php?dish='.$row['id'].'">'.$row['name'].' '.$row['rating'].'</a></li>'."\n";
      }
      ?>
    </ol>
  </div>
  <div class="flex-item flex-right">
  <h2>Worst Food</h2>
    <ol>
      <?php
      $query = "SELECT id, name, rating FROM ".DISH_DB." WHERE id != 0 ORDER BY rating ASC LIMIT $num_dishes";
      $result = mysqli_query($dbc, $query);

      while ($row = mysqli_fetch_assoc($result)) {
        echo '<li><a href="food.php?dish='.$row['id'].'">'.$row['name'].' '.$row['rating'].'</a></li>'."\n";
      }
      ?>
    </ol>
  </div>
</div>
