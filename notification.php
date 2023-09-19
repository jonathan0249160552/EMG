<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/sweetalert2.all.min.js"></script>

</head>

<body>
    <?php require 'nav.php'?>
    <?php require 'assets/php/session.php'; ?>

    <div class="container " style="margin-top: 100px;">
        <div class="col mt-4">
            <div class="displayAllNotification">
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Holy guacamole!</strong>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste veritatis sint at quibusdam,
                        expedita magnam aliquid omnis porro tenetur unde?</p>
                </div>
            </div>

        </div>
    </div>

    <script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
<script src="assets/datatables/datatables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.table').DataTable();
      displayAllNotification();

      //display all note of a user
      function displayAllNotification() {
        $.ajax({
          url: 'assets/php/data_display.php',
          method: 'post',
          data: {
            action: 'displayAllNotification'
          },
          success: function(response) {
            $(".displayAllNotification").html(response);

          }
        });
      }

      $('body').on("click", ".notificationDelete", function(e) {
        notificationDelete = $(this).attr('id');
        // alert(notificationDelete);
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
                notificationDelete: notificationDelete
              },
              success: function(response) {
                Swal.fire({
                      title: 'Deleted',
                      type: 'success'
                    });
                console.log(response)
                location.reload()
              }
            });

          }
        })
    })
});
  </script>
</body>

</html>