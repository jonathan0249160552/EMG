<?php
require 'session.php';
// // Retrieve the image data from the request
// $imageData = $_POST['image'];

// // Decode the base64-encoded image data
// $imageData = str_replace('data:image/jpeg;base64,', '', $imageData);
// $imageData = str_replace(' ', '+', $imageData);
// $imageData = base64_decode($imageData);

// // Generate a unique filename for the image
// $filename = 'image_' . uniqid() . '.jpg';

// // Save the image to a directory
// $imagePath = 'php/images/' . $filename;
// file_put_contents($imagePath, $imageData);

// // Store the image path in the database (you would need to adjust this part according to your database setup)
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "ems_db";

// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Insert the image path into the database
// $sql = "INSERT INTO images (image_path) VALUES ('$filename')";

// if ($conn->query($sql) === TRUE) {
//     echo "Image saved successfully.";
// } else {
//     echo "Error saving image: " . $conn->error;
// }

// $conn->close();



    // Retrieve the image data from the request
    $imageData = $_POST['image'];

    // Decode the base64-encoded image data
    $imageData = str_replace('data:image/jpeg;base64,', '', $imageData);
    $imageData = str_replace(' ', '+', $imageData);
    $imageData = base64_decode($imageData);

    // Generate a unique filename for the image
    $filename = 'image_' . uniqid() . '.jpg';

    // Save the image to a directory
    $imagePath = 'images/' . $filename;
    file_put_contents($imagePath, $imageData);

    $cuser->sendImage("1", "2", $filename);

