<div class="search-bar">
    <form autocomplete="off" action="/action_page.php">
        <div class="autocomplete">
            <input id="myInput" type="text" name="search-bar" placeholder="Search for food or Dining hall...">
        </div>
        <button type="button" value="" onclick="toPage();"><i id="search-button" class="fa fa-search input-icon"></i></button>
        <script src="scripts/search.js" type="text/javascript"></script>
    </form>
</div>


<?php
if ($stmt = $dbc->prepare("SELECT id, name FROM dish_pages")) {
    $stmt->bind_result($id1, $name1);
    $OK = $stmt->execute();
}
//put all of the resulting names into a PHP array
$result_array1 = array();
$id_array1 = array();
while ($stmt->fetch()) {
    $result_array1[] = $name1;
    $id_array1[] = $id1;
}
//convert the PHP array into JSON format, so it works with javascript
$json_array1 = json_encode($result_array1);
$json_id_array1 = json_encode($id_array1);

if ($stmt = $dbc->prepare("SELECT id, official_name FROM hall_pages")) {
    $stmt->bind_result($id2, $name2);
    $OK = $stmt->execute();
}
//put all of the resulting names into a PHP array
$result_array2 = array();
$id_array2 = array();
while ($stmt->fetch()) {
    $result_array2[] = $name2;
    $id_array2[] = $id2;
}
//convert the PHP array into JSON format, so it works with javascript
$json_array2 = json_encode($result_array2);
$json_id_array2 = json_encode($id_array2);
?>

<script type="text/javascript">
    var db1 = <?php echo $json_array1; ?>;
    var id1 = <?php echo $json_id_array1; ?>;
    var db2 = <?php echo $json_array2; ?>;
    var id2 = <?php echo $json_id_array2; ?>;
</script>
<script src="scripts/search.js" type="text/javascript"></script>