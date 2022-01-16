<div class="food-body">
   <h2> Reviews</h2>
   <div class="rate">
       <h3 id="rate-header"> User Rating</h3>
       <?php for ($i=1; $i <= 5; $i++) {
         if ($i <= $rating) {
           echo '<span class="fa fa-star checked"></span>';
         } else {
           echo '<span class="fa fa-star"></span>';
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
         <p id="warning"></p>
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
         </div>
         <p id="response">response</p>
         <script type="text/javascript">
         function send_form() {
           const urlSearchParams = new URLSearchParams(window.location.search);
           const params = Object.fromEntries(urlSearchParams.entries());
           var author_id = 33477 // temporary val
           var dish_id = urlSearchParams.get('dish')
           var rating = document.getElementsByClassName("rating__star fas fa-star").length;
           var content = document.getElementById("review-msg").value;

           var xhttp = new XMLHttpRequest();
           // assuming all fields are filled
           xhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
               document.getElementById("response").innerHTML = this.responseText;
             }
           };

           if (rating) {
             document.getElementById("warning").innerHTML = "";
             xhttp.open("GET", "functions/write_review.php?author="+author_id+"&dish="+dish_id+"&rating="+rating+"&review-msg="+content, true);
             xhttp.send();
           } else {
             document.getElementById("warning").innerHTML = "Please rate the dish before submitting.";
           }
           // document.getElementById("response").innerHTML = "write_review.php?author="+author_id+"&dish="+dish_id+"&rating="+rating+"&review-msg="+content;
          }
         </script>
       </div>
    </div>
   </div>

   <div class="food-imgs">
       <div class="food-imgs-row">
           <div class="food-imgs-col">
             <img src="img/place4.jpeg" style="width:100%" onclick="openModal('food-pic-modal');currentSlide(1)" class="hover-shadow cursor">
           </div>
           <div class="food-imgs-col">
             <img src="img/place3.jpeg" style="width:100%" onclick="openModal('food-pic-modal');currentSlide(2)" class="hover-shadow cursor">
           </div>
           <div class="food-imgs-col">
             <img src="img/place2.jpeg" style="width:100%" onclick="openModal('food-pic-modal');currentSlide(3)" class="hover-shadow cursor">
           </div>
           <div class="food-imgs-col">
             <img src="img/placeholding.png" style="width:100%" onclick="openModal('food-pic-modal');currentSlide(4)" class="hover-shadow cursor">
           </div>
       </div>

       <div id="food-pic-modal" class="modal">
         <span class="close" onclick="closeModal('food-pic-modal')">&times;</span>
         <div class=" modal-content">
             <div class="food-imgs-slide">
               <div class="food-imgs-numtext">1 / 4</div>
               <img src="img/place4.jpeg" style="width:100%">
             </div>
             <div class="food-imgs-slide">
               <div class="food-imgs-numtext">2 / 4</div>
               <img src="img/place3.jpeg" style="width:100%">
             </div>
             <div class="food-imgs-slide">
               <div class="food-imgs-numtext">3 / 4</div>
               <img src="img/place2.jpeg" style="width:100%">
             </div>
             <div class="food-imgs-slide">
               <div class="food-imgs-numtext">4 / 4</div>
               <img src="img/placeholding.png" style="width:100%">
             </div>
             <a class="food-imgs-prev" onclick="plusSlides(-1)">&#10094;</a>
             <a class="food-imgs-next" onclick="plusSlides(1)">&#10095;</a>
             <div class="food-imgs-caption-container">
               <p id="caption"></p>
             </div>

             <div class="food-imgs-col">
               <img class="food-imgs-cur cursor" src="img/place4.jpeg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
             </div>
             <div class="food-imgs-col">
               <img class="food-imgs-cur cursor" src="img/place3.jpeg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
             </div>
             <div class="food-imgs-col">
               <img class="food-imgs-cur cursor" src="img/place2.jpeg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
             </div>
             <div class="food-imgs-col">
               <img class="food-imgs-cur cursor" src="img/placeholding.png" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
             </div>
         </div>
       </div>
   </div>
</div>
