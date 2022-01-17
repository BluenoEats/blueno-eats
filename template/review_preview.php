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
        <div class="modal-content">
            <span class="close" onclick="closeModal('wr-modal')">&times;</span>
            <h2> <?php echo $page['name']; ?> </h2>
            <p>Some text in the Modal..</p>
            <!-- TODO: Hover effect -->
            <div class="user-rate">
                <i class="rating__star far fa-star"></i>
                <i class="rating__star far fa-star"></i>
                <i class="rating__star far fa-star"></i>
                <i class="rating__star far fa-star"></i>
                <i class="rating__star far fa-star"></i>
            </div>
            <script src="scripts/rate.js" type="text/javascript"></script>
            <div class="user-form">
                <form>
                    <label for="review-msg">Add a written review</label>
                    <input type="text" id="review-msg" name="review-msg" placeholder="What did you like or dislike about this dish?">

                    <label for="review-img">Add a photo</label>
                    <input type="file" id="review-img" name="review-img" accept="image/*" multiple>

                    <input type="submit" value="Submit" onclick="send_form()">

                    <button type="button" name="button" onclick="send_form()"></button>
                </form>
                <p id="response">response</p>
                <script src="scripts/review-form.js" type="text/javascript"></script>
       </div>
    </div>
   </div>
</div>
