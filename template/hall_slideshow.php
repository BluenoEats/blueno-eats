<div class="slideshow-container">
  <?php
  if (isset($page['id'])) {
    $result = get_slideshow($dbc, HALL_SLIDESHOW_DB, 'hall_id', $page['id']);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows > 0) {
      // photos
      while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="mySlides fade">
          <img src=<?php echo $row['img_src']; ?> class="slide-img">
          <div class="text"><?php echo $row['assoc_text']; ?></div>
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
      <?php
    }
  } else {
    echo "The page doesn't exist";
  }
  ?>
</div>

<!-- <div class="slideshow-container">

    <div class="mySlides fade">
      <img src="img/placeholding.png" class="slide-img">
      <div class="text">The changes of the images may be automatic and at regular intervals or they may be manually controlled by a presenter or the viewer.
      </div>
    </div>

    <div class="mySlides fade">
      <img src="img/place2.jpeg" class="slide-img">
      <div class="text">Today in this blog I'll share the image slideshow effect using javascript. In this program, there are five images, and these images automatically change after a certain period. I used JavaScript to change the image after a certain time interval.
      </div>
    </div>

    <div class="mySlides fade">
      <img src="img/place3.jpeg" class="slide-img">
      <div class="text">You can copy the codes from the given boxes or download the code files from the given link but I recommend you to download the source code files instead of copying codes because you won't get images if you copy the codes
      </div>
    </div>

    <div class="arrow">
      <div class="arrow-left" onclick="plusDivs(-1)">&#10094;</div>
      <div class="arrow-right" onclick="plusDivs(1)">&#10095;</div>
    </div>

    <div class="dot-container">
      <span class="dot" onclick="currentDiv(1)"></span>
      <span class="dot" onclick="currentDiv(2)"></span>
      <span class="dot" onclick="currentDiv(3)"></span>
  </div>

</div> -->
