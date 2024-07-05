<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "mysnehabhavan";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT COUNT(*) as count FROM participantdetails";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$participantCount = $row['count'];

?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
  <style>
   body {
    font-family: Arial, sans-serif;
    margin: 40px;
    padding: 0;
    background-image: url('admin_pic.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
.container {
  display: flex;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  background-color: #c9e6c1;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
.sidebar {
  flex: 0 0 200px;
  background-color: #4f824a; 
  color: #fff;
  padding: 20px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
}
.sidebar ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}
.sidebar li {
  margin-bottom: 10px;
}
.sidebar a {
  color: #fff;
  text-decoration: none;
}
.sidebar ul ul {
  display: none; /* Hide the submenu by default */
}
.sidebar ul ul.show {
  display: block; /* Show the submenu when the "show" class is added */
}
.content {
  flex: 1;
  padding: 20px;
  background-color: #f0f0f0;
}
h1 {
  text-align: center;
  margin-bottom: 30px;
  color: #333;
}
.options {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  margin-bottom: 20px;
}
.option {
  flex: 0 0 30%;
  background-color: #e2f1db;
  padding: 25px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  transition: box-shadow 0.3s ease;
  cursor: pointer;
  margin-bottom: 20px;
  text-align: center;
}
.option:hover {
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.option h2 {
  margin-top: 0;
  color: #333;
}
.participant-count {
  margin-top: 20px;
}
.participant-count p {
      color: #555;
      font-size: 20px;
      margin: 0;
    }
.sidebar a,
.option h2 a{
  text-decoration: none;
}
#participantCount{
  color: #551A8B;
}

  </style>
  <script>
    function toggleSubMenu() {
      var submenu = document.getElementById("submenu");
      submenu.classList.toggle("show");
    }
  </script>
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <h2>Menu</h2>
      <ul>
        <li><a href="reports.php"><b>Reports</b></a></li>

        <li><a href="#" onclick="toggleSubMenu()"><b>Manage People</b></a></li>
        <ul id="submenu">
          
          <li><a href="kottayamreport.php">View Participants</a></li>
          <li><a href="editparticipant.php">Edit Participant</a></li>
          <li><a href="delete.php">Delete Participant</a></li>
        </ul>
        <li><a href="logout.php"><b>Logout</b></a></li>
      </ul>
    </div>
    <div class="content">
      <h1>Administration Page</h1>
      <div class="options">
        <div class="option">
          <h2><a href="reports.php">Report Generation</a></h2>
        </div>
        <div class="option">
          <h2><a href="home1.php">Add Participants</a></h2>
        </div>
      
        <div class="option">
          <h2><a href="addordeleteuser.php">Add / Delete User</a></h2>
        </div>
        <div class="option">
      <h2 style="color: #551A8B;">Number of Participants</h2>
      <div class="participant-count">
        <p id="participantCount"><?php echo $participantCount; ?></p>
      </div>
    </div>

      </div>
    </div>
  </div>
</body>
</html>
