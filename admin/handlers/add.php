<?php
session_start();
require_once "../../db/db_connect.php";
$user = $_SESSION["user"];
// Depositing into user's account
if (isset ($_POST["deposit"])) {
    extract($_POST);
    $startDate = date('d-M-Y h:i', strtotime('1 day'));
    $endDate = date('d-M-Y h:i', strtotime($days . 'days'));
    $query = "INSERT INTO deposits (amount,user,plan,start_date,end_date)  VALUES ('$amount', '$user', '$plan', '$startDate', '$endDate')";
    $res = mysqli_query($conn, $query);
    if ($res) {
        $query = "UPDATE users SET balance = balance + $amount , invested = invested + $amount  WHERE id=$user";
        $res = mysqli_query($conn, $query);
        if ($res) {
            header("Location: ../myplan.php");
        }

    } else {
        header("Location: ../invest-form.php?plan=$plan");
    }
}