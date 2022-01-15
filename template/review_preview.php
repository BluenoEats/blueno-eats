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
         <?php for ($i=5; $i > 0; $i--) {
           $width = ($page['num_reviews'] ? $page[$i.'_star']/$page['num_reviews']*100 : 0); ?>
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
               <div><?php echo $page[$i.'_star']; ?></div>
           </div>
         <?php } ?>
       </div>
   </div>
</div>
