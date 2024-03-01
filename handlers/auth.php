<?php
require_once("../db/db_connect.php");
session_start();

// Adding Users to DB
if (isset($_POST["signUp"])) {
    extract($_POST);
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (fullname,username,email,password)  VALUES ('$fullname', '$username','$email','$hashPassword')";
    $res = mysqli_query($conn, $query);
    if ($res) {
        header("Location: ../login.php");
    } else {
        header("Location: ../signup.php");
    }
}

// Verifying if email already exists
if (isset($_GET["verifyEmail"])) {
    $email = $_GET["verifyEmail"];
    $query = "SELECT * FROM users WHERE email='$email'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        echo true;
    } else {
        echo false;
    }
}


// Verifying if email already exists
if (isset($_GET["verifyUsername"])) {
    $username = $_GET["verifyUsername"];
    $query = "SELECT * FROM users WHERE username='$username'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        echo true;
    } else {
        echo false;
    }
}

// Logging user in
if (isset($_POST["login"])) {
    extract($_POST);
    $query = "SELECT * FROM users WHERE username='$username' OR email='$username'";
    $res = mysqli_query($conn, $query);
    if ($res->num_rows) {
        $row = $res->fetch_assoc();

        if (password_verify($password, $row["password"])) {
            $_SESSION["user"] = $row["id"];
            header("Location: ../login.php?auth=s");
        } else {
            header("Location: ../login.php?auth=f");
        }
    } else {
        header("Location: ../login.php?auth=f");
    }
}