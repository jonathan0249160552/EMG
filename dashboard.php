<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  <title>Emergency Reporting Dashboard</title>
  <style>
    /* Custom styles for the dashboard */
    .dashboard {
      padding: 20px;
    }

    .card {
      height: 150px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 30px;
    }
  </style>
</head>
<body>
  <?php require 'nav_bar.php'?>
  <div class="dashboard">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card bg-primary text-white">
          <i class="fas fa-exclamation-triangle"></i>
          <div class="card-body">
            Emergency Reports
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card bg-danger text-white">
          <i class="fas fa-ambulance"></i>
          <div class="card-body">
            Ambulance Requests
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card bg-warning text-white">
          <i class="fas fa-fire"></i>
          <div class="card-body">
            Fire Incidents
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card bg-info text-white">
          <i class="fas fa-search-location"></i>
          <div class="card-body">
            Search and Rescue
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card bg-success text-white">
          <i class="fas fa-users"></i>
          <div class="card-body">
            Team Management
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card bg-secondary text-white">
          <i class="fas fa-cogs"></i>
          <div class="card-body">
            Settings
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

