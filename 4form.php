<?php
// Start the session
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Store form data in session variables
 // $_SESSION['healthcare-participant-id'] = $_POST['participant-id'];
  $_SESSION['healthcare-coverage-source'] = $_POST['healthcare-coverage-source'];
  $_SESSION['monthly-healthcare-expenses'] = $_POST['monthly-healthcare-expenses'];
  $_SESSION['healthcare-services-used'] = $_POST['healthcare-services-used'];

  // Redirect to the next page
  header("Location: 6form.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Entry Form</title>
  <link rel="stylesheet" type="text/css" href="home1.css">
</head>
<body>
<div class="header">
  <h2>Healthcare Information</h2>
  <a href="logout.php" class="logout-button">Logout</a>
</div>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <!-- Healthcare Information 
    <label for="participant-id">Participant ID:</label>
    <input type="number" name="participant-id" id="participant-id" ><br><br>-->

    <label for="healthcare-coverage-source">Healthcare Coverage Source:</label>
    <textarea name="healthcare-coverage-source" id="healthcare-coverage-source" rows="4" cols="30" ></textarea><br><br>

    <label for="monthly-healthcare-expenses">Monthly Healthcare Expenses:</label>
    <input type="number" name="monthly-healthcare-expenses" id="monthly-healthcare-expenses" min="0" step="0.01" required><br><br>

    <label for="healthcare-services-used">Healthcare Services Used:</label>
        <select name="healthcare-services-used" id="healthcare-services-used" >
            <option value="scheme1">Scheme 1</option>
            <option value="scheme2">Scheme 2</option>
            <option value="scheme3">Scheme 3</option>
        </select><br><br>
    <div class="form-buttons">
    <a href="3form.php" class="back-button">Back</a>

    <input type="submit" value="NEXT">
     </div>
  </div>
  </form>
</body>
</html>