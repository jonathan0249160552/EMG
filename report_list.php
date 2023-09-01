<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets//datatables/datatables.min.css">
</head>

<body>
  <?php require 'nav.php'; ?>

  
<div class="container " style="margin-top: 100px;">
  <div class="card">
    <div class="card">
      <div class="card-body">
      
  <table id="reportsTable" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Reported By</th>
        <th>Date</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <!-- Report rows will be dynamically added here -->
    </tbody>
  </table>
<script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
<script src="assets/datatables/datatables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#reportsTable').DataTable();
    });
  </script>


  <script>
    $(document).ready(function() {
      // Sample report data (replace with actual data from your app)
      var reportsData = [{
          id: 1,
          reportedBy: "John Doe",
          date: "2023-05-15",
          description: "Emergency at location XYZ"
        },
        {
          id: 2,
          reportedBy: "Jane Smith",
          date: "2023-05-14",
          description: "Fire incident at location ABC"
        },
        // Add more report objects as needed
      ];

      var table = $('#reportsTable').DataTable();

      reportsData.forEach(function(report) {
        var actions = '<a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>' +
          '<a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>';

        table.row.add([
          report.id,
          report.reportedBy,
          report.date,
          report.description,
          actions
        ]).draw();
      });
    });
  </script>


      </div>
      <div class="card-footer">
        Footer
      </div>
    </div>
  </div>
</div>
</body>

</html>