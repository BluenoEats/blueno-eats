<?php

function get_dish_page($dbc, $dish) {
  if (isset($dish)) {
    $id = $dish;
    $r = mysqli_query($dbc, "SELECT * FROM ".DISH_DB);
    $num_rows = mysqli_num_rows($r);
    if ($id >= $num_rows) {
      $id = 0;
    }
  } else {
    $id = 0;
  }

  $query = "SELECT * FROM ".DISH_DB." WHERE id = $id";
  $result = mysqli_query($dbc, $query);
  $page = mysqli_fetch_assoc($result);

  return $page;
}

function get_hall_page($dbc, $hall) {
  if (isset($hall)) {
    $id = $hall;
    $r = mysqli_query($dbc, "SELECT * FROM ".DINING_HALL_DB);
    $num_rows = mysqli_num_rows($r);
    if ($id >= $num_rows) {
      $id = 0;
    }
  } else {
    $id = 0;
  }

  $query = "SELECT * FROM ".DINING_HALL_DB." WHERE id = $id";
  $result = mysqli_query($dbc, $query);
  $page = mysqli_fetch_assoc($result);

  return $page;
}
?>
