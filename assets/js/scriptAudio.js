// Get references to the button and audio element
const recordButton = document.getElementById('recordButton');
const audioPreview = document.getElementById('audioPreview');

// Variables for audio recording
let mediaRecorder;
let chunks = [];

// Function to start audio recording
function startRecording() {
  // Create a new MediaRecorder instance
  navigator.mediaDevices.getUserMedia({ audio: true })
    .then(function(stream) {
      mediaRecorder = new MediaRecorder(stream);

      // Start recording chunks of audio data
      mediaRecorder.start();

      // Update UI
      recordButton.textContent = 'Stop Recording';
    })
    .catch(function(error) {
      console.log('Error accessing microphone:', error);
    });
}

// Function to stop audio recording
function stopRecording() {
  // Stop the MediaRecorder
  mediaRecorder.stop();

  // Update UI
  recordButton.textContent = 'Record Audio';
}

// Event listener for button click
recordButton.addEventListener('click', function() {
  if (recordButton.textContent === 'Record Audio') {
    startRecording();
  } else {
    stopRecording();
  }
});

// Event listener for data available event of MediaRecorder
mediaRecorder.addEventListener('dataavailable', function(event) {
  chunks.push(event.data);
});

// Event listener for stop event of MediaRecorder
mediaRecorder.addEventListener('stop', function() {
  // Create a blob from the recorded chunks
  const audioBlob = new Blob(chunks, { type: 'audio/wav' });
  
  // Set the audio element's source to the recorded audio
  audioPreview.src = URL.createObjectURL(audioBlob);
});
