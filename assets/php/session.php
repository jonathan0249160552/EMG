<?php
session_start();

require_once 'emg_auth.php';
$cuser = new Auth();


if(!isset($_SESSION['user'])){
    header('location:login.php');
    die;
    
// if(!isset($_SESSION['index'])){
//        header('location:login.php');
//         die;
//     }
    
    
}


$cuser_name = $_SESSION['user'];

$data = $cuser->currentUser($cuser_name);
$cid =$data['id'];
$cname= $data['username'];
$c_phone= $data['phone'];
$c_contact= $data['contact'];
$admin= $data['admin'];
$c_name= $data['name'];
$c_pass= $data['password'];
$c_residence= $data['residence'];
$c_gender= $data['gender'];
$admin= $data['admin'];
$created=$data['created_on'];


$reg_on = date('d M Y',strtotime($created));



// // if($verified == 0){
// //   $verified = 'Not Verified!';
// // }
// // else{
// //   $verified = 'Verified';
// // }
