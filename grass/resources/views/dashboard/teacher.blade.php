<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f8f9fa; }
        header { background-color: #343a40; color: #fff; padding: 10px 20px; display: flex; align-items: center; justify-content: space-between; }
        .dashboard-container { display: flex; margin: 20px; }
        .sidebar { width: 200px; background-color: #343a40; color: #fff; padding: 20px; display: none; flex-shrink: 0; }
        .sidebar.active { display: block; }
        .menu { list-style: none; padding: 0; }
        .menu li { margin-bottom: 10px; display: flex; align-items: center; }
        .menu li a { color: #fff; text-decoration: none; padding: 8px; border-radius: 4px; width: 100%; }
        .content { flex-grow: 1; margin-left: 20px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); }
        footer { background-color: #343a40; color: #fff; text-align: center; padding: 10px 0; position: fixed; bottom: 0; width: 100%; }
    </style>
</head>
<body>
    <header>
        <h1>Teacher Dashboard</h1>
        <i class="fas fa-bars dashboard-icon" onclick="toggleSidebar()"></i>
    </header>
    <div class="dashboard-container">
        <div class="sidebar" id="sidebar">
            <ul class="menu">
                <li><a href="{{ route('teacher.dashboard') }}" class="active"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="{{ route('teacher.upload') }}"><i class="fas fa-upload"></i>Upload Lectures</a></li>
                <li><a href="{{ route('teacher.assignments') }}"><i class="fas fa-tasks"></i>Assignments</a></li>
                <li><a href="{{ route('teacher.lectures') }}"><i class="fas fa-book"></i>Lectures</a></li>
                <li><a href="{{ route('teacher.apply') }}"><i class="fas fa-user-plus"></i> Apply Now</a></li>

                
                
            </ul>
        </div>
        <div class="content">
            <h1>Welcome to the Teacher Dashboard</h1>
            <p>Upload lectures and assignments for students.</p>
        </div>
    </div>
    <footer>
        <p>&copy; {{ date('Y') }} Grassroots. All rights reserved.</p>
    </footer>
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('active');
        }
    </script>
</body>
</html>
