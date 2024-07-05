<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mysnehabhavan";

// Create a database connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare and execute the query to retrieve specific details
$sql = "SELECT FatherName, MotherName, FatherSalary, MotherSalary, LandArea FROM participantdetails WHERE LandArea > 5";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output the data in a table format with CSS styling
    echo '<div class="table-container">';
    echo '<div class="table-wrapper">';
    echo '<table class="data-table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Father Name</th>';
    echo '<th>Mother Name</th>';
    echo '<th>Father Salary</th>';
    echo '<th>Mother Salary</th>';
    echo '<th>Land Area</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
   

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['FatherName'] . '</td>';
        echo '<td>' . $row['MotherName'] . '</td>';
        echo '<td>' . $row['FatherSalary'] . '</td>';
        echo '<td>' . $row['MotherSalary'] . '</td>';
        echo '<td>' . $row['LandArea'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    echo '</div>';
    echo '<a href="kottayamdwnld.php" class="download-button" style="margin-right: 10px;">Download</a>';
    echo '<a href="reports.php" class="download-button">REPORTS</a>';
} else {
    echo "No results found";
}

// Close the database connection
mysqli_close($conn);
?>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .table-container {
        width: 100%;
        max-height: 400px;
        overflow: auto;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .table-wrapper {
        min-width: 100%;
    }

    .data-table {
        width: 100%;
        border-collapse: collapse;
    }

    .data-table thead th {
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        padding: 8px;
        color: #333;
        font-weight: bold;
    }
    .backtoreports-button {
  display: inline-block;
  position: fixed;
  top: 10px;
  left: 10px;
  padding: 10px 20px;
  background-color: #4CAF50; /* Green color */
  color: #fff;
  text-decoration: none;
  border-radius: 6px;
  font-weight: bold;
  font-size: 16px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
  transition: background-color 0.3s ease, transform 0.2s ease; /* Add transitions for smooth effects */

  /* Hover effect */
  &:hover {
    background-color: #45a049; /* Darker green color on hover */
    transform: scale(1.05); /* Increase size on hover */
  }}

    .data-table tbody td {
        border: 1px solid #ccc;
        padding: 8px;
    }

    .data-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .data-table tbody tr:hover {
        background-color: #eaf6ff;
    }

    .data-table tbody td:nth-child(1) {
        background-color: #e8f0fe;
    }

    .data-table tbody td:nth-child(2) {
        background-color: #f7f9dc;
    }

    .data-table tbody td:nth-child(3) {
        background-color: #fef0e7;
    }

    .data-table tbody td:nth-child(4) {
        background-color: #fde8ee;
    }
    .download-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }
</style>

