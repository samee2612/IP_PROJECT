<?php
$db=new mysqli('localhost','root','','ecommerce');
if(mysqli_connect_error()){
    die("Connection Fail: ". mysqli_connect_error());
}
?>