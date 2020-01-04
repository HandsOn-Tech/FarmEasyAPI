<?php 
    require("dbconn.php");

    $email = $_POST['email'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $query =  "Insert into profiles values ('2', '$fname', '$lname', '$email', '$password')";
    $result = mysqli_query($link, $query);

?>
