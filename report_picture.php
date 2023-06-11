<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Ambulance Requests</title>
</head>
<style>
    .container {
      margin-top: 50px;
    }

    .card {
      border-radius: 10px;
    }

    .card-header {
      background-color: #333;
      color: #fff;
    }

    .card-body {
      background-color: #f4f4f4;
    }

    .btn-report {
      background-color: #dc3545;
      color: #fff;
      font-weight: bold;
    }

    #recording-indicator {
  width: 10px;
  height: 10px;
  background-color: red;
  border-radius: 50%;
  display: none;
}

  </style>

<body>
<?php require 'nav.php'?>
  <div class="container">
    <h2><i class="fas fa-ambulance"></i> Report Emergency</h2>
    
  </div>
  <div class="container">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <h5 class="mb-0">
          <i class="fas fa-exclamation-triangle mr-2"></i> Emergency Reporting
        </h5>
        <h5 class="border rounded p-2"><a href="reporting.php"><i class="fas fa-file-audio"></i> Use audio Instead</a></h5>
      </div>
      <div class="card-body">
        
      <div class="request-form">
      <form>
        <div class="form-group">
          <label for="name"><i class="fas fa-user"></i> Name:</label>
          <input type="text" id="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
          <label for="phone"><i class="fas fa-phone"></i> Phone:</label>
          <input type="text" id="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="form-group">
          <label for="location"><i class="fas fa-map-marker-alt"></i> Location:</label>
          <input type="text" name="location" id="">
        </div>
        <div class="form-group">
          <label for="locationGps"><i class="fas fa-map-marker-alt"></i> GPS coordinate</label>
          <input type="text" id="location-input" readonly>
        </div>

        <div class="form-group">
            <label for="locationGps"><i class="fas fa-exclamation-triangle"></i> Select Type of Emergency</label>
            <select id="emergency-type" class="form-control-lg" required>
              <option value="fire">Fire</option>
              <option value="medical">Medical Emergency</option>
              <option value="accident">Accident</option>
              <option value="natural-disaster">Natural Disaster</option>
              <option value="chemical-spill">Chemical Spill</option>
              <option value="gas-leak">Gas Leak</option>
              <option value="earthquake">Earthquake</option>
              <option value="flood">Flood</option>
              <option value="power-outage">Power Outage</option>
              <option value="terrorist-attack">Terrorist Attack</option>
            </select>
          </div>
          <div class="form-group">
            <label for="description">
              <i class="fas fa-comment"></i> Description
            </label>
            <textarea class="form-control" id="description" rows="3" placeholder="Enter description" required></textarea>
          </div>
        
        <div class="form-group mt-2">
          <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Send Report</button>
        </div>
      </form>

      <video id="video" class="my-3 card border border-primary" height="480" autoplay></video>
        <button id="capture-btn" class="btn btn-success">Capture</button>
        <button id="stop-btn" class="btn btn-danger">Close Camera</button>
        <canvas id="canvas" width="640" height="480" style="display: none;"></canvas>

    </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
<script src="assets/js/script.js"></script>
<script src="assets/js/scriptNav.js"></script>

</html>