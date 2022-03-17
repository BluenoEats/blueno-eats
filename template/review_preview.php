<div class="food-body">
  <h2> Reviews</h2>
  <div class="rate">
    <h3 id="rate-header"> User Rating</h3>
    <?php for ($i = 1; $i <= 5; $i++) {
      if ($i <= $rating) { ?>
        <span class="fas fa-star"></span>
      <?php } else { ?>
        <span class="far fa-star"></span>
    <?php }
    } ?>
    <p><?php echo "$rating average based on $num_reviews reviews"; ?>.</p>
    <hr style="border:3px solid #f1f1f1">

    <div class="row">
      <?php for ($i = 5; $i > 0; $i--) {
        $width = ($num_reviews ? $num_by_stars[$i] / $num_reviews * 100 : 0); ?>
        <div class="side">
          <div><?php echo $i; ?> star</div>
        </div>
        <div class="middle">
          <div class="bar-container">
            <div class="bar-<?php echo $i; ?>" id="bar-<?php echo $i; ?>"></div>
            <script type="text/javascript">
              document.getElementById("bar-<?php echo $i; ?>").style.width = "<?php echo $width; ?>%";
            </script>
          </div>
        </div>
        <div class="side right">
          <div><?php echo $num_by_stars[$i]; ?></div>
        </div>
      <?php } ?>
    </div>
  </div>

  <!-- Trigger/Open The Modal -->
  <button id="wr-btn" onclick="openModal('wr-modal')">Write a Review...</button>

  <!-- Write review Modal -->
  <div id="wr-modal" class="modal">
    <div class="modal-content wr-review-modal">
      <span class="close" onclick="closeModal('wr-modal')"><i class="fas fa-times"></i></span>
      <?php if (!isset($_SESSION['user_id'])) { ?>
        <div class="review-sign">
          <h3> Join Blueno Eats to start rating and commenting!</h3>
          <a href="signup.php"><button class="review-signup">Sign up</button></a>
          <p> Already have an account? <a href="login.php">Log in</a></p>
        </div>
      <?php } else if (isset($my_review)) { ?>
        <!-- TODO: style -->
        <h2> You have already post a review! </h2>
        <p> Please delete you last review to submit a new one. </p>
      <?php } else { ?>
        <div class="user-form" style="margin-top:15px">
          <h2> Create a Review for <?php echo $page['name']; ?> </h2>
          <form onsubmit="return validate_rate()" action="functions/submit_review.php" method="post" enctype="multipart/form-data" id="review_form">
            <label>Overall Rating</label>
            <!-- TODO: Hover effect -->
            <div class="user-rate">
              <i class="rating__star far fa-star"></i>
              <i class="rating__star far fa-star"></i>
              <i class="rating__star far fa-star"></i>
              <i class="rating__star far fa-star"></i>
              <i class="rating__star far fa-star"></i>
            </div>
            <script src="scripts/rate.js" type="text/javascript"></script>
            <br>

            <!-- <input type="hidden" id="author" name="author"/> -->
            <input type="hidden" id="dish" name="dish" value="<?php echo $_GET['dish']; ?>" />
            <input type="hidden" id="rating" name="rating" />
            <label for="review-img">Add a photo</label><br>
            <label for="review-img" class="add-photo"><i class="fa fa-plus-square"></i></label>
            <button id="reset-review" type="button" onclick="cancelImg();">Reselect images</button>
            <div id="upload-preview"></div>
            <input type="file" id="review-img" name="review-img[]" accept="image/*" multiple style="display:none" onchange="loadFile(event);">
            <br>
            <label for="review-msg">Add a written review</label>
            <textarea id="review-msg" name="review-msg" placeholder="What did you like or dislike about this dish?"></textarea>

            <input type="checkbox" name="anonymous" value="anonymous"> anonymous <br>

            <input type="submit" value="Submit" id="submit-review">
          </form>
        </div>
        <script src="scripts/review_preview.js" type="text/javascript"></script>
      <?php } ?>
    </div>
  </div>
</div>