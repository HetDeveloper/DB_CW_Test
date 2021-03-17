<?php

session_start();

//initialisign variables

$username = "" ;
$email = "";
$password_1 = "";
$password_2 = "";

$errors = array();

//connect to db

$db = mysqli_connect('localhost','root','','db_cw_test') or die("could not connect to database");

//register users
if(isset($_POST['username'])) {
$username = mysqli_real_escape_string($db,$_POST['username']); 
$email = mysqli_real_escape_string($db,$_POST['email']); 
$password_1 = mysqli_real_escape_string($db,$_POST['password_1']); 
$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
}

//form validation

if(empty($username))array_push($errors,"User name is requried");
if(empty($email))array_push($errors,"email is requried");
if(empty($password_1))array_push($errors,"password is requried");
if($password_1 != $password_2)array_push($errors,"password does not match");

// check db for existing users with same username

$user_check_query = "SELECT * FROM user WHERE username = '$username' or email ='$email' LIMIT 1";


$results = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) {
    if ($user['username'] === $username) { array_push($errors,"username already exits");}
    if ($user['email'] === $email) { array_push($errors,"email already exits");}
}
//Register the user if no errros
if (count ($errors) == 0){
    $password =md5($password); //this will encrypt the password
    $query = "INSERT INTO user ( username , email, password) VALUES ('$username' ,'$email' ,'$passowrd') ";

    mysqli_query($db,$query);
    $_SESSION['username'] = $username ;
    $_SESSION['success'] = "You are now logged in";

    header('location :login.php');

}


?>