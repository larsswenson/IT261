<?php
// session starts here - session stores info
session_start();
include('config.php');
// include('./includes/header.php');

// connect to database
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// register user with if isset reg_user
if(isset($_POST['reg_user'])) {
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);
if(empty('first_name')) {
    array_push($errors, 'First name is required.');
    }
if(empty('last_name')) {
    array_push($errors, 'Last name is required.');
    }
if(empty('email')) {
    array_push($errors, 'Email is required.');
    }
if(empty('username')) {
    array_push($errors, 'User name is required.');
    }
if(empty('password_1')) {
    array_push($errors, 'Password is required.');
    }
if($password_1 !== $password_2) {
    array_push($errors, 'Passwords do not match.');
    }

// check user name/password & select from table
$user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
$result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
$rows = mysqli_fetch_assoc($result);

// nested if statements - exclude duplicate user names & email addresses
if($rows) {
if($rows['username'] == $username) {
    array_push($errors, 'User name already exists.');
    }
if($rows['email'] == $email) {
    array_push($errors, 'Email address already exists.');
    }
} // end outer if statement

// check for errors & count
if(count($errors) == 0) {
    $password = md5($password_1);
    // insert info into table
    $query = "INSERT INTO users (first_name, last_name, email, username, password) 
    VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";
    mysqli_query($iConn, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = $success;
    // if success, direct to login page
    header('Location:login.php');
} // end if count errors

} // end if isset reg_user

// connect to login page
if(isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);
if(empty($username)) {
    array_push($errors, 'User name is required.');
    }
if(empty($password)) {
    array_push($errors, 'Password is required.');
    }
// counting errors, hoping for 0 errors
if(count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
// NEW variable $results, NOT $result!
    $results = mysqli_query($iConn, $query);
if (mysqli_num_rows($results) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['success'] = $success;
// if successful, user directed to home page (index.php)
    header('Location:index.php');
    } else {
        array_push($errors, 'Wrong username/password combination!');
        } // end else
    } // end if count
} // end isset login user

