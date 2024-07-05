<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "mysnehabhavan";

// Check if the form is submitted

    // Create a database connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and execute the query with the input Panchayat value
    $sql = "SELECT * FROM participantdetails ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output the data in a table format with CSS styling
        
        echo '<div class="table-container">';
        echo '<div class="table-wrapper">';
        echo '<table class="data-table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Participant ID</th>';
        echo '<th>Name</th>';
        echo '<th>Age</th>';
        echo '<th>Gender</th>';
        echo '<th>Panchayat</th>';
        echo '<th>Taluk</th>';
        echo '<th>Ward</th>';
        echo '<th>Education Level</th>';
        echo '<th>Vocational Training</th>';
        echo '<th>Address</th>';
        echo '<th>Phone Number</th>';
        echo '<th>Email</th>';
        echo '<th>Birth Certificate</th>';
        echo '<th>Disability Certificate</th>';
        echo '<th>UDID</th>';
        echo '<th>Aadhar Card Number</th>';
        echo '<th>Election ID</th>';
        echo '<th>Ration Card</th>';
        echo '<th>Other Identity</th>';
        echo '<th>Pension</th>';
        echo '<th>PensionAmount</th>';
        echo '<th>Scholarship</th>';
        echo '<th>Health Insurance</th>';
        echo '<th>Asraya</th>';
        echo '<th>KSRTC Concession</th>';
        echo '<th>Private Bus Concession</th>';
        echo '<th>Railway Concession</th>';
        echo '<th>Aswasakiran</th>';
        echo '<th>Other Benefits</th>';
        echo '<th>Membership</th>';
        echo '<th>Bank Account Type</th>';
        echo '<th>AC Holder Name</th>';
        echo '<th>AccountNumber</th>';
        echo '<th>IFSC code</th>';
        echo '<th>Branch Name</th>';
        echo '<th>Disability Type</th>';
        echo '<th>Age of Onset</th>';
        echo '<th>Severity</th>';
        echo '<th>Duration</th>';
        echo '<th>Employment Status</th>';
        echo '<th>Monthly Income</th>';
        echo '<th>Type of Work</th>';
        echo '<th>Registered with Employment Exchange</th>';
        echo '<th>Healthcare Coverage Source</th>';
        echo '<th>Monthly Healthcare Expenses</th>';
        echo '<th>Healthcare Services Used</th>';
        echo '<th>Housing Type</th>';
        echo '<th>Monthly Housing Costs</th>';
        echo '<th>Father Name</th>';
        echo '<th>Mother Name</th>';
        echo '<th>Sibling Name</th>';
        echo '<th>Father Age</th>';
        echo '<th>Mother Age</th>';
        echo '<th>Sibling Age</th>';
        echo '<th>Father Education</th>';
        echo '<th>Mother Education</th>';
        echo '<th>Sibling Education</th>';
        echo '<th>Father Occupation</th>';
        echo '<th>Mother Occupation</th>';
        echo '<th>Sibling Occupation</th>';
        echo '<th>Father Salary</th>';
        echo '<th>Mother Salary</th>';
        echo '<th>Sibling Salary</th>';
        echo '<th>Parent-Pension</th>';
        echo '<th>Parent-Pension-Amount</th>';
        echo '<th>Income Level</th>';
        echo '<th>Ration Card Type</th>';
        echo '<th>Land Ownership Details</th>';
        echo '<th>Family Land Area</th>';
        echo '<th>Family House Details</th>';
        echo '<th>House Land Area</th>';
        echo '<th>Type Of Construction</th>';
        echo '<th>Water Source</th>';
        echo '<th>Cooking Fuel Source</th>';
        echo '<th>Toilet Type</th>';
        // ... add the remaining table header columns here
        echo '<th>Transportation</th>';
        echo '<th>Willing for developing employable skills</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['ParticipantID'] . '</td>';
            echo '<td>' . $row['Name'] . '</td>';
            echo '<td>' . $row['Age'] . '</td>';
            echo '<td>' . $row['Gender'] . '</td>';
            echo '<td>' . $row['panchayat'] . '</td>';
            echo '<td>' . $row['taluk'] . '</td>';
            echo '<td>' . $row['ward'] . '</td>';
            echo '<td>' . $row['EducationLevel'] . '</td>';
            echo '<td>' . $row['VocationalTraining'] . '</td>';
            echo '<td>' . $row['Address'] . '</td>';
            echo '<td>' . $row['PhoneNumber'] . '</td>';
            echo '<td>' . $row['Email'] . '</td>';
            echo '<td>' . $row['BirthCertificate'] . '</td>';
            echo '<td>' . $row['DisabilityCertificate'] . '</td>';
            echo '<td>' . $row['Udid'] . '</td>';
            echo '<td>' . $row['AadharCardNumber'] . '</td>';
            echo '<td>' . $row['ElectionID'] . '</td>';
            echo '<td>' . $row['RationCard'] . '</td>';
            echo '<td>' . $row['OtherIdentity'] . '</td>';
            echo '<td>' . $row['Pension'] . '</td>';
            echo '<td>' . $row['pensionAmount'] . '</td>';
            echo '<td>' . $row['Scholarship'] . '</td>';
            echo '<td>' . $row['HealthInsurance'] . '</td>';
            echo '<td>' . $row['Asraya'] . '</td>';
            echo '<td>' . $row['KSRTCConcession'] . '</td>';
            echo '<td>' . $row['PrivateBusConcession'] . '</td>';
            echo '<td>' . $row['RailwayConcession'] . '</td>';
            echo '<td>' . $row['Aswasakiran'] . '</td>';
            echo '<td>' . $row['OtherBenefits'] . '</td>';
            echo '<td>' . $row['Membership'] . '</td>';
            echo '<td>' . $row['BankAccountType'] . '</td>';
            echo '<td>' . $row['ACHolderName'] . '</td>';
            echo '<td>' . $row['AccountNumber'] . '</td>';
            echo '<td>' . $row['ifscCode'] . '</td>';
            echo '<td>' . $row['BranchName'] . '</td>';
            echo '<td>' . $row['DisabilityType'] . '</td>';
            echo '<td>' . $row['AgeOfOnset'] . '</td>';
            echo '<td>' . $row['Severity'] . '</td>';
            echo '<td>' . $row['Duration'] . '</td>';
            echo '<td>' . $row['EmploymentStatus'] . '</td>';
            echo '<td>' . $row['MonthlyIncome'] . '</td>';
            echo '<td>' . $row['TypeOfWork'] . '</td>';
            echo '<td>' . $row['RegisteredWithEmploymentExchange'] . '</td>';
            echo '<td>' . $row['HealthcareCoverageSource'] . '</td>';
            echo '<td>' . $row['MonthlyHealthcareExpenses'] . '</td>';
            echo '<td>' . $row['HealthcareServicesUsed'] . '</td>';
            echo '<td>' . $row['HousingType'] . '</td>';
            echo '<td>' . $row['MonthlyHousingCosts'] . '</td>';
            echo '<td>' . $row['FatherName'] . '</td>';
            echo '<td>' . $row['MotherName'] . '</td>';
            echo '<td>' . $row['SiblingName'] . '</td>';
            echo '<td>' . $row['FatherAge'] . '</td>';
            echo '<td>' . $row['MotherAge'] . '</td>';
            echo '<td>' . $row['SiblingAge'] . '</td>';
            echo '<td>' . $row['FatherEducation'] . '</td>';
            echo '<td>' . $row['MotherEducation'] . '</td>';
            echo '<td>' . $row['SiblingEducation'] . '</td>';
            echo '<td>' . $row['FatherOccupation'] . '</td>';
            echo '<td>' . $row['MotherOccupation'] . '</td>';
            echo '<td>' . $row['SiblingOccupation'] . '</td>';
            echo '<td>' . $row['FatherSalary'] . '</td>';
            echo '<td>' . $row['MotherSalary'] . '</td>';
            echo '<td>' . $row['SiblingSalary'] . '</td>';
            echo '<td>' . $row['ParentsPension'] . '</td>';
            echo '<td>' . $row['parentsPensionAmount'] . '</td>';
            echo '<td>' . $row['IncomeLevel'] . '</td>';
            echo '<td>' . $row['RationCardType'] . '</td>';
            echo '<td>' . $row['LandOwnership'] . '</td>';
            echo '<td>' . $row['LandArea'] . '</td>';
            echo '<td>' . $row['Houseownership'] . '</td>';
            echo '<td>' . $row['HouseArea'] . '</td>';
            echo '<td>' . $row['HouseType'] . '</td>';
            echo '<td>' . $row['WaterSource'] . '</td>';
            echo '<td>' . $row['CookingFuelSource'] . '</td>';
            echo '<td>' . $row['ToiletType'] . '</td>';
            // ... add the remaining table body columns here
            echo '<td>' . $row['Transportation'] . '</td>';
            echo '<td>' . $row['EmployableSkills'] . '</td>';
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
        max-height: 800px;
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


