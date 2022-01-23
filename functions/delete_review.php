<?php
include "../config/setup.php";

$user_id = $_SESSION['user_id'];
$review_id = $_POST['review_id'];

$query = "DELETE FROM ".REVIEW_DB." WHERE id=$review_id AND author_id=$user_id";
$result = mysqli_query($dbc, $query);

if ($result) {
    echo $review_id;
} else {
    echo 0;
}
?>
