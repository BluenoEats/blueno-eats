<?php
$NUM_RECOMMENDATION = 3;

function get_info($dbc, $dish_id)
{
  // get dish name from dish page
  $query = "SELECT name FROM " . DISH_DB . " WHERE id = $dish_id";
  $result = mysqli_query($dbc, $query);
  $name = mysqli_fetch_assoc($result)['name'];

  // get first image from slideshow
  $result = get_slideshow($dbc, DISH_SLIDESHOW_DB, 'dish_id', $dish_id);
  $image = mysqli_num_rows($result) ? mysqli_fetch_assoc($result)['img_src'] : null;

  // return 1.name 2.image
  return [$name, $image];
}

function echo_food_list($dbc, $dish_list)
{
  foreach ($dish_list as $dish) {
    [$name, $image] = get_info($dbc, $dish['dish_id']);
    $rating = number_format($dish['rating'], 1, '.', '');
?>

    <div class="rank-card">
      <img src="<?php echo ($image != null) ? $image : 'img/place2.jpeg'; ?>" alt="img" style="width:100%">
      <h2><i class="fa fa-crown"></i> <i class="fa fa-crown"></i> <i class="fa fa-crown"></i></h2>
      <p class="rank-title"><?php echo $name; ?></p>
      <p>Rating: <?php echo $rating; ?></p>
      <p><button>Check the Reviews</button></p>
    </div>

<?php
  }
}
?>

<h2>Best-rated Food</h2>
<div class="rank">
  <?php
  $query = "SELECT dish_id, SUM(rating)/COUNT(rating) as rating FROM " . REVIEW_DB . " GROUP BY dish_id ORDER BY rating DESC LIMIT $NUM_RECOMMENDATION";
  $result = mysqli_query($dbc, $query);
  $dish_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
  echo_food_list($dbc, $dish_list);
  ?>
</div>

<h2>Worst-rated Food</h2>
<div class="rank">
<?php
$query = "SELECT dish_id, SUM(rating)/COUNT(rating) as rating FROM " . REVIEW_DB . " GROUP BY dish_id ORDER BY rating ASC LIMIT $NUM_RECOMMENDATION";
$result = mysqli_query($dbc, $query);
$dish_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo_food_list($dbc, $dish_list);
?>
</div>