<?php
session_start();

require_once 'auth.php';
$cuser = new Auth();


// if(!isset($_SESSION['user'])){
//     header('location:signup.php');
//     die;
    
// if(!isset($_SESSION['index'])){
//        header('location:signup.php');
//         die;
//     }
    
    
// }


// $cuser_name = $_SESSION['user'];

// $data = $cuser->currentUser($cuser_name);
// $cid =$data['id'];
// $cname= $data['user_name'];
// $cuser_id= $data['user_id'];
// $cemail= $data['email'];
// $cpass= $data['password'];
// $adminActivation= $data['admin_activation'];
// $verification= $data['verification'];
// $created=$data['created_on'];


// $reg_on = date('d M Y',strtotime($created));



// // if($verified == 0){
// //   $verified = 'Not Verified!';
// // }
// // else{
// //   $verified = 'Verified';
// // }
