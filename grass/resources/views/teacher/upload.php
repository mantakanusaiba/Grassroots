<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Lecture</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f8f9fa; margin: 0; padding: 0; }
        .container { width: 40%; margin: 50px auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); }
        h2 { text-align: center; color: #343a40; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, textarea { width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; }
        .btn { display: block; width: 100%; padding: 10px; background: #343a40; color: #fff; border: none; border-radius: 4px; margin-top: 15px; cursor: pointer; }
        .btn:hover { background: #495057; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Upload Lecture</h2>
        <form action="{{ route('teacher.upload.store') }}" method="POST" enctype="multipart/form-data">
    <label for="title">Lecture Title</label>
    <input type="text" name="title" required>

    <label for="description">Description</label>
    <textarea name="description"></textarea>

    <label for="video">Upload Video (MP4, MOV, AVI, WMV only)</label>
    <input type="file" name="video" accept="video/*" required>

    <button type="submit" class="btn">Upload</button>
</form>

    </div>
</body>
</html>
