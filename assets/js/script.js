// Get the user's location
function getUserLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showUserLocation);
  } else {
    console.log("Geolocation is not supported by this browser.");
  }
}

// Callback function to handle the user's location
function showUserLocation(position) {
  const latitude = position.coords.latitude;
  const longitude = position.coords.longitude;

  // Display the location in the input field
  const locationInput = document.getElementById("location-input");
  locationInput.value = latitude + ", " + longitude;
}

// Call the function to get the user's location
getUserLocation();

$(document).ready(function() {
  const video = document.getElementById('video');
  const canvas = document.getElementById('canvas');
  const captureButton = document.getElementById('capture-btn');
  const stopButton = document.getElementById('stop-btn');

  // Set video element styles
  video.style.width = '100%';
  video.style.height = 'auto';
  video.style.objectFit = 'cover';

  let stream;
  let mediaStreamTrack;

  function initializeCamera() {
      navigator.mediaDevices.getUserMedia({ video: true })
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

      // Draw the current video frame onto the canvas
      const context = canvas.getContext('2d');
      context.drawImage(video, 0, 0, canvas.width, canvas.height);

      // Get the image data from the canvas as a base64-encoded string
      const imageData = canvas.toDataURL('image/jpeg');

      // Send the image data to the server using jQuery AJAX
      $.ajax({
          type: 'POST',
          url: 'assets/php/proccess.php',
          data: {
              image: imageData
          },
          success: function(response) {
              console.log('Image saved and uploaded successfully.');
              console.log(response);
          },
          error: function(error) {
              console.log('Error saving image:', error);
          },
          dataType: 'json', // Specify the expected response data type as JSON
          contentType: 'application/json' // Specify the content type of the request
      });
  }

  // Function to stop the camera
  function stopCamera() {
      if (mediaStreamTrack) {
          mediaStreamTrack.stop();
          video.srcObject = null;
          mediaStreamTrack = null;
      }
  }

  // Check if camera permission is already granted
  if (localStorage.getItem('cameraPermission') === 'granted') {
      initializeCamera();
  } else {
      // Request camera permission
      if ('permissions' in navigator) {
          navigator.permissions.query({ name: 'camera' })
              .then((permissionStatus) => {
                  if (permissionStatus.state === 'granted') {
                      localStorage.setItem('cameraPermission', 'granted');
                      initializeCamera();
                  } else if (permissionStatus.state === 'prompt') {
                      permissionStatus.onchange = function () {
                          if (permissionStatus.state === 'granted') {
                              localStorage.setItem('cameraPermission', 'granted');
                              initializeCamera();
                          }
                      };
                  }
              })
              .catch((error) => {
                  console.log('Error accessing camera:', error);
              });
      } else {
          // Handle older browsers that do not support the Permissions API
          alert('Please grant camera permission to proceed.');
      }
  }

  // Attach event listeners to the capture and stop buttons
  captureButton.addEventListener('click', captureImage);
  stopButton.addEventListener('click', stopCamera);
});
