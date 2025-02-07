<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Emergency Reporting App</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    /* Style for side navigation */
    .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #222;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 18px;
      color: #fff;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    /* Style for open/close button */
    #openBtn {
      font-size: 30px;
      position: fixed;
      z-index: 1;
      top: 20px;
      left: 20px;
      background-color: #222;
      color: #fff;
      border: none;
      cursor: pointer;
      padding: 10px;
    }

    #openBtn:hover {
      color: #f1f1f1;
    }
  </style>
</head>

<body>
<?php require 'assets/php/session.php'; ?>
<?php
  if ($admin == "0") {
    header('location:login.php');
            die;
echo '  <script>
alert("You are not an admin")
</script>';
  }
  
  
  ?>
  
  <!-- Open button -->
  <button id="openBtn" onclick="openNav()"><i class="fas fa-bars"></i></button>

  <!-- Side navigation -->
  <div id="mySidenav" class="sidenav">
    <a href="dashboard.php">Home</a>
    <a href="users.php">Users</a>
    <a href="admin.php"> Admin</a>
    <a href="#">Dispatch</a>
    <a href="report.php">Reports</a>
    <a href="#">Emergency Contacts</a>
    <a href="">Maps</a>
    <a href="">Chats</a>
    <a href="">Send Alerts</a>
    <a href="admin_profile.php">profile</a>
    <a href="#">Logout</a>
    <a href="javascript:void(0);" class="closebtn" onclick="closeNav()">&times;</a>
  </div>

  <!-- Page content -->
  <div class="container">
    <h1 class="text-center ">Welcome live savers</h1>

  </div>

  <script>
    // Open side navigation
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    // Close side navigation
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>
</body>

</html>