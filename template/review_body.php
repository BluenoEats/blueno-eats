<?php
function display_review($dbc, $review, $user_id) {
  $original_votes = $review['num_votes'] - $review['vote']; ?>
  <div class="user-comment" id="<?php echo $review['id']; ?>">
    <p class="username">Username: <?php echo ($review['anonymous'] ? "Anonymous" : get_username($dbc, $review['author_id'])); ?></p>

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
      <button
        class="vote upvote<?php if ($review['vote'] == 1) echo " active"; ?>">
        <i class="fas fa-caret-up"></i>
      </button>
      <span class="votenum"><?php echo $review['num_votes']; ?></span>
      <button
        class="vote downvote<?php if ($review['vote'] == -1) echo " active"; ?>">
        <i class="fas fa-caret-down"></i>
      </button>

      <div class="ellipsis">
        <i class="ellipsis-btn fas fa-ellipsis-h" onclick="ellipsis(<?php echo $review['id']; ?>)"></i>
        <div class="ellipsis-content" id="ellipsis-content-<?php echo $review['id']; ?>">
          <?php if (isset($user_id) && $user_id == $review['author_id']) { ?>
          <button onclick="delete_review(<?php echo $review['id']; ?>)"> Delete </button>
          <?php } else { ?>
          <button onclick="openModal('report-modal')"> Report </button>
          <?php } ?>
        </div>
      </div>
    </div>

    <div id="report-modal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="closeModal('report-modal')"><i class="fas fa-times"></i></span>
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
    $counter = 0;
    while ($row = mysqli_fetch_assoc($result)) {
      $counter++; ?>
      <!-- TODO: Fix style -->
      <img src="<?php echo $row['img_src']; ?>" class="user-img" id="img-<?php echo $counter; ?>" onclick="change_img('<?php echo $row['img_src']; ?>'); openModal('comment_modal')">
      <script text="JavaScript">
        function change_img(img_src) {
          document.getElementById("comment-modal-img").src = img_src;
        }
      </script>
    <?php } ?>

      <!-- The Modal -->
      <div id="comment_modal" class="modal">
        <span class="close" onclick="closeModal('comment_modal')"><i class="fas fa-times"></i></span>
        <img id="comment-modal-img" class="zoompic">
      </div>
    </div>
  </div>
<?php } ?>
