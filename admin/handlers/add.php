<?php
session_start();
require_once "../../db/db_connect.php";
$user = $_SESSION["user"];
// Depositing into user's account
if (isset ($_POST["deposit"])) {
    extract($_POST);
    $startDate = date('d-M-Y');
    $endDate = date('d-M-Y', strtotime($days . 'days'));
    $query = "INSERT INTO deposits (amount,user,plan,start_date,end_date)  VALUES ('$amount', '$user', '$plan', '$startDate', '$endDate')";
    $res = mysqli_query($conn, $query);
    if ($res) {
        $profit = $amount * ($increase / 100);

        // Updating user's balance with new balance from deposit and profit
        $query = "UPDATE users SET balance = balance + $amount + $profit, invested = invested + $amount, profits = profits + $profit  WHERE id=$user";
        $res = mysqli_query($conn, $query);

        // Updating last profit with the current date when last profit was made
        $lastProfit = date('d-M-Y');
        $query = "UPDATE deposits SET last_profit = '$lastProfit' 
        WHERE id = ( SELECT MAX(id) FROM deposits)";
        $res = mysqli_query($conn, $query);
        if ($res) {
            header("Location: ../myplan.php");
        }

    } else {
        header("Location: ../invest-form.php?plan=$plan");
    }
}