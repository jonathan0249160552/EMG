<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Camera Image Upload</title>
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <?php

$post_code = bin2hex(random_bytes(15));
?>
  <?php require 'nav.php' ?>
  <div class="container"><br><br><br>
    <h2><i class="fas fa-ambulance"></i> Report Emergency</h2>

  </div>
  <div class="container">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <h5 class="mb-0">
          <i class="fas fa-exclamation-triangle mr-2"></i> Emergency Reporting
        </h5>
        <!-- <h5 class="border rounded p-2"><a href="reporting.php"><i class="fas fa-file-audio"></i> Use audio Instead</a></h5> -->
      </div>
      <div class="card-body">

        <div class="request-form">
          <form id="reportForm" method="post" action="#">
            <div class="form-group">
              <label for="name"><i class="fas fa-user"></i> Name:</label>
              <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
              <label for="phone"><i class="fas fa-phone"></i> Phone:</label>
              <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>

             <div class="form-group">
              <label for="phone"><i class="fas fa-phone"></i> Emergency Contact:</label>
              <input type="text" id="contact" name="contact" placeholder="Enter your phone number" required>
            </div>

            <div class="form-group">
              <label for="location"><i class="fas fa-map-marker-alt"></i> Location:</label>
              <input type="text" name="location" id="">
            </div>
            <div class="form-group">
              <label for="locationGps"><i class="fas fa-map-marker-alt"></i> GPS coordinate</label>
              <input type="text" id="location-input" name="gps" readonly>
            </div>

            <div class="form-group">
              <label for="locationGps"><i class="fas fa-exclamation-triangle"></i> Select Type of Emergency</label>
              <select id="emergency-type" name="emg_type"lass="form-control-lg" required>
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
              <textarea class="form-control" id="description" name="description"  rows="3" placeholder="Enter description" ></textarea>
            </div>
            <div class="form-group mt-2">
              <input type="hidden" name="post_code" id="post_code" value="<?=$post_code?>">
              <div class="alert"></div>
              <input type="submit" value="Submit report" class="submitBtn btn btn-primary">
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

  <video id="video" autoplay></video>
  <canvas id="canvas" style="display: none;"></canvas>
  <div class="captured"></div>
  <button id="capture-btn" class="btn btn-success">Capture and Upload Image</button>
<script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/sweetalert2.min.js"></script>
  <script>
    $(document).ready(function() {

	$(".submitBtn").click(function(e) {
		if ($("#reportForm")[0].checkValidity()) {
			e.preventDefault();

			$(".submitBtn").val('Please Wait...');
			$.ajax({
				url: 'assets/php/submit_action.php',
				method: 'post',
				data: $("#reportForm").serialize() + '&action=reporting',
				success: function(response) {
					console.log(response);
					$(".submitBtn").val('Submit Report');
				
						$(".alert").html(response);

					
				}
			});
		}
	});



      const video = document.getElementById('video');
      const canvas = document.getElementById('canvas');
      const captureButton = document.getElementById('capture-btn');
      var post_code = document.getElementById('post_code').value
      // Set video element styles
      video.style.width = '100%';
      video.style.height = 'auto';
      video.style.objectFit = 'cover';

      let stream;
      let mediaStreamTrack;

      function initializeCamera() {
        navigator.mediaDevices.getUserMedia({
            video: true
          })
          .then((streamObj) => {
            stream = streamObj;
            video.srcObject = stream;
            mediaStreamTrack = stream.getVideoTracks()[0];
          })
          .catch((error) => {
            console.log('Error accessing camera:', error);
          });
      }

      // Function to capture and process the image
      function captureImage(event) {
        event.preventDefault();

        const context = canvas.getContext('2d');
        context.drawImage(video, 0, 0, canvas.width, canvas.height);

        const imageData = canvas.toDataURL('image/jpeg');
        const data = {
          imageData: imageData,
      post_code: post_code
   
    };

        // Send the image data to the server using AJAX
        $.ajax({
          type: 'POST',
          url: 'assets/php/proccess.php', // Replace with your PHP endpoint
          data: JSON.stringify(data),
          success: function(response) {
            console.log('Image saved successfully.');
            alert("Image captured")
            console.log(response);
          },
          error: function(error) {
            console.log('Error saving image:', error);
          }
        });
      }

      // Attach event listeners to the capture button
      captureButton.addEventListener('click', captureImage);

      // Check and initialize the camera
      if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        initializeCamera();
      } else {
        console.log('getUserMedia is not supported on this browser');
      }
    });
  </script>
</body>

</html>