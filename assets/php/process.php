<?php
require 'session.php';
$cuser = new Auth();

// $data = json_decode(file_get_contents('php://input'), true);
$post_code = $_POST['post_code'];
$videoData = $_POST['formData'];
    
    // Generate a unique filename for the image
    $filename = 'video_' . uniqid() . '.webm';
    $uploadPath = 'video/' . $filename;
    // $cuser->sendVideo($post_code,$filename);
   
    if (move_uploaded_file($videoData['tmp_name'], $uploadPath)) {
    echo  $cuser->showMessage('success','Video relieved');
    
    } else {
        echo json_encode(['success' => false, 'message' => 'Error uploading video.']);
    }


