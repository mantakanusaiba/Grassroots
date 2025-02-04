<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Student</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body, html {
      height: 100%;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f4f7fa;
    }
    .form-container {
      width: 100%;
      max-width: 900px;
      padding: 20px;
      background-color: white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }
    h1 {
      text-align: center;
      margin-bottom: 30px;
    }
    .form-group {
      display: flex;
      justify-content: space-between;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }
    .form-group div {
      flex: 1;
    }
    .form-control {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }
    .form-control:focus {
      outline: none;
      border-color: #007bff;
    }
    .error-text {
      color: red;
      font-size: 0.875rem;
    }
    button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 1rem;
    }
    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h1>Add New Student</h1>

    @if(session('success'))
      <script>
          alert("{{ session('success') }}");
          window.location.href = "{{ route('dashboard') }}";
      </script>
    @endif

    <form method="POST" action="{{ route('student.store') }}" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <div>
          <label for="student_id">Student ID</label>
          <input type="text" id="student_id" name="student_id" class="form-control" required>
        </div>
      </div>

      <div class="form-group">
        <div>
          <label for="first_name">First Name</label>
          <input type="text" id="first_name" name="first_name" class="form-control" required>
        </div>
        <div>
          <label for="last_name">Last Name</label>
          <input type="text" id="last_name" name="last_name" class="form-control" required>
        </div>
      </div>

      <div class="form-group">
        <div>
          <label for="dob">Date of Birth</label>
          <input type="date" id="dob" name="dob" class="form-control" required>
        </div>
        <div>
          <label for="residence">Residence</label>
          <input type="text" id="residence" name="residence" class="form-control" required>
        </div>
      </div>

      <div class="form-group">
        <div>
          <label for="class_role">Class</label>
          <select id="class_role" name="class_role" class="form-control" required>
            <option value="">Select Class</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
        <div>
          <label for="group">Group</label>
          <select id="group" name="group" class="form-control" required>
            <option value="">Select Group</option>
            <option value="science">Science</option>
            <option value="commerce">Commerce</option>
            <option value="arts">Arts</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <div>
          <label for="phone">Phone</label>
          <input type="text" id="phone" name="phone" class="form-control" required>
        </div>
      </div>

      <button type="submit">Submit</button>
    </form>
  </div>

</body>
</html>
