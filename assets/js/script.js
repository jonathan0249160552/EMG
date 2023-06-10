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


  // Check if camera permission is already granted
if (localStorage.getItem('cameraPermission') === 'granted') {
  initializeCamera();
} else {
  // Request camera permission
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
}
  // Get references to the necessary elements
const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const captureButton = document.getElementById('capture-btn');
const closeButton = document.getElementById('close-btn');
video.style.width = '100%';
video.style.height = 'auto';
video.style.objectFit = 'cover'
let stream;
function initializeCamera() {
    const video = document.getElementById('video');
  
    navigator.mediaDevices.getUserMedia({ video: true })
      .then((stream) => {
        video.srcObject = stream;
      })
      .catch((error) => {
        console.log('Error accessing camera:', error);
      });
  
    // Rest of your capture logic
    // ...
  }

// // Function to capture and process the image
// function captureImage() {
//   // Draw the current video frame onto the canvas
//   canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
  
//   // Get the image data from the canvas as a base64-encoded string
//   const imageData = canvas.toDataURL('image/jpeg');

//   // Send the image data to the server
//   $.ajax({
//     type: 'POST',
//     url: 'assets/php/process.php',
//     data: {
//       image: imageData
//     },
//     success: function(response) {
//       console.log('Image saved successfully.');
//     },
//     error: function(error) {
//       console.log('Error saving image:', error);
//     }
//   });
// }



// Attach click event listeners to the capture and close buttons
captureButton.addEventListener('click', captureImage);



// Function to capture and process the image
function captureImage(event) {
    // Prevent the default form submission behavior
    event.preventDefault();
  
    // Draw the current video frame onto the canvas
    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
    
    // Get the image data from the canvas as a base64-encoded string
    const imageData = canvas.toDataURL('image/jpeg');
  
    // Send the image data to the server
    $.ajax({
      type: 'POST',
      url: 'assets/proccess.php',
      data: {
        image: imageData
      },
      success: function(response) {
        console.log('Image saved successfully.');
      },
      error: function(error) {
        console.log('Error saving image:', error);
      }
    });
  }

//   // Function to close the camera
// function closeCamera() {
//     // Stop the media stream and remove it from the video element
//     if (stream) {
//       const tracks = stream.getTracks();
//       tracks.forEach(track => track.stop());
//       video.srcObject = null;
//     }
//   }

  // Function to handle close button click
function closeCapture(event) {
    event.preventDefault(); // Prevent page refresh
  
    // Add your close button logic here
  }

  // Function to handle close button click
function closeCapture(event) {
    event.preventDefault(); // Prevent page refresh
  
    if (stream) {
        const tracks = stream.getTracks();
        tracks.forEach(track => track.stop());
        video.srcObject = null;
      }
  }
  
  // Attach click event listener to the capture button
  captureButton.addEventListener('click', captureImage);
  closeButton.addEventListener('click', closeCapture);