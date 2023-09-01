document.addEventListener('DOMContentLoaded', function() {
    const userForm = document.getElementById('userForm');
    
    userForm.addEventListener('submit', function(event) {
        event.preventDefault();
        
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const imageInput = document.getElementById('imageInput');
        
        const formData = new FormData();
        formData.append('name', name);
        formData.append('email', email);
        formData.append('image', imageInput.files[0]);
        
        // Send form data to the server using AJAX
        fetch('assets/php/process.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log(data.message);
            // You can display a success message or perform other actions here
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
