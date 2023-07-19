<!-- get data -> show -> edit -> update -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("db_connection.php");

    $id =  $_GET['id'];
    $sql = "SELECT * FROM work WHERE id = $id";

    echo "<pre>";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query); // get data (1)

    if (isset($_GET['updateBtn'])) {
        $id = $_GET['id'];
        $taskName = $_GET['taskName'];
        $updateSql = "UPDATE work SET name = '$taskName' WHERE id = '$id'";

        if (mysqli_query($conn, $updateSql)) {
            header("location:read.php");
        } else {
            echo "Update error";
        }
    }
    ?>
    <a href="read.php">list page</a>
    <form action="#">
        <div style="display: flex">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" required>
            <input type="text" name="taskName" value="<?php echo $data['name'] ?>" required>
            <button name="updateBtn">Update</button>
        </div>
    </form>
</body>

</html>