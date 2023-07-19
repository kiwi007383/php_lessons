<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Todo_list</h2>

    <form method="post">
        <div class="form-group">
            <label for="name">Your tasks:</label>
            <input type="text" name="taskName" id="name" placeholder="Enter tasks.." required>
            <button name="addBtn">ADD</button>
        </div>
    </form>
    <a href="read.php">list page</a>

    <?php

    require_once("./db_connection.php");

    if (isset($_POST['addBtn'])) {
        $taskName = $_POST['taskName'];

        $sql = "INSERT INTO work (name) VALUES ('$taskName')";

        if (mysqli_query($conn, $sql)) {
            header("location:read.php");
        } else {
            echo "Query failed..";
        }
    }
    ?>
</body>

</html>