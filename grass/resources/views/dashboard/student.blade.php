<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        header {
            background-color: #343a40;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header .dashboard-icon {
            cursor: pointer;
            font-size: 20px;
        }

        .dashboard-container {
            display: flex;
            margin: 20px;
        }

        .sidebar {
            width: 200px;
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            display: none;
            flex-shrink: 0;
        }

        .sidebar.active {
            display: block;
        }

        .sidebar .menu {
            list-style: none;
            padding: 0;
        }

        .sidebar .menu li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .sidebar .menu li a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 8px;
            border-radius: 4px;
            width: 100%;
        }

        .sidebar .menu li a.active {
            font-weight: bold;
            background-color: #17a2b8;
        }

        .sidebar .menu li a:hover {
            background-color: #495057;
        }

        .sidebar .menu li i {
            margin-right: 10px;
            font-size: 18px;
        }

        .content {
            flex-grow: 1;
            margin-left: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Student Dashboard</h1>
        <i class="fas fa-bars dashboard-icon" onclick="toggleSidebar()"></i>
    </header>

    <div class="dashboard-container">
        <div class="sidebar" id="sidebar">
            <ul class="menu">
                <li><a href="{{ route('student.dashboard') }}" class="active"><i class="fas fa-home"></i>Dashboard</a></li>
                <li><a href="{{ route('student.admission') }}"><i class="fas fa-user-plus"></i>Admission</a></li>
                <li><a href="{{ route('student.lecture') }}"><i class="fas fa-book"></i>Lecture</a></li>
                <li><a href="{{ route('student.assignment') }}"><i class="fas fa-tasks"></i>Assignment</a></li>
                <li><a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Welcome to the Student Dashboard</h1>
            <p>Access learning materials and view your assignments here.</p>
        </div>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Your App Name. All rights reserved.</p>
    </footer>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
        }
    </script>
</body>
</html>
