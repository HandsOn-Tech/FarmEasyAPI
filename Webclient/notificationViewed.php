<?php 
    require("dbconn-notification.php");

    $notid = $_GET['notificationId'];    
    $query =  "update notification set status=1 where notificationId=$notid;";
    mysqli_query($link, $query);
    header("location:http://localhost:8888/FarmEasyAPI/Webclient/index.php");
?>  