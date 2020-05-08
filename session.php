<?php
include('config.php');
session_start();

$user_check = $_SESSION['login_user'];
$link = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
$ses_sql = mysqli_query($link, "select username from accounts where username = '$user_check' ");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
$login_session = $row['username'];
if (!isset($_SESSION['login_user'])) {
   header("location:login.php");
   die();
}
