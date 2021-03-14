<?php

session_start();
//initialisign variables

$username = "" ;
$email = "";
$passowrd = "";

$errors = array();

//connect to db

$db = mysqli_connect('localhost','root','','db_cw_test') or die("could not connect to database");

//register users

$username = mysqli_real_escape_string($db,$_POST['username']); 
$email = mysqli_real_escape_string($db,$_POST['email']); 
$password = mysqli_real_escape_string($db,$_POST['password']); 
$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

//form validation

if(empty($username)){array_push($errors,"User name is requried")};
if(empty($email)) {array_push($errors,"email is requried")};
if(empty($password)) {array_push($errors,"password is requried")};
if($password_2 != $ $password) {array_push($errors,"password does not match")};

// check db for existing users with same username

$user_check_query = "SELECT * FROM user WHERE username = ' $username' or email ='$email' LIMIT 1";

$results = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($results);

if ($user) {
    if ($user['username'] == $username) { array_push($errors,"username already exits");}
    if ($user['email'] == $email) { array_push($errors,"email already exits");}
}

if (count ($eroors) == 0){
    $password =md5($password); //this will encrypt the password
    $query = "INSERT INTO user ( username , email, password) VALUES ('$username' ,'$email' ,'$passowrd') ";

    

}