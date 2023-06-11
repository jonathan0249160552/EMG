<?php
if (isset($_FILES['video']) && $_FILES['video']['error'] === UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['video']['tmp_name'];
    $name = $_FILES['video']['name'];
    $destination = "video/" . $name;
    
    if (move_uploaded_file($tmp_name, $destination)) {
        echo "Video uploaded successfully.";
    } else {
        echo "Failed to upload the video.";
    }
} else {
    echo "No video uploaded or an error occurred.";
}
?>
