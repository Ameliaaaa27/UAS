<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f7f7f7;
    font-family: Arial, sans-serif;
  }
  .login-container {
    border: 1px solid #ccc;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type="submit"] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: #45a049;
  }
  .login-container div {
    margin-bottom: 15px;
  }
</style>
</head>
<body>
<div class="login-container">
  <form action="/login" method="post">
    <div>
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="user1">
    </div>
    <div>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="password">
    </div>
    <div>
      <input type="submit" value="Login">
    </div>
  </form>
</div>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/adamhaykalfirdaus/APPS/resources/views/auth/login.blade.php ENDPATH**/ ?>