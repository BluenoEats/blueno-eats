<?php
function get_slideshow($dbc, $db_name, $key, $id) {
  $query = "SELECT * FROM $db_name WHERE $key = $id";
  $result = mysqli_query($dbc, $query);
  return $result;
}
?>
