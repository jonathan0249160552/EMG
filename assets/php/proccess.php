<?php
require 'auth.php';
$cuser = new Auth();

    $data = json_decode(file_get_contents('php://input'), true);
    $post_code = ($data['post_code']);
    $imageData = $data['imageData'];
    $imageData = str_replace('data:image/jpeg;base64,', '', $imageData);
    $imageData = str_replace(' ', '+', $imageData);
    $imageData = base64_decode($imageData);

    // Generate a unique filename for the image
    $filename = 'image_' . uniqid() . '.jpg';
    $cuser->sendImage($post_code,$filename);
    // Save the image to a folder
    $imagePath = 'images/' . $filename;
    file_put_contents($imagePath, $imageData);
  echo  $cuser->showMessage('success','Image relieved');
 

?>
