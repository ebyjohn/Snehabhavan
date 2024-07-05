<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mysnehabhavan";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM userinfo WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) === 1) {
        $_SESSION['username'] = $username;
        header("Location: home1.php");
        exit;
    } 
    $query = "SELECT * FROM admininfo WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
      die("Query failed: " . mysqli_error($conn));
  }
  if (mysqli_num_rows($result) === 1) {
    $_SESSION['username'] = $username;
    header("Location: admin.php");
    exit;
} 
    else {
      echo '<script>alert("Invalid username or password");</script>';
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body {
      background-image: url('loginimage.jpeg');
      background-size: cover;
      background-position: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <form action="" method="POST" class="login-form">
      <h1>Login</h1>
      <div class="form-group">
      <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">
      </div>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>