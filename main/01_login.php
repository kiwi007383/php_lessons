<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Login form</h3>
    <form method="post">
    Email:<input type="email" name="userEmail"> <br><br>
    Password:<input type="password" name="userPassword"> <br>
        <input type="submit" value="login" name="loginBtn"> <br>
    </form>

    <?php
        $email = 'admin@gmail.com';
        $password = 'admin';
        $hashPassword = password_hash($password,PASSWORD_BCRYPT);

        // echo $password."<br>";
        // echo $hashPassword;

        if(isset($_POST['loginBtn'])){

            $userEmail = $_POST['userEmail'];
            $userPassword = $_POST['userPassword'];

            if($userEmail==$email && password_verify($userPassword,$hashPassword)){
                echo 'login success..';
            }else{
                echo 'login failed..';
            }
        }
    ?>
</body>
</html>