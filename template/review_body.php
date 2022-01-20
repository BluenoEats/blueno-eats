<?php
function display_review($dbc, $review) {
  $username = get_username($dbc, $review['author_id']); ?>
  <div class="user-comment">
    <p class="username">Username: <?php echo $username; ?></p>

    <div class="user-rate">
      <?php for ($i=1; $i <= 5; $i++) {
        if ($i <= $review['rating']) {
          echo '<i class="fas fa-star"></i>';
        } else {
          echo '<i class="far fa-star"></i>';
        }
      } ?>
    </div>

    <p class="comment"><?php echo $review['content']; ?></p>

    <div class="comment-control">
      <button class="vote" id="upvote"><i class="fas fa-caret-up"></i></button>
      <span id="votenum"> 0 </span>
      <button class="vote" id="downvote"><i class="fas fa-caret-down"></i></button>
      <script src="scripts/vote.js" type="text/javascript"></script>
      <button onclick="openModal('report-modal')" class="report"> Report </button>
    </div>

    <div id="report-modal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="closeModal('report-modal')">&times;</span>
        <h2> Report an issue</h2>
          <p> If you find this content inappropriate and think it should be removed from the BluenoEats site, please help us to understand the problem. What is going on with this post? </p>
          <form class="user-form">
            <input type="checkbox" name="report" value="Spam"> It's suspicious or spam <br>
            <input type="checkbox" name="report" value="Abuse"> It's abusive or harmful<br>
            <input type="checkbox" name="report" value="Mislead"> It's misleading<br>
            <input type="checkbox" name="report" value="Suicide"> It expresses intentions of self-harm or suicide<br>
            <input type="checkbox" name="report" value="Other"> Other<br>
            <input type="submit" value="Submit">
          </form>
        <!-- TODO: Show success after submit -->
      </div>
    </div>

    <div class="user-img-container">
    <?php
    $result = get_slideshow($dbc, REVIEW_IMAGES, 'review_id', $review['id']);
    $num_rows = mysqli_num_rows($result);
    while ($row = mysqli_fetch_assoc($result)) { ?>
      <!-- TODO: Fix style -->
      <img src="<?php echo $row['img_src']; ?>" class="user-img" id = "<?php echo $row['img_src']; ?>" onclick="openModal('zoom')" style="width:200px;height:150px;">

      <!-- The Modal -->
      <div id="zoom" class="modal">
          <span class="close" onclick="closeModal('zoom')">&times;</span>
          <img src="<?php echo $row['img_src']; ?>" id = "<?php echo $row['img_src']; ?>">
          <!-- Arrows not working -->
          <div class="arrow">
              <a class="food-imgs-prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="food-imgs-next" onclick="plusSlides(1)">&#10095;</a>
          </div>
    </div>
    <?php } ?>
    </div>
  </div>
<?php } ?>
