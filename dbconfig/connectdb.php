<?php
$connection = new mysqli("localhost", "yash", "yash","StudentDB");
// $connection = new mysqli("localhost", "id11163513_yash", "yash123boura","id11163513_studentdb");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>