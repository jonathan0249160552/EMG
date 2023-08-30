<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<style>
  body {
    overflow: hidden;
  }

  .myicon {
    position: fixed;
    top: 45%;
    left: 45%;
  }


  @media screen and (max-width: 600px) {

    .myicon {
      position: fixed;
      top: 46%;
      left: 35%;
    }
  }

  .shortcut {
    font-weight: bold;
    top: 40%;
    position: fixed;
    color: white;

  }
</style>
</style>

<body>
  <?php require 'nav.php'; ?>

  <marquee behavior="" direction="left" class="shortcut">Use the siren button for quick Emergency reporting <i class="fas fa-hand-point-down"></i></marquee>
  <!-- <marquee behavior="" direction="left"></marquee> -->

  <div class="myicon">
    <a href="report_picture.php" class="mybutton"><img src="assets/images/1.gif" width="100px" class="rounded-circle shadow border" alt=""></a>
  </div>
  <div class="blue-section">
    <div class="container">
      <h1>Emergency Reporting App</h1>
      <p>
        <i class="fas fa-ambulance icon"></i>
        <i class="fas fa-temperature-high"></i>
        <i class="fas fa-heartbeat"></i>
        <i class="fas fa-fire-extinguisher"></i>
        <i class="fas fa-radiation"></i>
      </p>
    </div>
  </div>

  <div class="red-section">
    <div class="container">
      <!-- <h1>Emergency Reporting App</h1> -->
      <!-- <hr> -->
      <p class="myp">
        <i class="fas fa-exclamation-triangle icon"></i>
        <!-- <p> Urgent situations require immediate attention.</p> -->

      </p>
      <p class="text-center"> Report emergencies and get help quickly.</p>
    </div>
  </div>





  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
  <script src="assets/js/scriptNav.js"></script>
</body>

</html>