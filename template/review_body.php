<?php
function display_review($dbc, $author_id, $rating, $content) {
  $username = get_username($dbc, $author_id);
  // $username = $author_id; ?>
  <div class="user-comment">
    <p>Username: <?php echo $username; ?></p>
      <div class="user-rate">
        <?php for ($i=1; $i <= 5; $i++) {
          if ($i <= $rating) {
            echo '<i class="fas fa-star"></i>';
          } else {
            echo '<i class="far fa-star"></i>';
          }
        } ?>
      </div>
    <!-- TODO: get actual image from database -->
    <img src="img/place4.jpeg">
    <p class="comment"><?php echo $content; ?></p>

    <button class="vote" id="upvote"><i class="fas fa-caret-up"></i></button>
    <button class="vote" id="downvote"><i class="fas fa-caret-down"></i></button>
    <span id="votenum"> 0 </span>
    <script src="scripts/vote.js" type="text/javascript"></script>

    <br>
    <button onclick="openModal('report-modal')" class="report"> Report </button>
    <div id="report-modal" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close" onclick="closeModal('report-modal')">&times;</span>
          <h2> Report an issue</h2>
        </div>
        <div class="modal-body">
            <p> If you find this content inappropriate and think it should be removed from the BluenoEats site, please help us to understand the problem. What is going on with this post? </p>
            <form>
              <input type="checkbox" name="report" value="Spam"> It's suspicious or spam <br>
              <input type="checkbox" name="report" value="Abuse"> It's abusive or harmful<br>
              <input type="checkbox" name="report" value="Mislead"> It's misleading<br>
              <input type="checkbox" name="report" value="Suicide"> It expresses intentions of self-harm or suicide<br>
              <input type="checkbox" name="report" value="Other"> Other<br>
              <input type="submit" value="Submit">
            </form>
        </div>
        <!-- TODO: Show success after submit -->
      </div>
    </div>
  </div>
<?php } ?>
