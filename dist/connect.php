<?php 
$serv_name = "172.17.64.1"; 
$serv_username = "root";
$serv_pass = "";
$db_name = "onlineshop"; 

// connect to database
$connect = mysqli_connect($serv_name, $serv_username, $serv_pass, $db_name);

if (!$connect) {
  die("Connection failed"); // connection error
}
