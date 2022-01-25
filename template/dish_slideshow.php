<div class="food-item slideshow-container">
  <?php
  $result = get_slideshow($dbc, DISH_SLIDESHOW_DB, 'dish_id', $page['id']);
  $num_rows = mysqli_num_rows($result);
  if ($num_rows > 0) {
    // photos
    while ($row = mysqli_fetch_assoc($result)) { ?>
      <div class="mySlides fade">
        <img src=<?php echo $row['img_src']; ?> class="slide-img">
      </div>
    <?php }

    // arrows
    ?>
    <div class="arrow">
      <div class="arrow-left" onclick="plusDivs(-1)">&#10094;</div>
      <div class="arrow-right" onclick="plusDivs(1)">&#10095;</div>
    </div>

    <!-- dots -->
    <div class="dot-container"> <?php
    for ($i=1; $i <= $num_rows; $i++) { ?>
      <span class="dot" onclick=<?php echo "\"currentDiv($i)\""; ?>></span>
    <?php } ?>
    </div>
    <script src="scripts/auto-slide.js" type="text/javascript"></script>
    <?php
  }
  ?>
</div>
