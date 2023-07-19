<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-3">
                <div class="">
                    <a href="login.php">
                        <button class="btn btn-primary mb-3" style='width:200px'>logIn</button>
                    </a>
                </div>
                <div class="">
                    <a href="register.php">
                        <button class="btn btn-primary mb-3" style='width:200px'>Register</button>
                    </a>
                </div>
                <div class="">
                    <a href="logout.php">
                        <button class="btn btn-primary mb-3" style='width:200px'>Logout</button>
                    </a>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <form method="post">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="type" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Confirm password</label>
                                <input type="password" name="confirmPassword" class="form-control">
                            </div>
                            <button type="submit" class="btn bg-dark text-white float-end" name="register">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    session_start();
    function checkStrongPassword($password)
    {
        $upperStatus = false;
        $lowerStatus = false;
        $numberStatus = false;
        $specialStatus = false;

        if (preg_match('/[A-Z]/', $password)) {
            $upperStatus = true;
        }
        if (preg_match('/[a-z]/', $password)) {
            $lowerStatus = true;
        }
        if (preg_match('/[0-9]/', $password)) {
            $numberStatus = true;
        }
        if (preg_match('/[!@#$%^*]/', $password)) {
            $specialStatus = true;
        }

        if ($upperStatus && $lowerStatus && $numberStatus && $specialStatus) {
            return true;
        } else {
            return false;
        }
    };

    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if ($name != "" && $email != "" && $password != "" && $confirmPassword != "") {
            if (strlen($password) >= 6 && strlen($confirmPassword >= 6)) {
                if ($password == $confirmPassword) {

                    $status =  checkStrongPassword($password);
                    // var_dump($status);
                    if ($status) {
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);

                        echo 'Register Success!';
                    } else {
                        echo 'Your password is not strong (Eg- your password must be contain (A-Z,a-z,0-9,@#!$%))';
                    }
                } else {
                    echo 'Passwords are not same. Type again!';
                }
            } else {
                echo 'Password must be greater than six!';
            }
        } else {
            echo 'Need to fill!';
        }
    }
    ?>
</body>

</html>