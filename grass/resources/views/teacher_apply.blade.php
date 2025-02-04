<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply as a Teacher</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f8f9fa; margin: 0; padding: 0; }
        .container { width: 40%; margin: 50px auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); }
        h2 { text-align: center; color: #343a40; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, select { width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; }
        .btn { display: block; width: 100%; padding: 10px; background: #343a40; color: #fff; border: none; border-radius: 4px; margin-top: 15px; cursor: pointer; }
        .btn:hover { background: #495057; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Apply as a Teacher</h2>
        <form action="{{ route('teacher.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" required>

            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" required>

            <label for="birthday">Date of Birth</label>
            <input type="date" name="birthday" required>

            <label for="residence">Place of Residence</label>
            <input type="text" name="residence" required>

            <label for="phone">Phone Number</label>
            <input type="tel" name="phone" pattern="[0-9]{10}" placeholder="Enter 10-digit phone number" required>

            <label for="email">Email</label>
            <input type="email" name="email" required>

            <label for="department">Department</label>
            <select name="department" required>
                <option value="" disabled selected>Select Department</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Science">Science</option>
                <option value="English">English</option>
                <option value="History">History</option>
                <option value="Computer Science">Computer Science</option>
            </select>

            <label for="cv">Upload CV (PDF only)</label>
            <input type="file" name="cv" accept="application/pdf" required>

            <button type="submit" class="btn">Submit Application</button>
        </form>
    </div>
</body>
</html>
