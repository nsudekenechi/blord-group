<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "fundflex";
$conn = mysqli_connect($host,$username,$password,$db);

if(!$conn){
    exit();
}