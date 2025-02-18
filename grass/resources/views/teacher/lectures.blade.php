<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Lectures</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f8f9fa; margin: 0; padding: 0; }
        .container { width: 60%; margin: 50px auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); }
        h2 { text-align: center; color: #343a40; }
        .lecture-item { padding: 10px; border-bottom: 1px solid #ddd; }
        .lecture-item:last-child { border-bottom: none; }
        .btn { display: inline-block; padding: 8px 12px; background: #007bff; color: #fff; border-radius: 4px; text-decoration: none; margin-top: 10px; }
        .btn:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Available Lectures</h2>
        @foreach($lectures as $lecture)
            <div class="lecture-item">
                <h3>{{ $lecture->title }}</h3>
                <p>{{ $lecture->description }}</p>
                <video width="100%" controls>
                    <source src="{{ asset('storage/' . $lecture->video) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <br>
                <a href="{{ asset('storage/' . $lecture->video) }}" download class="btn"><i class="fas fa-download"></i> Download</a>
            </div>
        @endforeach
    </div>
</body>
</html>
