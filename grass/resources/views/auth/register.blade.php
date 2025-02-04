<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
    }

    body {
      background: #f3f4f6;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .form-container {
      background: #ffffff;
      padding: 30px;
      width: 100%;
      max-width: 450px;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #333333;
      margin-bottom: 20px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    input, select {
      margin-bottom: 15px;
      padding: 12px;
      border-radius: 8px;
      border: 1px solid #cccccc;
      font-size: 14px;
      width: 100%; /* This increases the width of the input and select fields */
    }

    select {
      background: #ffffff;
    }

    button {
      background: #2563eb;
      color: white;
      border: none;
      padding: 14px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s;
    }

    button:hover {
      background: #1d4ed8;
    }

    .form-group {
      margin-bottom: 12px;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
    }

    .note {
      text-align: center;
      margin-top: 10px;
      color: #666;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Register</h1>
    <form method="POST" action="/register">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password" required>
      </div>
      <div class="form-group">
        <label for="role">Role</label>
        <select name="role" id="role" required>
          <option value="" disabled selected>Select Role</option>
          <option value="teacher">Teacher</option>
          <option value="student">Student</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <button type="submit">Register</button>
    </form>
    <p class="note">Already have an account? <a href="/login">Login here</a></p>
  </div>
</body>
</html>
