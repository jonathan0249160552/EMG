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
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->
   <script src="assets/js/sweetalert2.all.min.js"></script>
</head>

<body>
  <?php require 'nav.php'; ?>
  <?php require 'assets/php/session.php'; ?>
  
<div class="container " style="margin-top: 100px;">
  <div class="">
    <div class="">
      <div class="card-body displayReports table-responsive">

      </div>
    </div>
  </div>
</div>
<script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
<script src="assets/datatables/datatables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.table').DataTable();
      displayReports();

      //display all note of a user
      function displayReports() {
        $.ajax({
          url: 'assets/php/data_display.php',
          method: 'post',
          data: {
            action: 'displayReportUser'
          },
          success: function(response) {
            $(".displayReports").html(response);

          }
        });
      }

      $('body').on("click", ".reportDelete", function(e) {
        reportDelete = $(this).attr('id');
        alert(reportDelete);
        Swal.fire({
          title: 'Are you sure you want to delete?',
          text: "",

          showCancelButton: true,
          confirmButtonColor: '#b12828',
          cancelButtonColor: '#282ab1',
          confirmButtonText: 'Yes, Delete it'
        }).then((result) => {
          if (result.value) {
            $.ajax({
              url: 'assets/php/action_del.php',
              method: 'post',
              data: {
                reportDelete: reportDelete
              },
              success: function(response) {
                Swal.fire({
                      title: 'Deleted',
                      type: 'success'
                    });
                console.log(response)
                // location.reload()
              }
            });

          }
        })
    })
});
  </script>
</body>

</html>