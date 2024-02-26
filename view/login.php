<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Login</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@1.3.3/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  
  <style>
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      background-color: #F7F7F7;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 0 6px rgba(0, 0, 0, 0.23);
      border-radius: 10px;
      padding: 40px;
      width: 400px;
      text-align: center;
    }

    .title {
      font-size: 24px;
      font-weight: 600;
      margin-bottom: 20px;
    }

    .form-control {
      margin-bottom: 20px;
      width: 100%;
    }

    .form-control input {
      background-color: #FFFFFF;
      border: 1px solid #EBEBEB;
      border-radius: 10px;
      height: 50px;
      padding: 10px;
      width: 100%;
    }

    .form-control button {
     
      border: none;
      border-radius: 10px;
      color: #FFFFFF;
      cursor: pointer;
      height: 50px;
      width: 100%;
    }
  </style>
</head>

<body class="bg-gray-300">
  <div class="container">
    <div class="card">
      <div class="title font-sans">Form Login</div>
      <div class="title font-sans">KUE KERING</div>
      <form action="login.php" method="POST">
        <div class="form-control">
          <label for="uname">Username:</label>
          <input type="text" name="uname" placeholder="Username">
        </div>
        <div class="form-control">
          <label for="pw">Password:</label>
          <input type="password" name="pw" placeholder="Password">
        </div>
        <div class="form-control bg-slate-800">
          <button type="submit" name="submit">Login</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
