<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encrypt| decrypt</title>
</head>
<body>
    <h2>Encrypt | decrypt</h2>
    <hr>

    <?php
        $name = "calvin";
        $en  = md5($name);
        $secEn = sha1($name);
        $thirdEn = crypt($name,"MK");

        echo $thirdEn;
        echo "<br>";
    ?>

    <hr>

    <h2>password hash</h2>
    <hr>

    <?php
    $pass = 'pass123';
    $hash_pass =  password_hash($pass, PASSWORD_DEFAULT);

    echo $hash_pass;

    echo "<br>";
    echo password_verify('calvin', $hash_pass) ? "same" : "false";

    ?>
</body>
</html>