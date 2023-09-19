<?php
session_start();

if (isset($_SESSION['user'])) {
    header('location:report_list.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<style>
    body {
        /* font-family: 'Open Sans', sans-serif; */
        line-height: 28px;
        background-image: url('assets/images/cover.png');
        /* Replace 'background.jpg' with your image file path */
        background-size: cover;
        /* Adjust the size to cover the entire viewport */
        background-repeat: no-repeat;
        /* Prevent image repetition */
        background-attachment: fixed;
        /* Keep the background fixed while scrolling */

    }
</style>

<body>
    <?php require 'nav.php'; ?>

    <marquee behavior="" direction="left" class="shortcut">Use the siren button for quick Emergency reporting <i class="fas fa-hand-point-down"></i></marquee>
    <div class=" justify-content-center">


        <div class="container mt-4 pt-4">

            <div class="card-body">
                <h3 class="text-center text-white">Please login into your account</h3>
                <div class="request-form">

                    <form action="#" method="post" id="loginForm">
                        <div class="form-group">
                            <label for="name"><i class="fas fa-user"></i>User name</label>
                            <input type="text" id="name" name="username" placeholder="Enter your user name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone"><i class="fas fa-phone"></i> Password:</label>
                            <input type="text" id="phone" name="password" placeholder="Enter your password" required>
                        </div>

                        <div id="loginAlert"></div>

                        <div class="form-group mt-2">
                            <input type="submit" class="submitBtn btn btn-success" value="Login">
                            <a href="account.php" class="btn btn-success">Register</a><br>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>





    <script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="assets/js/scriptNav.js"></script>
    <script>
        $(".submitBtn").click(function(e) {
            if ($("#loginForm")[0].checkValidity()) {
                e.preventDefault();

                $(".submitBtn").val('Please Wait...');
                $.ajax({
                    url: 'assets/php/submit_action.php',
                    method: 'post',
                    data: $("#loginForm").serialize() + '&action=logging',
                    success: function(response) {
                        console.log(response);
                        if (response === 'login') {
                            window.location = 'report_list.php';
                            location.reload()

                        } else {
                            $("#loginAlert").html(response);
                            $(".submitBtn").val('Login');
                        }

                    }
                });
            }
        });
    </script>
</body>

</html>