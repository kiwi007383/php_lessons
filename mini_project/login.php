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
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <button type="submit" class="btn bg-dark text-white float-end" name="login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    session_start();
    if (isset($_POST['login'])) {
        $userEmail = $_POST['email'];
        $userPassword = $_POST['password'];

        if ($userEmail != "" && $userPassword != "") {

            if ($userEmail == $_SESSION['email'] && password_verify($userPassword, $_SESSION['password'])) {
                echo 'Login success';
            } else {
                echo 'Login failed,try again!';
            }
        } else {
            echo 'need to fill!';
        }
    }
    ?>
</body>

</html>