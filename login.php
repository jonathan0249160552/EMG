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

</style>

<body>
    <?php require 'nav.php'; ?>

    <marquee behavior="" direction="left" class="shortcut">Use the siren button for quick Emergency reporting <i class="fas fa-hand-point-down"></i></marquee>
    <div class=" justify-content-center">


        <div class="container mt-4 pt-4">

            <div class="card-body">
        <a href="account.php">Register</a>
                <div class="request-form">
                    <form action="#" method="post" id="loginForm">
                        <div class="form-group">
                            <label for="name"><i class="fas fa-user"></i>User name</label>
                            <input type="text" id="name" placeholder="Enter your user name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone"><i class="fas fa-phone"></i> Password:</label>
                            <input type="text" id="phone" placeholder="Enter your password" required>
                        </div>
                     
                        <div id="Alert"></div>

                        <div class="form-group mt-2">
                            <input type="text" class="submitBtn btn btn-success" value="Login">
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>





    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script> -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="assets/js/scriptNav.js"></script>
    <script>
        $(".submitBtn").click(function(e) {
            if ($("#loginForm")[0].checkValidity()) {
                e.preventDefault();

                $(".submitBtn").val('Please Wait...');
                $.ajax({
                    url: 'assets/php/process.php',
                    method: 'post',
                    data: $("#loginForm").serialize() + '&action=logging',
                    success: function(response) {
                        // console.log(response);
                        $(".submitBtn").val('Sign up');

                        $("#Alert").html(response);


                    }
                });
            }
        });
    </script>
</body>

</html>