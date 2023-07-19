<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>server site</h1>

    <!-- get method => <a href=""></a>

    post method => <form action="" method="post"></form> -->

    <?php
        echo "<pre>";
        // var-dump($_REQUEST);
        var_dump($_POST);
        // var_dump($_POST['firstUserName']);
        echo "<br>";
        var_dump($_FILES);
    ?>

</body>
</html>

