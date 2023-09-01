document.addEventListener('DOMContentLoaded', function() {
    const captureButton = document.getElementById('captureButton');
    const capturedImage = document.getElementById('capturedImage');
    const imageDataInput = document.getElementById('imageData');
    const imageForm = document.getElementById('imageForm');
    
    captureButton.addEventListener('click', async function() {
        try {
            const stream = await navigator.mediaDevices.getUserMedia({ video: true });
            const mediaStreamTrack = stream.getVideoTracks()[0];
            const imageCapture = new ImageCapture(mediaStreamTrack);
            const photo = await imageCapture.takePhoto();
            
            capturedImage.src = URL.createObjectURL(photo);
            
            // Set the data URL in the hidden input field
            imageDataInput.value = capturedImage.src;
            
            // Optional: You can directly submit the form via AJAX
            sendDataToServer(imageForm);
        } catch (error) {
            console.error('Error accessing camera:', error);
        }
    });

    function sendDataToServer(form) {
        const formData = new FormData(form);

        // Use AJAX to send the form data to the PHP script
        const xhr = new XMLHttpRequest();
        xhr.open('POST', form.action, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log(xhr.responseText);
                    // Handle the response from the server if needed
                } else {
                    console.error('Error uploading image:', xhr.status, xhr.statusText);
                }
            }
        };
        xhr.send(formData);
    }
});
