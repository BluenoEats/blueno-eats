<?php
    //bind to $name
    if ($stmt = $dbc->prepare("SELECT name FROM dish_pages")) {
        $stmt->bind_result($name);
        $OK = $stmt->execute();
    }
    //put all of the resulting names into a PHP array
    $result_array = Array();
    while($stmt->fetch()) {
        $result_array[] = $name;
    }
    //convert the PHP array into JSON format, so it works with javascript
    $json_array = json_encode($result_array);
?>
