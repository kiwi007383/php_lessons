<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>read list</h1>
    <a href="create.php">create page</a>
    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once("db_connection.php");

            // SELECT * FROM table_name;

            $sql = "SELECT * FROM one";

            $query = mysqli_query($conn, $sql);


            while ($row = mysqli_fetch_assoc($query)) {
                $date = date('d-M-Y g:i A', strtotime($row['created_at']));
                echo " 
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>$date</td>
                            <td>
                                <a href='update.php?id={$row['id']}'>update</a> |
                                <a href='delete.php?id={$row['id']}'>delete</a>
                            </td>   
                        </tr>
                        ";
            }
            ?>
        </tbody>
    </table>


</body>

</html>