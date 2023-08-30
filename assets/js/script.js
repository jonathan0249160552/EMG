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


// // Check if camera permission is already granted
// if (localStorage.getItem('cameraPermission') === 'granted') {
//   initializeCamera();
// } else {
//   // Request camera permission
//   navigator.permissions.query({ name: 'camera' })

//     .then((permissionStatus) => {

//       if (permissionStatus.state === 'granted') {

//         localStorage.setItem('cameraPermission', 'granted');
//         initializeCamera();
//       } else if (permissionStatus.state === 'prompt') {
//         permissionStatus.onchange = function () {
//           if (permissionStatus.state === 'granted') {
//             localStorage.setItem('cameraPermission', 'granted');
//             initializeCamera();
//           }
//         };
//       }
//     })
//     .catch((error) => {
//       console.log('Error accessing camera:', error);
//     });
// }
// // Get references to the necessary elements
// const video = document.getElementById('video');
// const canvas = document.getElementById('canvas');
// const captureButton = document.getElementById('capture-btn');
// const closeButton = document.getElementById('close-btn');
// const stopButton = document.getElementById('stop-btn');
// video.style.width = '100%';
// video.style.height = 'auto';
// video.style.objectFit = 'cover'
// let stream;
// let mediaStreamTrack;
// function initializeCamera() {
//   const video = document.getElementById('video');

//   navigator.mediaDevices.getUserMedia({ video: true })
//   .then((streamObj) => {
//     stream = streamObj;
//     video.srcObject = stream;
//     mediaStreamTrack = stream.getVideoTracks()[0];
//   })
//   .catch((error) => {
//     console.log('Error accessing camera:', error);
//   });
//   // ...
// }


// // Attach click event listeners to the capture and close buttons
// captureButton.addEventListener('click', captureImage);



// // Function to capture and process the image
// function captureImage(event) {
//   // Prevent the default form submission behavior
//   event.preventDefault();

//   // Draw the current video frame onto the canvas
//   canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

//   // Get the image data from the canvas as a base64-encoded string
//   const imageData = canvas.toDataURL('image/jpeg');

//   // Send the image data to the server
//   $.ajax({
//     type: 'POST',
//     url: 'assets/php/proccess.php',
//     data: {
//       image: imageData
//     },
//     success: function (response) {
//       console.log('Image saved successfully.');
//       console.log(response);
//     },
//     error: function (error) {
//       console.log('Error saving image:', error);
//     }
//   });
// }

// // Function to stop the camera
// function stopCamera() {
//   // Stop the media stream and remove it from the video element
//   if (mediaStreamTrack) {
//     mediaStreamTrack.stop();
//     video.srcObject = null;
//     mediaStreamTrack = null; // Reset the mediaStreamTrack variable
//   }
// }
// // Attach click event listener to the capture button
// captureButton.addEventListener('click', captureImage);
// stopButton.addEventListener('click', stopCamera);

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

// Get references to the necessary elements
const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const captureButton = document.getElementById('capture-btn');
const closeButton = document.getElementById('close-btn');
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

  // Send the image data to the server
  fetch('assets/php/proccess.php', {
    method: 'POST',
    body: JSON.stringify({ image: imageData }),
    headers: {
      'Content-Type': 'application/json'
    }
  })
    .then((response) => response.json())
    .then((data) => {
      console.log('Image saved successfully.');
      console.log(data);
    })
    .catch((error) => {
      console.log('Error saving image:', error);
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

// Attach event listeners to the capture and stop buttons
captureButton.addEventListener('click', captureImage);
stopButton.addEventListener('click', stopCamera);
