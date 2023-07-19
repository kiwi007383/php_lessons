<?php
require_once("db_connection.php");
$data = $_GET['id'];

$sql = "DELETE FROM one WHERE id = $data";

$query = mysqli_query($conn, $sql);

if ($query) {
    header("location:read.php");
}
