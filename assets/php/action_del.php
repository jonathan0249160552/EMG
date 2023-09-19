<?php
require 'session.php';


if (isset($_POST['deleteBtn'])) {
    $deleteBtn = $_POST['deleteBtn'];

    $cuser->changeStatus($deleteBtn,1,"user");
    

}

if (isset($_POST['reportDelete'])) {
    $reportDelete = $_POST['reportDelete'];

    $cuser->changeStatus($reportDelete,1,"reported");
    
    

}

if (isset($_POST['notificationDelete'])) {
    $notificationDelete = $_POST['notificationDelete'];

    $cuser->changeStatus($notificationDelete,1,"notification");
    
    

}