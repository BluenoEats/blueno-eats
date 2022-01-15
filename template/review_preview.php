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
