<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  
  <title>Get User's Device Location</title>
</head>
<body>
  <h1>Get User's Device Location</h1>

  <button onclick="getUserLocation()">Get Location</button>
  <button onclick="openLocationOnGoogleMaps()">Open Location on Google Maps</button>

  <script>
    var latitude;
    var longitude;

  
    function openLocationOnGoogleMaps() {
      if (latitude && longitude) {
        var url = 'https://www.google.com/maps/search/?api=1&query=' + latitude + ',' + longitude;
        window.open(url, '_blank');
      } else {
        alert('Location not yet acquired. Click "Get Location" first.');
      }
    }
  </script>

</body>
</html>