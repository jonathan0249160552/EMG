<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

</style>

<body>
    <?php require 'nav_bar.php'; ?>

    <div class=" justify-content-center">


        <div class="container mt-4 pt-4">

            <div class="card-body">
                <a href="login.php">Login</a>
                <div class="request-form">
                    <form action="#" method="post" id="registerForm">
                    <div class="form-group">
                            <label for="name"><i class="fas fa-user"></i> User name:</label>
                            <input type="text" id="username" name="username" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="name"><i class="fas fa-user"></i> Name:</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone"><i class="fas fa-phone"></i> Contact:</label>
                            <input type="number" id="phone" name="contact" placeholder="Enter your phone number" required>
                        </div>

                        <div class="form-group">
                            <label for="phone"><i class="fas fa-phone"></i>Emergency contact:</label>
                            <input type="number" id="phone" name="phone" placeholder="Enter your phone number" required>
                        </div>

                        <div class="form-group">
                            <label for="residence"><i class="fas fa-map-marker-alt"></i> Residence:</label>
                            <input type="text" name="residence" id="residence">
                        </div>

                        <div class="form-group">
                            <label for="password"><i class="fas fa-map-marker-alt"></i> Password:</label>
                            <input type="password" name="password" id="password">
                        </div>
                     
                        <div class="form-group">
                            <label for="confirmPassword"><i class="fas fa-map-marker-alt"></i> Confirm Password:</label>
                            <input type="password" name="confirmPassword" id="confirmPassword">
                        </div>
                     
                     
                        <div id="Alert"></div>
                        <p id="passError"></p>
                        <div class="alert"></div>
                        <div class="form-group mt-2">
                            <input type="submit" id="submitBtn" class="submitBtn btn btn-success" value="Sign up">
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- <script src="assets/js/jquery-3.5.1.jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="assets/js/scriptNav.js"></script>
    <script>
 
        $("#submitBtn").click(function(e) {
			if ($("#registerForm")[0].checkValidity()) {
				e.preventDefault();
				$("#submitBtn").val('Please Wait...');
				if ($("#password").val() != $("#confirmPassword").val()) {
					$('.myAlert').show();
					setTimeout(function() {
						$('.myAlert').fadeOut();;
					}, 3000);
					$("#passError").html('* Password did not matched!');
					$("#submitBtn").val('Sign Up');
				} else {
					$("#passError").text(' ');
					$.ajax({
						url: 'assets/php/submit_action.php ',
						method: 'post',
						data: $("#registerForm").serialize() + '&action=registerAdmin',
						success: function(response) {
								console.log(response);
								$(".Alert").html(response);
							$("#submitBtn").val('Create');
                            $(".alert").html(response);
				

						}
					});
				}
			}
		});


    </script>
</body>

</html>