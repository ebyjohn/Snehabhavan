<?php
session_start();

// Connect to the MySQL database
$conn = mysqli_connect("localhost", "root", "", "mysnehabhavan");

$inputTaluk = $_SESSION['taluk'];
// Select all data from the `participantdetails` table
$sql = "SELECT * FROM participantdetails WHERE taluk = '$inputTaluk'";
$result = mysqli_query($conn, $sql);

// Set the header for CSV download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="report.csv"');

// Create a file pointer
$output = fopen('php://output', 'w');

// Write the column headers to the CSV file
$columns = $result->fetch_fields();
$columnNames = array_column($columns, 'name');
fputcsv($output, $columnNames);

// Fetch and write the data rows to the CSV file
while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, $row);
}

// Close the file pointer
fclose($output);

// Close the MySQL connection
mysqli_close($conn);
exit;
?>
