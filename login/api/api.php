<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'login');

if (isset($_POST['registerbtn'])) {
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $insert = "INSERT INTO user VALUE ('$username','$mobile','$password')";

    $sql = mysqli_query($connect, $insert);
    if ($sql) {
        echo "<script>
    alert('Registration successful !');
    window.location = '../index.html';
        </script>";
    } else {
        echo "<script>alert('Registration failed !')</script>";
    }
}

if (isset($_POST['loginbtn'])) {
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $select = "SELECT username FROM user WHERE mobile='$mobile' AND password='$password'";
    $result = mysqli_query($connect, $select);
    if (mysqli_num_rows($result) > 0) {
        $fetch = mysqli_fetch_array($result);
        $username = $fetch['username'];
        $_SESSION['username'] = $username;
        header('location: ../routes/homepage.php');
    } else {
        echo "<script>
        alert('Login failed! Please check your mobile number and password.');
        window.location = '../index.html';
        </script>";
    }
}

if (isset($_POST['logoutbtn'])) {
    session_destroy();
    header('location: ../index.html');
}
