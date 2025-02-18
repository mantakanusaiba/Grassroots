<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .profile-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .profile-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 4px solid #007bff;
            object-fit: cover;
            display: block;
            margin: 0 auto;
        }

        h2 {
            margin: 10px 0;
            font-size: 22px;
        }

        p {
            font-size: 16px;
            margin: 5px 0;
        }

        .upload-section {
            margin-top: 20px;
        }

        .upload-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        .upload-btn:hover {
            background-color: #0056b3;
        }

        input[type="file"] {
            display: none;
        }

        .file-label {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .file-label:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="profile-container">
    <h2>My Profile</h2>

    <!-- Display the user's profile image -->
    <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('images/default-profile.jpg') }}" 
         class="profile-image" id="previewImage">

    
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>

    <div class="upload-section">
        <h3>Upload Profile Picture</h3>
        <form action="{{ route('profile.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="profile-image" class="file-label"><i class="fas fa-upload"></i> Choose File</label>
            <input type="file" name="profile_image" id="profile-image" accept="image/*" required onchange="previewFile()">
            <button type="submit" class="upload-btn">Upload</button>
        </form>
    </div>
</div>


<script>
    function previewFile() {
        const preview = document.getElementById('previewImage');
        const file = document.getElementById('profile-image').files[0];
        const reader = new FileReader();

        reader.addEventListener("load", function () {
            preview.src = reader.result;
        }, false);

        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>

</body>
</html>
