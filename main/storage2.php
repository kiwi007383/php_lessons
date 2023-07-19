<?php

    //session

    session_start();
    // session_destroy(); //session delete

    echo $_SESSION['name']; //session call  
    echo "<br>";
    echo $userName;

?>