<?php

session_start();

$username = "";
$email = "";

$errors = array();

//Connect to database
$db = mysqli_connect('localhost', 'root', '', 'obstaff') or die("could not connect to database");

//Register User
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//form validation
if(empty($username)){array_push($errors, "Username is requried");}
if(empty($email)){array_push($errors, "Email is requried");}
if(empty($password_1)){array_push($errors, "Password is requried");}
if($password_1 != $password_2){array_push($errors, "Invalid Password");}

//Check db if username already exist
$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user) {
    if($user['username'] === $username){array_push($errors, "Username already exist");}
    if($user['email'] === $username){array_push($errors, "Email ID already used");}
}

//Register the user if  no errors
if(count($errors) == 0) {
    $password = md5($password_1); //enctryption
    $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";

    header("location: index.php");
}