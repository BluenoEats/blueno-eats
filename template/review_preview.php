<div class="review">
   <h2> Reviews</h2>
   <div class="rate">
       <h3 id="rate-header"> User Rating</h3>
       <?php for ($i=1; $i <= 5; $i++) {
         if ($i < $page['rating']) {
           echo '<span class="fa fa-star checked"></span>';
         } else {
           echo '<span class="fa fa-star"></span>';
         }
       } ?>
       <?php echo '<p>'.$page['rating'].' average based on '.$page['num_reviews'].' reviews.</p>'; ?>
       <hr style="border:3px solid #f1f1f1">

       <div class="row">
         <?php for ($i=5; $i > 0; $i--) { ?>
           <div class="side">
               <div><?php echo $i; ?> star</div>
           </div>
           <div class="middle">
               <div class="bar-container">
               <div class=<?php echo "\"bar-$i\""; ?>></div>
               </div>
           </div>
           <div class="side right">
               <div><?php echo $page[$i.'_star']; ?></div>
           </div>
         <?php } ?>

        <!-- Trigger/Open The Modal -->
        <button id="wr-btn" onclick="openModal('wr-modal')">Write a Review...</button>
        <div id="wr-modal" class="modal">
            <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="closeModal('wr-modal')">&times;</span>
                <h2> <?php echo $page['name']; ?> </h2>
            </div>
            <div class="modal-body">
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

                    <input type="submit" value="Submit">
                </form>
                </div>
            </div>  
        </div>
        </div>

       <!-- <div class="side">
           <div>5 star</div>
       </div>
       <div class="middle">
           <div class="bar-container">
           <div class="bar-5"></div>
           </div>
       </div>
       <div class="side right">
           <div>150</div>
       </div>

       <div class="side">
           <div>4 star</div>
       </div>
       <div class="middle">
           <div class="bar-container">
           <div class="bar-4"></div>
           </div>
       </div>
       <div class="side right">
           <div>63</div>
       </div>
       <div class="side">
           <div>3 star</div>
       </div>
       <div class="middle">
           <div class="bar-container">
           <div class="bar-3"></div>
           </div>
       </div>
       <div class="side right">
           <div>15</div>
       </div>
       <div class="side">
           <div>2 star</div>
       </div>
       <div class="middle">
           <div class="bar-container">
           <div class="bar-2"></div>
           </div>
       </div>
       <div class="side right">
           <div>6</div>
       </div>
       <div class="side">
           <div>1 star</div>
       </div>
       <div class="middle">
           <div class="bar-container">
           <div class="bar-1"></div>
           </div>
       </div>
       <div class="side right">
           <div>20</div>
       </div> -->
       </div>
   </div>
</div>
