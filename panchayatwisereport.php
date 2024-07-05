<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "mysnehabhavan";


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $inputPanchayat = $_POST["panchayat"];
    $_SESSION['panchayat']=$inputPanchayat;

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM participantdetails WHERE panchayat = '$inputPanchayat'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        
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
        echo '<a href="2download.php" class="download-button" style="margin-right: 10px;">Download</a>';
        echo '<a href="reports.php" class="download-button">REPORTS</a>';

    } else {
        echo "No results found";
    }

  
    mysqli_close($conn);
}
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
    
    .form-container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f5f5f5;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .download-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: #fff;
        text-decoration: none;
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

  /* Style for labels */
  label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
  }

  /* Style for select input */
  select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  /* Style for the submit button */
  button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  /* Style for the submit button on hover */
  button[type="submit"]:hover {
    background-color: #0056b3;
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

<!-- HTML Form to input the Panchayat value -->
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="panchayat">Enter Panchayat:</label>
    <select name="panchayat" id="panchayat">
  <option value="Akalakunnam Grama Panchayat">Akalakunnam Grama Panchayat</option>
  <option value="Arpookara Grama Panchayat">Arpookara Grama Panchayat</option>
  <option value="Athirampuzha Grama Panchayat">Athirampuzha Grama Panchayat</option>
  <option value="Ayarkunnam Grama Panchayat">Ayarkunnam Grama Panchayat</option>
  <option value="Aymanam Grama Panchayat">Aymanam Grama Panchayat</option>
  <option value="Bharananganam Grama Panchayat">Bharananganam Grama Panchayat</option>
  <option value="Changanassery Municipality">Changanassery Municipality</option>
  <option value="Chempu Grama Panchayat">Chempu Grama Panchayat</option>
  <option value="Chirakkadavu Grama Panchayat">Chirakkadavu Grama Panchayat</option>
  <option value="Elikulam Grama Panchayat">Elikulam Grama Panchayat</option>
  <option value="Erattupetta Block Panchayat">Erattupetta Block Panchayat</option>
  <option value="Erattupetta Municipality">Erattupetta Municipality</option>
  <option value="Erumely Grama Panchayat">Erumely Grama Panchayat</option>
  <option value="Ettumanoor Block Panchayat">Ettumanoor Block Panchayat</option>
  <option value="Ettumanoor Municipality">Ettumanoor Municipality</option>
  <option value="Kadanad Grama Panchayat">Kadanad Grama Panchayat</option>
  <option value="Kadaplamattom Grama Panchayat">Kadaplamattom Grama Panchayat</option>
  <option value="Kaduthuruthy Block Panchayat">Kaduthuruthy Block Panchayat</option>
  <option value="Kaduthuruthy Grama Panchayat">Kaduthuruthy Grama Panchayat</option>
  <option value="Kallara Grama Panchayat">Kallara Grama Panchayat</option>
  <option value="Kanakkary Grama Panchayat">Kanakkary Grama Panchayat</option>
  <option value="Kangazha Grama Panchayat">Kangazha Grama Panchayat</option>
  <option value="Kanjirappally Block Panchayat">Kanjirappally Block Panchayat</option>
  <option value="Kanjirappally Grama Panchayat">Kanjirappally Grama Panchayat</option>
  <option value="Karoor Grama Panchayat">Karoor Grama Panchayat</option>
  <option value="Karukachal Grama Panchayat">Karukachal Grama Panchayat</option>
  <option value="Kidangoor Grama Panchayat">Kidangoor Grama Panchayat</option>
  <option value="Kooroppada Grama Panchayat">Kooroppada Grama Panchayat</option>
  <option value="Koottickal Grama Panchayat">Koottickal Grama Panchayat</option>
  <option value="Koruthodu Grama Panchayat">Koruthodu Grama Panchayat</option>
  <option value="Kottayam District Panchayat">Kottayam District Panchayat</option>
  <option value="Kottayam Municipality">Kottayam Municipality</option>
  <option value="Kozhuvanal Grama Panchayat">Kozhuvanal Grama Panchayat</option>
  <option value="Kumarakom Grama Panchayat">Kumarakom Grama Panchayat</option>
  <option value="Kuravilangad Grama Panchayat">Kuravilangad Grama Panchayat</option>
  <option value="Kurichy Grama Panchayat">Kurichy Grama Panchayat</option>
  <option value="Lalam Block Panchayat">Lalam Block Panchayat</option>
  <option value="Madappally Block Panchayat">Madappally Block Panchayat</option>
  <option value="Madappally Grama Panchayat">Madappally Grama Panchayat</option>
  <option value="Manarcadu Grama Panchayat">Manarcadu Grama Panchayat</option>
  <option value="Manimala Grama Panchayat">Manimala Grama Panchayat</option>
  <option value="Manjoor Grama Panchayat">Manjoor Grama Panchayat</option>
  <option value="Marangattupilly Grama Panchayat">Marangattupilly Grama Panchayat</option>
  <option value="Maravanthuruthu Grama Panchayat">Maravanthuruthu Grama Panchayat</option>
  <option value="Meenachil Grama Panchayat">Meenachil Grama Panchayat</option>
  <option value="Meenadom Grama Panchayat">Meenadom Grama Panchayat</option>
  <option value="Melukavu Grama Panchayat">Melukavu Grama Panchayat</option>
  <option value="Moonnilavu Grama Panchayat">Moonnilavu Grama Panchayat</option>
  <option value="Mulakulam Grama Panchayat">Mulakulam Grama Panchayat</option>
  <option value="Mundakayam Grama Panchayat">Mundakayam Grama Panchayat</option>
  <option value="Mutholy Grama Panchayat">Mutholy Grama Panchayat</option>
  <option value="Nedumkunnam Grama Panchayat">Nedumkunnam Grama Panchayat</option>
  <option value="Neendoor Grama Panchayat">Neendoor Grama Panchayat</option>
  <option value="Neezhoor Grama Panchayat">Neezhoor Grama Panchayat</option>
  <option value="Paippad Grama Panchayat">Paippad Grama Panchayat</option>
  <option value="Pala Municipality">Pala Municipality</option>
  <option value="Pallickathodu Grama Panchayat">Pallickathodu Grama Panchayat</option>
  <option value="Pallom Block Panchayat">Pallom Block Panchayat</option>
  <option value="Pampady Block Panchayat">Pampady Block Panchayat</option>
  <option value="Pampady Grama Panchayat">Pampady Grama Panchayat</option>
  <option value="Panachikkad Grama Panchayat">Panachikkad Grama Panchayat</option>
  <option value="Parathodu Grama Panchayat">Parathodu Grama Panchayat</option>
  <option value="Poonjar Grama Panchayat">Poonjar Grama Panchayat</option>
  <option value="Poonjar Thekkekara Grama Panchayat">Poonjar Thekkekara Grama Panchayat</option>
  <option value="Puthuppally Grama Panchayat">Puthuppally Grama Panchayat</option>
  <option value="Ramapuram Grama Panchayat">Ramapuram Grama Panchayat</option>
  <option value="Teekoy Grama Panchayat">Teekoy Grama Panchayat</option>
  <option value="Thalanad Grama Panchayat">Thalanad Grama Panchayat</option>
  <option value="Thalappalam Grama Panchayat">Thalappalam Grama Panchayat</option>
  <option value="Thalayazham Grama Panchayat">Thalayazham Grama Panchayat</option>
  <option value="Thalayolaparambu Grama Panchayat">Thalayolaparambu Grama Panchayat</option>
  <option value="Thidanad Grama Panchayat">Thidanad Grama Panchayat</option>
  <option value="Thiruvarppu Grama Panchayat">Thiruvarppu Grama Panchayat</option>
  <option value="Thrickodithanam Grama Panchayat">Thrickodithanam Grama Panchayat</option>
  <option value="TV Puram Grama Panchayat">TV Puram Grama Panchayat</option>
  <option value="Udayanapuram Grama Panchayat">Udayanapuram Grama Panchayat</option>
  <option value="Uzhavoor Block Panchayat">Uzhavoor Block Panchayat</option>
  <option value="Uzhavoor Grama Panchayat">Uzhavoor Grama Panchayat</option>
  <option value="Vaikom Block Panchayat">Vaikom Block Panchayat</option>
  <option value="Vaikom Municipality">Vaikom Municipality</option>
  <option value="Vakathanam Grama Panchayat">Vakathanam Grama Panchayat</option>
  <option value="Vazhappally Grama Panchayat">Vazhappally Grama Panchayat</option>
  <option value="Vazhoor Block Panchayat">Vazhoor Block Panchayat</option>
  <option value="Vazhoor Grama Panchayat">Vazhoor Grama Panchayat</option>
  <option value="Vechoor Grama Panchayat">Vechoor Grama Panchayat</option>
  <option value="Veliyannoor Grama Panchayat">Veliyannoor Grama Panchayat</option>
  <option value="Vellavoor Grama Panchayat">Vellavoor Grama Panchayat</option>
  <option value="Velloor Grama Panchayat">Velloor Grama Panchayat</option>
  <option value="Vijayapuram Grama Panchayat">Vijayapuram Grama Panchayat</option>
 </select>

    <button type="submit">Submit</button>
</form>
