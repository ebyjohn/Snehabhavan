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

// Prepare and execute the query with the input Panchayat value
$countSql = "SELECT COUNT(*) AS ChildCount
FROM participantdetails
WHERE (Scholarship = 'Yes' OR HealthInsurance = 'YES' OR Asraya = 'Yes'
    OR KSRTCConcession = 'Yes' OR PrivateBusConcession = 'Yes'
    OR RailwayConcession = 'Yes' OR Aswasakiran = 'Yes')
    AND Age < 18";
$countResult = mysqli_query($conn, $countSql);
$Count = mysqli_fetch_assoc($countResult)["ChildCount"];

// Query to fetch children with vocational training
$detailsSql = "SELECT * FROM participantdetails WHERE (Scholarship = 'Yes' OR HealthInsurance = 'YES' OR Asraya = 'Yes'
OR KSRTCConcession = 'Yes' OR PrivateBusConcession = 'Yes'
OR RailwayConcession = 'Yes' OR Aswasakiran = 'Yes')
AND Age < 18";
$detailsResult = mysqli_query($conn, $detailsSql);

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        /* Add your custom styles here */

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .card {
            width: 400px;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
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
  }
}

        /* Add additional styles for other table body columns as needed */

        .download-button {
            display: block;
            width: 100%;
            text-align: center;
            padding: 10px 0;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        @media print {
    body {
        background-color: #fff;
    }

    .card {
        box-shadow: none;
        border: none;
        padding: 0;
        margin: 0 auto;
        width: 100%;
    }

    .card-title {
        font-size: 20px;
        text-align: center;
    }

    .download-button {
        display: none;
    }

    /* Adjust the table styles for printing */
    .data-table {
        border-collapse: collapse;
    }

    .data-table thead th,
    .data-table tbody td {
        border: 1px solid #ccc;
    }

    .data-table thead th {
        background-color: #f5f5f5;
        font-weight: bold;
    }

    .data-table tbody td {
        background-color: #fff;
    }

    /* Add additional print-specific styles as needed */
}

    </style>
</head>
<body>
<a href="reports.php" class="backtoreports-button">REPORTS</a>
    <div class="card">
        <h2 class="card-title">Total number of children receiving support from any source</h2>
        <h3 style="text-align: center;"><?php echo $Count; ?></h3>
        <table class="data-table">
            <thead>
                <tr>
                    <th>Participant ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <!-- Add additional table header columns as needed -->
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($detailsResult)) { ?>
                    <tr>
                        <td><?php echo $row['ParticipantID']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Age']; ?></td>
                        <!-- Add additional table body columns as needed -->
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="vocationaltrainingdwnld.php" class="download-button">Download</a>
    </div>
</body>
</html>
