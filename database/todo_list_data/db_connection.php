<?php
$conn = mysqli_connect('localhost', 'root', '', 'todo_list');

if (!$conn) {
    echo 'connection failed' . mysqli_connect_error();
}
