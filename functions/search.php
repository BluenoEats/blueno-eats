<?php
function search($dbc) {

    //$stmt = $dbc->prepare("SELECT * FROM `dish_pages`  WHERE `name` LIKE ?");
    $stmt = $dbc->prepare("SELECT * FROM `hall_pages` WHERE `name` LIKE ? OR `official_name` LIKE ?");
    $stmt->execute(["%".$_POST["search"]."%", "%".$_POST["search"]."%"]);
    $results = $stmt->fetchAll();
    if (isset($_POST["ajax"])) { echo json_encode($results); }
}