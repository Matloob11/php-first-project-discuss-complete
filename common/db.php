<?php
$host="127.0.0.1:3307";
$username="root";
$password=null;
$database="discuss";
$conn=new mysqli($host,$username,$password,$database);
if($conn->connect_error){
    die("not connected DB".$conn->connect_error);
}
?>