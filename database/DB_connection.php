<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $connection = mysqli_connect('localhost', 'root', '', 'test');

    if ($connection) {
        echo 'database connection success!';
    } else {
        die("connection failed..." . mysqli_connect_error());
    }
    ?>
</body>

</html>