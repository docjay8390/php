<?php
// Delete record here...

require('connect.php');

//code dor id request from databse

$user_id = $_REQUEST['user_id'];

//deleting data from databse

$query = "DELETE FROM user WHERE user_id = $user_id";
$result = mysqli_query($connection, $query);

header("Location: index.php");
?>