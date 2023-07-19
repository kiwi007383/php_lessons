<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Todo list</h1>
    <a href="read.php">list</a>
    <br><br>
    <form method="post">
        <label for="name">Your tasks</label>
        <input type="text" name="userName" id="name" placeholder="Enter your tasks.." required>
        <button name="createBtn">Add</button>
    </form>

    <?php
    require_once("db_connection.php");

    if (isset($_POST['createBtn'])) {
        $userName = $_POST['userName'];

        $sql = "INSERT INTO one (name) VALUES ('$userName')";

        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo 'Insert success';
        } else {
            echo 'query failed';
        }
    }
    ?>
</body>

</html>