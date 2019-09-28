<?php
$connection = new mysqli("localhost", "yash", "yash","StudentDB");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>