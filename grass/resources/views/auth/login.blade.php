<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
    }

    body {
      background: #e2e8f0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    .form-container {
      background: #ffffff;
      padding: 30px;
      width: 100%;
      max-width: 450px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    h2 {
      text-align: center;
      color: #333333;
      margin-bottom: 20px;
    }

    .main-heading {
      text-align: center;
      font-size: 28px;
      color: #0f172a;
      font-weight: bold;
      margin-bottom: 12px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    input {
      margin-bottom: 15px;
      padding: 12px;
      border-radius: 8px;
      border: 1px solid #cccccc;
      font-size: 14px;
      width: 100%; /* This increases the width of the input fields */
    }

    button {
      background: #16a34a;
      color: white;
      border: none;
      padding: 14px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s;
    }

    button:hover {
      background: #15803d;
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
    <h1 class="main-heading">Welcome to GrassRoots</h1>
    <h2>Login</h2>
    <form method="POST" action="/login">
      @csrf
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button type="submit">Login</button>
    </form>
    <p class="note">Don't have an account? <a href="/register">Register here</a></p>
  </div>
</body>
</html>
