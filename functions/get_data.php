<?php
function get_hall_slideshow($dbc, $id) {
    if (!isset($dish)) {
      $id = 0;
    }

    $query = "SELECT * FROM ".HALL_SLIDESHOW_DB." WHERE id = $id";
    $result = mysqli_query($dbc, $query);
    
    return $page;
}
?>
