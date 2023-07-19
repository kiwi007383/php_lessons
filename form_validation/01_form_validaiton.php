<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php

    $errorName = $errorEmail = $errorPhone = $errorAddress = "";
    $name = $email = $phone = $address = "";
    if (isset($_POST['btn'])) {

        if ($_POST['name'] == "" || $_POST['name'] == null || empty($_POST['name'])) {
            $errorName = "Please fill your name ";
        } else {
            $name = $_POST['name'];
        }
        if ($_POST['email'] == "" || $_POST['email'] == null || empty($_POST['email'])) {
            $errorEmail = "Please fill your email";
        } else {
            $email = $_POST['email'];
        }
        if ($_POST['phone'] == "" || $_POST['phone'] == null || empty($_POST['phone'])) {
            $errorPhone = "Please fill your phone";
        } else {
            $phone = $_POST['phone'];
        }
        if ($_POST['address'] == "" || $_POST['address'] == null || empty($_POST['address'])) {
            $errorAddress = "Please fill your address field";
        } else {
            $address = $_POST['address'];
        }

        if ($name != "" && $email != "" && $phone != "" && $address != "") {
            echo $name . "<br>";
            echo $email . "<br>";
            echo $phone . "<br>";
            echo $address . "<br>";
        }
    }
    ?>
    <div class="container mt-5 ">
        <div class="row ">
            <div class="col-6 offset-3  shadow p-3">
                <form method="post">
                    <div class="px-4 mb-4">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name">
                        <small class="text-danger"><?php echo $errorName; ?></small>
                    </div>
                    <div class="px-4 mb-4">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email">
                        <small class="text-danger">
                            <?php echo $errorEmail; ?>
                        </small>

                    </div>
                    <div class="px-4 mb-4">
                        <label for="">Phone</label>
                        <input type="number" class="form-control" name="phone" placeholder="Enter your ph number">
                        <small class="text-danger">
                            <?php echo $errorPhone; ?>
                        </small>

                    </div>
                    <div class="px-4 mb-4">
                        <label for="">Address</label>
                        <textarea name="address" id="" cols="10" rows="10" class="form-control" name="address"></textarea>
                        <small class="text-danger">
                            <?php echo $errorAddress; ?>
                        </small>

                    </div>
                    <div class="px-4 mb-4">
                        <input type="submit" value="Save" class="btn btn-primary float-end " name="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>