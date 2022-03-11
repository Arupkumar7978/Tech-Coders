<?php
session_start();
include('dbconn.php');

$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

$sql = "SELECT * FROM users WHERE email='$email'  AND password='$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$_SESSION['name'] = $row['name'];
$_SESSION['email'] = $row['email'];
$_SESSION['number'] = $row['number'];
$_SESSION['profession'] = $row['profession'];
$_SESSION['gender'] = $row['gender'];
header('location:index.php');
mysqli_close($conn);
