<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Participant Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .form-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
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

        .card {
            width: 500px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .card-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .data-table th,
        .data-table td {
            padding: 10px;
        }

        .data-table th {
            background-color: #f5f5f5;
            font-weight: bold;
        }

        .data-table td {
            border-bottom: 1px solid #ccc;
        }

        /* Additional CSS styles for the form */
        form {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        select {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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
</head>
<body>

    <div class="container">
        <h1>Participant Details</h1>
        <div class="form-container">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="gender">Select Gender:</label>
                <select id="gender" name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mysnehabhavan";

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the selected gender from the form
            $selectedGender = $_POST['gender'];
            $_SESSION['gender']=$selectedGender;

            // Create a database connection
            $conn = mysqli_connect($servername, $username, $password, $database);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Prepare and execute the query
            $sql = "SELECT DisabilityType, COUNT(*) AS Total FROM participantdetails WHERE `Gender` = '$selectedGender' GROUP BY DisabilityType";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Output the data in a table-like card format with CSS styling
                echo '<div class="card">';
                echo '<div class="card-header">' . $selectedGender . '</div>';
                echo '<div class="card-body">';
                echo '<table class="data-table">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>Disability Type</th>';
                echo '<th>Total</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['DisabilityType'] . '</td>';
                    echo '<td>' . $row['Total'] . '</td>';
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
                echo '</div>';
                echo '</div>';
                echo '<a href="10download.php" class="download-button" style="margin-bottom: 10px;">Download</a>';
                echo '<a href="reports.php" class="download-button">REPORTS</a>';
            } else {
                echo "No results found";
            }

            // Close the database connection
            mysqli_close($conn);
        }
        ?>
    </div>
</body>
</html>
