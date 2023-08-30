<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<style>
  body{
    overflow: hidden;
  }
  .videoContainer{
    margin-top:60px ;
  }
</style>
<body>
  <?php require 'nav.php' ?>

  <div class="container">
    <div class=" w-100  card videoContainer shadow">
      <div class="card-header bg-info d-flex justify-content-between">
        <h5 class="mb-0">
          <i class="fas fa-exclamation-triangle mr-2"></i> Emergency Reporting
        </h5>
        <h5 class="border rounded p-1"><a href="report.php"><i class="fas fa-file-video"></i> Use Image</a></h5>
      </div>


      <div class="card">
        <div class="card-body">
          <video id="video-preview" class="w-100" controls></video>
        </div>
        <div class="card-footer">
          <button id="capture-btn" class="btn border "><i class="text-danger fas fa-dot-circle"></i></button>
          <button id="stop-btn" disabled class="btn btn-primary">Stop Video</button>

        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="assets/js/scriptVideo.js"></script>

</body>

</html>