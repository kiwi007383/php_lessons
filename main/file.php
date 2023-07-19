<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>
<body>
    <h3>file store</h3>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="userProfile">
        <br><br>
        <input type="submit" value="Save" name="storeProfile">
    </form>

    <?php
      if(isset($_POST['storeProfile'])){
        // echo "<pre>";
        // print_r($_FILES);

        $imgName = $_FILES['userProfile']['name'];
        $tmpName = $_FILES['userProfile']['tmp_name'];

        // $target_file = 'image/'.$imgName;
       
        if(move_uploaded_file($tmpName,'image/'.$imgName)){
            move_uploaded_file($tmpName, 'image/'.$imgName);
            echo "success uploading....";
        }else{
            echo "failed to save!";
        }
      }
    ?>
</body>
</html>