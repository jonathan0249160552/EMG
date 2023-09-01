<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <?php require 'nav.php'; ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
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