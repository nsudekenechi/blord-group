<?php
session_start();
require_once "../../db/db_connect.php";
$user = $_SESSION["user"];

// Depositing into user's account
if (isset ($_POST["deposit"])) {
    extract($_POST);
    $startDate = date('d-M-Y h:i');
    $endDate = date('d-M-Y h:i', strtotime($days . 'days'));
    $query = "INSERT INTO deposits (amount,user,plan,start_date,end_date)  VALUES ('$amount', '$user', '$plan', '$startDate', '$endDate')";
    $res = mysqli_query($conn, $query);
    if ($res) {
        $query = "SELECT id FROM deposits WHERE id = (SELECT MAX(id) FROM deposits)";
        $res = mysqli_query($conn, $query);
        $id = $res->fetch_column();
        header("Location: ../invest-form.php?plan=$plan&deposit=$id");
    } else {
        header("../myplan.php");
    }
    // if ($res) {
    //     // $currDate = date("d-M-Y h:i");
    //     // $query = "UPDATE users SET balance = balance + $amount , invested = invested + $amount  WHERE id=$user";
    //     // $res = mysqli_query($conn, $query);
    //     // $query = "INSERT INTO notifications (user, message, plan, time) VALUES ('$user', 'You deposited $amount', '$plan', '$currDate')";
    //     // $res = mysqli_query($conn, $query);

    //     // Checking if user was reffered so we add 20% to the user who referred him
    //     // $refQuery = "SELECT  user FROM referrals WHERE ref_user='$user' AND ref_earned  = 0";
    //     // $refRes = mysqli_query($conn, $refQuery);

    //     // if ($refRes->num_rows > 0) {
    //     //     $profit = $amount * (10 / 100);
    //     //     $referrer = $refRes->fetch_column();
    //     //     $refQuery = "UPDATE users SET balance = balance + $profit WHERE id='$referrer'";
    //     //     $refRes = mysqli_query($conn, $refQuery);

    //     //     $refQuery = "UPDATE referrals  SET ref_earned = $profit WHERE ref_user='$user'";
    //     //     $refRes = mysqli_query($conn, $refQuery);

    //     // }

    //     if ($res) {
    //         header("Location: ../myplan.php");
    //     }

    // } else {
    //     header("Location: ../invest-form.php?plan=$plan");
    // }
}