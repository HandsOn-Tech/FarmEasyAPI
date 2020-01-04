<?php 
    require("dbconn.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query =  "Select * from profiles where email = '$email' and password='$password'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);

    if($email == $row["email"] && $password == $row["password"]){
        echo json_encode($row);
    }else{
        $error = array("errorCode"=>402, "errorDescription"=>"Invalid username and password");
        echo json_encode($error);
    }

    /*$post_json = '{
        "id": "1",
        "fname": "Parin",
        "lname": "Patel",
        "email": "pparin8@gmail.com",
        "password": "h4ck3d321"
        }';

    $assocArray = json_decode($post_json);
    print_r($assocArray);*/
?>
