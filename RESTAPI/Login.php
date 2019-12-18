<?php 
    $email = $_GET['email'];
    $password = $_GET['password'];

    if($email == "admin@handsontech.com" && $password == "1234567890"){
        echo "User is a valid User";
        //JSON
    }else{
        echo "User is a invalid User";
        //JONS
    }

    //Select * from login where email = '$email' and password='$password';

?>
