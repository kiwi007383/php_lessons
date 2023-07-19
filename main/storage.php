<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storage</title>
</head>
<body>
    <?php

        session_start();

        $_SESSION['name'] = "session calvin"; // session create
        $userName = 'calvin';  //var storage
        echo "session store success...";
        ?>
</body>
</html>