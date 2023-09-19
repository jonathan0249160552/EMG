<?php
session_start();
require 'emg_auth.php';
$cuser = new Auth();



if (isset($_POST['action']) && $_POST['action'] == 'reporting') {
    $location = $cuser->test_input($_POST['location']);
    $emp_type = $cuser->test_input($_POST['emg_type']);
    $description = $cuser->test_input($_POST['description']);
    $post_code = $cuser->test_input($_POST['post_code']);
    $gps = $cuser->test_input($_POST['gps']);
    $phone = $cuser->test_input($_POST['phone']);
    $contact = $cuser->test_input($_POST['contact']);
    $name = $cuser->test_input($_POST['name']);

    $cuser->sendReport($location, $emp_type, $description, $post_code, $gps, $phone, $contact, $name);
    echo $cuser->showMessage('success', 'Report received <strong>We will respond to you shortly</strong>');
}

if (isset($_POST['action']) && $_POST['action'] == 'updateProfile') {
    $name = $cuser->test_input($_POST['name']);
    $username = $cuser->test_input($_POST['username']);
    $contact = $cuser->test_input($_POST['contact']);
    $phone = $cuser->test_input($_POST['phone']);
    $residence = $cuser->test_input($_POST['residence']);
    $gender = $cuser->test_input($_POST['gender']);
    $cid = $cuser->test_input($_POST['cid']);
    $cuser->updateProfile($name,$username,$contact,$phone,$residence,$gender,$cid);
    // print_r($_POST);
}

if (isset($_POST['action']) && $_POST['action'] == 'register') {
    $name = $cuser->test_input($_POST['name']);
    $username = $cuser->test_input($_POST['username']);
    $contact = $cuser->test_input($_POST['contact']);
    $phone = $cuser->test_input($_POST['phone']);
    $residence = $cuser->test_input($_POST['residence']);
    $password = $cuser->test_input($_POST['password']);
    $hnewPass = Password_hash($password, PASSWORD_DEFAULT);


    // print_r($_POST);
    if ($cuser->user_exist($username)) {

        echo $cuser->showMessage('warning', 'You can not use this user name its already taken by someone!');
    } else {
        if (

            $cuser->register($name, $username, $contact, $phone, $residence, $hnewPass, '')
        ) {

            echo $cuser->showMessage('success', 'Registration Successful');
        } else {
            echo $cuser->showMessage('danger', 'Sorry Registration Failed, Please Try Again Later');
        }
    }
}


if (isset($_POST['action']) && $_POST['action'] == 'registerAdmin') {
    $name = $cuser->test_input($_POST['name']);
    $username = $cuser->test_input($_POST['username']);
    $contact = $cuser->test_input($_POST['contact']);
    $phone = $cuser->test_input($_POST['phone']);
    $residence = $cuser->test_input($_POST['residence']);
    $password = $cuser->test_input($_POST['password']);

    $hnewPass = Password_hash($password, PASSWORD_DEFAULT);


    if ($cuser->user_exist($username)) {

        echo $cuser->showMessage('warning', 'You can not use this user name its already taken by someone!');
    } else {
        if (

            $cuser->register($name, $username, $contact, $phone, $residence, $hnewPass, '1')
        ) {

            echo $cuser->showMessage('success', 'Registration Successful');
        } else {
            echo $cuser->showMessage('danger', 'Sorry Registration Failed, Please Try Again Later');
        }
    }
}

// handle login ajax request

if (isset($_POST['action']) && $_POST['action'] == 'logging') {
    $user_name = $cuser->test_input($_POST['username']);
    $pass = $cuser->test_input($_POST['password']);
    // print_r($_POST);
    $loggedInUser = $cuser->login_user($user_name);

    if ($loggedInUser != null) {
        if (password_verify($pass, $loggedInUser['password'])) {


            echo "login";
            $_SESSION['user'] = $user_name;
            // header('location:../../home.php');
        } else {
            echo $cuser->showMessage('danger', 'Password is incorrect!');
        }
    } else {
        echo $cuser->showMessage('danger', 'User does not exist!');
    }
}

if(isset($_POST['action']) && $_POST['action']== 'change_pass'){
    $currentPass = $_POST['curpass'];
    $newPass= $_POST['newpass'];
    $cnewPass = $_POST['cnewpass'];
    $c_pass = $_POST['c_pass'];
    $cid = $_POST['cid'];
    $hnewPass = Password_hash($newPass,PASSWORD_DEFAULT);
    // print_r($_POST);
    if($newPass != $cnewPass){
       echo $cuser->showMessage('danger','Password did not match!');
    }
    else{
       if(password_verify($currentPass,$c_pass)){
          $cuser->change_password($hnewPass,$cid);
          echo $cuser->showMessage('success','Password Change Successfully!');
    
            
       }
       else{
          echo $cuser->showMessage('danger','Current Password is Wrong!');
       }
    }
}