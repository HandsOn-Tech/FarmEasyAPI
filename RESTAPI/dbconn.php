<?php 

$user = 'root';
$password = 'root';
$db = 'FarmEasy';
$host = 'localhost';
$port = 8889;

$link = mysql_connect(
   "$host:$port",
   $user,
   $password
);

$db_selected = mysql_select_db(
   $db,
   $link
);

?>