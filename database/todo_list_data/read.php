<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Task list</h1>
    <a href="create.php">create page</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                <td>1</td>
                <td>d</td>
                <td>12</td>
                <td>
                    <a href='#'>Update</a> |
                    <a href='#'>Delete</a>
                </td>
            </tr> -->


            <?php
            require_once("db_connection.php");

            // SELECT * FROM table_name

            $sql = "SELECT * FROM work";
            $query = mysqli_query($conn, $sql);

            $totalRow = mysqli_num_rows($query);

            // echo "<pre>";
            // var_dump(mysqli_fetch_assoc($query));

            while ($row = mysqli_fetch_assoc($query)) {

                $time = date('d-m-Y g:i:a', strtotime($row['created_at']));
                echo "
                
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>$time</td>
                <td>
                    <a href='update.php?id={$row['id']}'>Update</a> |    
                    <a href='delete.php?id={$row['id']}'>Delete</a>
                </td>
            </tr>";
            }

            ?>
        </tbody>
    </table>
</body>

</html>