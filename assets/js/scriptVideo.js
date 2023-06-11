$(document).ready(function() {
  const captureBtn = document.getElementById('capture-btn');
  const stopBtn = document.getElementById('stop-btn');
  const videoPreview = document.getElementById('video-preview');
  let mediaStream;
  let mediaRecorder;
  let chunks = [];

  // ...

  // Handle capturing the video
  captureBtn.addEventListener('click', function() {
    if (mediaStream) {
      // Stop the previous video stream if it exists
      mediaStream.getTracks().forEach(function(track) {
        track.stop();
      });
    }

    navigator.mediaDevices.getUserMedia({ video: true })
      .then(function(stream) {
        mediaStream = stream;
        videoPreview.srcObject = mediaStream;

        return new Promise(function(resolve) {
          videoPreview.onloadedmetadata = function() {
            videoPreview.play()
              .then(function() {
                resolve();
              })
              .catch(function(error) {
                console.log('Error playing video:', error);
                resolve(); // Resolve the promise even if there was an error playing the video
              });
          };
        });
      })
      .then(function() {
        mediaRecorder = new MediaRecorder(mediaStream);
        chunks = [];

        mediaRecorder.ondataavailable = function(event) {
          chunks.push(event.data);
        };

        mediaRecorder.onstop = function() {
          const videoBlob = new Blob(chunks, { type: 'video/webm' });
          sendVideoToServer(videoBlob);
          videoPreview.srcObject = null;
          stopBtn.disabled = true;
          captureBtn.disabled = false;
        };

        mediaRecorder.start();

        stopBtn.disabled = false;
        captureBtn.disabled = true;
      })
      .catch(function(error) {
        console.log('Error accessing camera:', error);
      });
  });

  // ...
});

  // ...



  
  $(document).ready(function() {
    const captureBtn = document.getElementById('capture-btn');
    const videoPreview = document.getElementById('video-preview');
  
    // ...
  
    // AJAX function to send the video to the server
    function sendVideoToServer(videoBlob) {
      const formData = new FormData();
      formData.append('video', videoBlob, 'video.webm');
  
      $.ajax({
        url: 'assets/php/save_video.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
          console.log(response);
        },
        error: function(xhr, status, error) {
          console.log('Error:', error);
        }
      });
    }
  
    // ...
  
    // Handle capturing the video and sending it to the server
    captureBtn.addEventListener('click', function() {
      navigator.mediaDevices.getUserMedia({ video: true })
        .then(function(mediaStream) {
          videoPreview.srcObject = mediaStream;
          videoPreview.play();
  
          const mediaRecorder = new MediaRecorder(mediaStream);
          const chunks = [];
  
          mediaRecorder.ondataavailable = function(event) {
            chunks.push(event.data);
          };
  
          mediaRecorder.onstop = function() {
            const videoBlob = new Blob(chunks, { type: 'video/webm' });
            sendVideoToServer(videoBlob);
          };
  
          mediaRecorder.start();
  
          setTimeout(function() {
            mediaRecorder.stop();
            videoPreview.srcObject = null;
          }, 5000); // Stop the recording after 5 seconds (adjust as needed)
        })
        .catch(function(error) {
          console.log('Error accessing camera:', error);
        });
    });
  
    // ...
  });
  