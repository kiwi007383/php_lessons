<!-- get data => Show => Edit => Updates -->
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

    $id = $_GET['id'];
    $sql = "SELECT * FROM one WHERE id = $id";

    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query); //get data 
    // echo "<pre>";
    // var_dump($data['name']);

    if (isset($_POST['updateBtn'])) {
        $userId = $_POST['userId'];
        $userName = $_POST['userName'];
        $updateSql = "UPDATE one SET name = '$userName' WHERE id = $userId";
        $updateQuery = mysqli_query($conn, $updateSql);


        if ($updateQuery) {
            header("location:read.php");
        } else {
            echo 'update error';
        }
    }
    ?>

    <form method="post">
        Tasks
        <input type="hidden" name="userId" value="<?php echo $data['id'] ?>" required>
        <input type="text" name="userName" value="<?php echo $data['name'] ?>" required>
        <button name="updateBtn">Update</button>
    </form>
</body>

</html>