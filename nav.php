<div class="topnav" id="myTopnav">
<a href="index.php">Home</a>
<a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fas fa-bars"></i> </a>
<a href="dashboard.php">Admin</a>
<a href="report_picture.php">Report emergency</a>
<a href="report_list.php" id="reportList">Report list</a>
<a href="notification.php">Notification</a>
<a href="contacts.php">Emergency contacts lists</a>
<a href="user_profile.php">Profile</a>
<a href="tips.php">Emergency Tips</a>
<a href="login.php">Sign / sign Up</a>
<a href="emg_logout.php">Logout</a>
</div>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script> -->
  <script src="assets/js/scriptNav.js"></script>
  <script>
    $('#reportList').click(function (e) { 
      e.preventDefault();
      alert("Please login first")
      
    });
  </script>