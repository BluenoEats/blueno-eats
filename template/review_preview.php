<div class="food-body">
  <h2> Reviews</h2>
  <div class="rate">
    <h3 id="rate-header"> User Rating</h3>
    <?php for ($i=1; $i <= 5; $i++) {
       if ($i <= $rating) {
         echo '<span class="fas fa-star"></span>';
       } else {
         echo '<span class="far fa-star"></span>';
       }
    } ?>
    <?php echo "<p>$rating average based on $num_reviews reviews.</p>"; ?>
    <hr style="border:3px solid #f1f1f1">

    <div class="row">
     <?php for ($i=5; $i > 0; $i--) {
       $width = ($num_reviews ? $num_by_stars[$i]/$num_reviews*100 : 0); ?>
       <div class="side">
           <div><?php echo $i; ?> star</div>
       </div>
       <div class="middle">
           <div class="bar-container">
           <div class="bar-<?php echo $i; ?>" id="bar-<?php echo $i; ?>"></div>
           <script type="text/javascript">
              document.getElementById("bar-<?php echo $i; ?>").style.width="<?php echo $width; ?>%";
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
      <span class="close" onclick="closeModal('wr-modal')">&times;</span>
      <h2> Create a Review for <?php echo $page['name']; ?> </h2>
      <div class="user-form" style="margin-top:15px">
        <form action="submit_review.php" method="post" enctype="multipart/form-data" id="review_form">
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
            
            <input type="hidden" id="author" name="author" value="placeholder" />
            <input type="hidden" id="dish" name="dish" value="<?php echo $_GET['dish']; ?>" />
            <input type="hidden" id="rating" name="rating" value="0" />

            <label for="review-img">Add a photo</label>
            <br>
            <!-- <button type="button" class="add-photo" onclick="document.getElementById('review-img').click()"><i class="far fa-plus-square"></i></button>
             -->
            <label for="review-img" class="add-photo"><i class="fa fa-plus-square"></i></label>
            <input type="file" id="review-img" name="review-img[]" accept="image/*" multiple style="display:none">
            <br>      

            <label for="review-msg">Add a written review</label>
            <textarea id="review-msg" name="review-msg" placeholder="What did you like or dislike about this dish?"></textarea>

            <input type="submit" value="Submit" onclick="set_post_vars()">
        </form>
        <script type="text/javascript">
          function set_post_vars() {
            var user_id = 12421; // temporary; wait for cookies to work
            var rating = document.getElementsByClassName("rating__star fas fa-star").length;
            document.getElementById("author").value = user_id;
            document.getElementById("rating").value = rating;
          }
        </script>
        <!-- <script src="scripts/review-form.js" type="text/javascript"></script> -->
      </div>
    </div>
  </div>
</div>
