<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>client site</h1>
    <a href="./server.php?name=calvin&job=prog">server</a>

    <form action="./server.php" method="post" enctype='multipart/form-data'>
    FirstName:<input type="text" name="firstUserName"> <br>
    secondName:<input type="text" name="secondUserName"><br>


    <select name="gender" id="">
        <option value="m">male</option>
        <option value="f">female</option>
    </select>
    <br>
    <input type="file" name="myImage">
    <input type="submit" value="click to send">
    </form>
</body>
</html>