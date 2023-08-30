<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
<?php require 'nav.php'?>
  <div class="container " style="margin-top: 100px;">
    <div class="col mt-4">
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <strong>Holy guacamole!</strong>
      <hr>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste veritatis sint at quibusdam, expedita magnam aliquid omnis porro tenetur unde?</p>
    </div>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    // Close the alert box when the close button is clicked
    $('.close-btn').click(function() {
      $(this).closest('.emergency-alert').fadeOut();
    });
  </script>
</body>

</html>