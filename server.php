<?php

session_start();

//Initialising variables
$username = "";
$email ="";

$errors = array();

//Connect to database
$db = mysqli_connect('localhost', 'root', '', 'obhub') or die("could not connect to the database");

//Register Users
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//Form validation
if(empty($username)) {array_push($errors, "Username is required");}
if(empty($email)) {array_push($errors, "Not valid email");}
if(empty($password_1)) {array_push($errors, "Password is required");}
if($password_1 != $password_2) {array_push($errors, "Password did not match");}

//Check user in db if username already exist
$user_check_query = "SELECT * FROM  user WHERE username = '$username' or email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user) {
    if($user['username'] === $username){array_push($errors, "Username already exist");}
    if($user['email'] === $email){array_push($errors, "Email is already exist");}
}

//Register user if no errors
if(count($errors) == 0) {
    $code = md5($password_1);
    $query = "INSERT INTO usertable (username, email, code) VALUES ('$username', '$email', '$code')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now loggedin";
    header("location: index.php");

}

?>