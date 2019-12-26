<?php 

$user = 'root';
$password = 'root';
$db = 'FarmEasy';
$host = 'localhost';
$port = 8889;

echo "Test";

$link = mysqli_connect(
   "$host:$port",
   $user,
   $password
);

echo $link;

$db_selected = mysql_select_db(
   $db,
   $link
);

?>