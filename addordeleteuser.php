<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mysnehabhavan";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM userinfo";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='container'>";
    echo "<h2>Username:</h2>";
    echo "<h3 class='username'>" . $row["username"] . "</h3>";
    echo "<h2>Password:</h2>";
    echo "<h3 class='password'>" . $row["password"] . "</h3>";
    echo "<form method='POST' action=''>";
    echo "<input type='hidden' name='username' value='" . $row["username"] . "'/>";
    echo "<input type='submit' name='delete' value='Delete User'/>";
    echo "</form>";
    echo "</div>";
}

if (isset($_POST["delete"])) {
    $username = $_POST["username"];
    $sql = "DELETE FROM userinfo WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "User deleted successfully.";
    } else {
        echo "Error deleting user.";
    }
    // Redirect to the same page to avoid resubmission on refresh
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

if (isset($_POST["add"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Password validation using regular expression
    $passwordPattern = "/^(?=.*[a-zA-Z])(?=.*[0-9]).{6,}$/";
     $checkQuery="SELECT * FROM userinfo WHERE username='$username'";
     $checkResult=mysqli_query($conn, $checkQuery);
     if(mysqli_num_rows($checkResult)==0){
    if (preg_match($passwordPattern, $password)) {
        $sql = "INSERT INTO userinfo (username, password) VALUES ('$username', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "User added successfully.";
            // Redirect to the same page to avoid resubmission on refresh
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Error adding user.";
        }
    } else {
        echo "Password must be at least 6 characters long and include both letters and numbers.";
    }
}
}


?>

<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 500px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }

        h3 {
            margin: 10px 0;
            font-size: 16px;
            color: #666;
        }

        form {
            margin-top: 20px;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Enter Username" required/>
        <input type="password" name="password" placeholder="Enter Password" required/>
        <input type="submit" name="add" value="Add User"/>
    </form>
</body>
</html>