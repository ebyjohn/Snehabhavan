<!DOCTYPE html>
<html>
<head>
    <style>
        /* Add your CSS styles here as shown in the previous code */
        body {
            font-family: Arial, sans-serif;
        }

        .table-container {
            width: 100%;
            max-height: 800px;
            overflow: auto;
            border: 1px solid #ccc;
            border-radius: 5px;
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

        /* Add additional styles for other table body columns as needed */

        @media print {
            body {
                margin: 0;
                padding: 10mm;
            }

            .table-container {
                max-height: none;
                overflow: visible;
                border: none;
                border-radius: 0;
            }

            .table-wrapper {
                width: 100%;
                overflow: visible;
            }

            .data-table {
                width: 100%;
            }

            .data-table thead th,
            .data-table tbody td {
                border: 1px solid #ccc;
                padding: 5px;
            }

            .data-table tbody tr:nth-child(even) {
                background-color: transparent;
            }
        }
    </style>
</head>
<body>

    <div class="table-container">
        <div class="table-wrapper">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Panchayat</th>
                        <th>Income Range</th>
                        <th>Family Count</th>
                    </tr>
                </thead>
                <tbody>
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

                    // Prepare and execute the query to fetch income-wise distribution
                    $sql = "SELECT panchayat, 
                            CASE 
                                WHEN MonthlyIncome >= 0 AND MonthlyIncome <= 10000 THEN '0 - 10000' 
                                WHEN MonthlyIncome > 10000 AND MonthlyIncome <= 20000 THEN '10001 - 20000' 
                                WHEN MonthlyIncome> 20000 AND MonthlyIncome <= 30000 THEN '20001 - 30000' 
                                ELSE 'Above 30000' 
                            END AS IncomeRange,
                            COUNT(*) AS FamilyCount
                            FROM participantdetails
                            GROUP BY panchayat, IncomeRange";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['panchayat'] . '</td>';
                            echo '<td>' . $row['IncomeRange'] . '</td>';
                            echo '<td>' . $row['FamilyCount'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr>';
                        echo '<td colspan="3">No results found</td>';
                        echo '</tr>';
                    }

                    // Close the database connection
                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <a href="kottayamdwnld.php" class="download-button">Download</a>
    <a href="reports.php" class="download-button">REPORTS</a>
</body>
</html>
