<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="edit.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="profile-section">
            <div class="profile-picture">
                <img id="profile-pic" src="./profile/profile1.jpg" alt="Profile Picture">
                <label for="upload">
                    <i class="material-icons">camera_alt</i>
                    <input type="file" id="upload" style="display:none;" accept="image/*">
                </label>
            </div>
            <div class="profile-info">
                <form id="edit-profile-form">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" value="Nama Anda">
                    
                    <label for="status">Status</label>
                    <input type="text" id="status" name="status" value="Status Anda">

                    <button type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <script src="edit-profile.js"></script>
</body>
</html>