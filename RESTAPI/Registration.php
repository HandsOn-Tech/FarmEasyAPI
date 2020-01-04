<?php 
    require("dbconn.php");

    $email = $_POST['email'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $query =  "Insert into profiles (fname, lname, email, password) values ('$fname', '$lname', '$email', '$password')";
    if(mysqli_query($link, $query)){
        $validmessage = array("responseCode"=>201, "responseDescription"=>"User Created");
    }else{
        $validmessage = array("errorCode"=>403, "errorDescription"=>"The registration for this user is already Done.");
    }
    echo json_encode($validmessage);
    
    
?>
