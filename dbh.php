<?php
$conn = mysqli_connect("localhost", "root","","mydatabase");
if(!$conn){
    die("connection failed".mysqli_connnect_error());
}
?>