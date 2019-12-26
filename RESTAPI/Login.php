<?php 
    $user = 'u923853181_demo'; 
    $password = 'h4ck3d321';
    $db = 'u923853181_farmeasy';
    $host = '156.67.222.190';
    $port = 3306;

    $link = mysqli_connect($host,$user,$password,$db);

    //print_r($link);

    $email = $_GET['email'];
    $password = $_GET['password'];

    $query =  "Select * from profiles where email = '$email' and password='$password'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);

    if($email == $row["email"] && $password == $row["password"]){
        echo json_encode($row);
    }else{
        $error = array("errorCode"=>501, "ErrorDescription"=>"Invalid username and password");
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
