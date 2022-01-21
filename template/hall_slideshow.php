<div class="slideshow-container">
  <?php
  $result = get_slideshow($dbc, HALL_SLIDESHOW_DB, 'hall_id', $page['id']);
  $num_rows = mysqli_num_rows($result);
  if ($num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) { ?>
    <!-- photos -->
    <div class="mySlides fade">
      <img src=<?php echo $row['img_src']; ?> class="slide-img">
      <div class="text"><?php echo $row['assoc_text']; ?></div>
    </div>
    <?php } ?>

    <!-- arrows -->
    <div class="arrow">
      <div class="arrow-left" onclick="plusDivs(-1)">&#10094;</div>
      <div class="arrow-right" onclick="plusDivs(1)">&#10095;</div>
    </div>

    <!-- dots -->
    <div class="dot-container">
    <?php for ($i=1; $i <= $num_rows; $i++) { ?>
      <span class="dot" onclick=<?php echo "\"currentDiv($i)\""; ?>></span>
    <?php } ?>
    </div>
  <?php } ?>
</div>

<script src="scripts/auto-slide.js" type="text/javascript"></script>