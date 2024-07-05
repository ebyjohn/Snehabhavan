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
  $_SESSION['employment-status'] = $_POST['employment-status'];
  $_SESSION['monthly-income'] = $_POST['monthly-income'];
  $_SESSION['type-of-work'] = $_POST['type-of-work'];
  $_SESSION['registered-with-employment-exchange'] = isset($_POST['registered-with-employment-exchange']);


  // Redirect to the next page
  header("Location: 4form.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Data Entry Form</title>
  <style>
    .hidden {
      display: none;
    }
  </style>
  <script>
    function toggleFields() {
      var employmentStatus = document.getElementById('employment-status');
      var otherFields = document.getElementById('other-fields');
      
      if (employmentStatus.value === 'unemployed') {
        otherFields.classList.add('hidden');
      } else {
        otherFields.classList.remove('hidden');
      }
    }
  </script>
</head>
<body>
  <div class="header">
    <h2>Employment Information</h2>
    <a href="logout.php" class="logout-button">Logout</a>
  </div>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <link rel="stylesheet" type="text/css" href="home1.css">
    <label for="employment-status">Employment Status:</label>
    <select name="employment-status" id="employment-status" onchange="toggleFields()" required>
      <option value="unemployed">Unemployed</option>
      <option value="employed">Employed</option>
      <option value="selfemployed">Self Employed</option>
    </select><br><br>

    <div id="other-fields" class="hidden">
      <label for="monthly-income">Monthly Income:</label>
      <input type="number" name="monthly-income" id="monthly-income" step="0.01" min="0"><br><br>

      <label for="type-of-work">Type of Work:</label>
      <input type="text" name="type-of-work" id="type-of-work"><br><br>

      <label for="registered-with-employment-exchange">Registered with Employment Exchange:</label>
      <input type="checkbox" name="registered-with-employment-exchange" id="registered-with-employment-exchange"><br><br>
    </div>

    <div class="form-buttons">
      <a href="2ndform.php" class="back-button">Back</a>
      <input type="submit" value="NEXT">
    </div>
  </form>
</body>
</html>
