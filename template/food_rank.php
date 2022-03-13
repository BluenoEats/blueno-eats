<script src="https://kit.fontawesome.com/fa6b154dde.js" crossorigin="anonymous"></script>
<?php
$NUM_RECOMMENDATION = 3;

function get_info($dbc, $dish_id)
{
  // get dish name from dish page
  $query = "SELECT name FROM " . DISH_DB . " WHERE id = $dish_id";
  $result = mysqli_query($dbc, $query);
  $name = mysqli_fetch_assoc($result)['name'];

  // get first image from slideshow
  $query = "SELECT * FROM " . DISH_SLIDESHOW_DB . " WHERE dish_id = $dish_id";
  $result = mysqli_query($dbc, $query);
  $image = mysqli_num_rows($result) ? mysqli_fetch_assoc($result)['img_src'] : null;

  // return 1.name 2.image
  return [$name, $image];
}

function echo_food_list($dbc, $dish_list, $symbol)
{
  foreach ($dish_list as $rank=>$dish) {
    [$name, $image] = get_info($dbc, $dish['dish_id']);
    $rating = number_format($dish['rating'], 1, '.', '');
?>

    <div class="rank-card">
      <img src="<?php echo ($image != null) ? $image : 'img/place2.jpeg'; ?>" alt="img">
      <h2><?php for($i = 3; $i > $rank; $i--) {
        echo '<i class="fa fa-' . $symbol . '"></i> ';
      } ?></h2>
      <p class="rank-title"><?php echo $name; ?></p>
      <p>Rating: <?php echo $rating; ?></p>
      <a href="food.php?dish=<?php echo $dish['dish_id']; ?>">Check the Reviews</a>
    </div>

<?php
  }
}
?>

<h1 class="rank-head">Best-rated Food</h1>
<div class="rank">
  <?php
  $query = "SELECT dish_id, SUM(rating)/COUNT(rating) as rating FROM " . REVIEW_DB . " GROUP BY dish_id ORDER BY rating DESC LIMIT $NUM_RECOMMENDATION";
  $result = mysqli_query($dbc, $query);
  $dish_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
  echo_food_list($dbc, $dish_list, 'crown');
  ?>
</div>

<h1 class="rank-head">Worst-rated Food</h1>
<div class="rank">
  <?php
  $query = "SELECT dish_id, SUM(rating)/COUNT(rating) as rating FROM " . REVIEW_DB . " GROUP BY dish_id ORDER BY rating ASC LIMIT $NUM_RECOMMENDATION";
  $result = mysqli_query($dbc, $query);
  $dish_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
  echo_food_list($dbc, $dish_list, 'ghost');
  ?>
</div>