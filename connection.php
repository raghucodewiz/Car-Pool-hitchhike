<?php
$link = mysqli_connect("localhost", "codewizo_database", "Singh@1234", "codewizo_database");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}
    ?>
