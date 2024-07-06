document.getElementById('edit-profile-form').addEventListener('submit', function(event) {
    event.preventDefault();

    // Get the values from the form
    const name = document.getElementById('name').value;
    const status = document.getElementById('status').value;

    // Optionally handle file upload
    const fileInput = document.getElementById('upload');
    const profilePic = document.getElementById('profile-pic');
    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            profilePic.src = e.target.result;
        };
        reader.readAsDataURL(fileInput.files[0]);
    }

    // Save the data locally or send to server here
    localStorage.setItem('profileName', name);
    localStorage.setItem('profileStatus', status);
    if (fileInput.files && fileInput.files[0]) {
        localStorage.setItem('profilePic', profilePic.src);
    }

    // Redirect to dashboard
    window.location.href = 'dashboard.php';
});

// Load the saved profile data on dashboard
window.addEventListener('DOMContentLoaded', function() {
    const profileName = localStorage.getItem('profileName');
    const profileStatus = localStorage.getItem('profileStatus');
    const profilePic = localStorage.getItem('profilePic');

    if (profileName) {
        document.getElementById('profile-name').innerText = profileName;
    }
    if (profileStatus) {
        document.getElementById('profile-status').innerText = profileStatus;
    }
    if (profilePic) {
        document.getElementById('profile-pic').src = profilePic;
    }
});