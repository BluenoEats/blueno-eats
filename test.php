<!-- <!DOCTYPE html>
<html>
    <body>
      <form action="test1.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
      </form>
    </body>
</html> -->

<!DOCTYPE html>
<html>
  <body>
    <div class="user-form">
      <form action="test1.php" method="post" enctype="multipart/form-data">
        <label for="review-msg">Add a written review</label>
        <input type="text" id="review-msg" name="review-msg" placeholder="What did you like or dislike about this dish?">

        <label for="review-img">Add a photo</label>
        <input type="file" id="review-img" name="review-img[]" accept="image/*" multiple>

        <input type="submit" value="Submit">
      </form>
    </div>
  </body>
</html>
