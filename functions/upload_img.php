<?php
function upload_img($target_dir, $file_info, $file_name)
{
  // replace file name with random string to avoid duplicate names;
  $target_file = $target_dir . $file_name;

  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($file_info["name"], PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if (isset($_POST["submit"])) {
    $check = getimagesize($file_info["tmp_name"]);
    if ($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG & PNG files are allowed.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    return 0;
    // if everything is ok, try to upload file
  } else {
    // resize if necessary
    $maxDim = 800;
    $file_name = $file_info['tmp_name'];
    list($width, $height, $type, $attr) = getimagesize($file_name);
    if ($width > $maxDim || $height > $maxDim) {
      $target_filename = $file_name;
      $ratio = $width / $height;
      if ($ratio > 1) {
        $new_width = $maxDim;
        $new_height = $maxDim / $ratio;
      } else {
        $new_width = $maxDim * $ratio;
        $new_height = $maxDim;
      }
      $src = imagecreatefromstring(file_get_contents($file_name));
      $dst = imagecreatetruecolor($new_width, $new_height);
      imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
      imagedestroy($src);
      // adjust format as needed
      if ($imageFileType == "jpg" || $imageFileType == "jpeg") {
        if (imagejpeg($dst, $target_file)) {
          imagedestroy($dst);
          echo "The file " . $file_name . " has been uploaded.";
          return 1;
        } else {
          echo "Sorry, there was an error uploading your file.";
          return 0;
        }
      } else if ($imageFileType == "png") {
        // adjust format as needed
        if (imagepng($dst, $target_file)) {
          imagedestroy($dst);
          echo "The file " . $file_name . " has been uploaded.";
          return 1;
        } else {
          echo "Sorry, there was an error uploading your file.";
          return 0;
        }
      }
    }
  }
}
