<?php
// edit.php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "mysnehabhavan";

// Create a database connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $participantID = $_GET['id'];

    // Prepare and execute the query to fetch the participant's information
    $sql = "SELECT * FROM participantdetails WHERE ParticipantID = '$participantID'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    
        // Display the form with the participant's information
        ?>
    <!DOCTYPE html>
<html>
<head>

  <script>
     function showConfirmation() {
        if (confirm("Are you sure you want to submit the form?")) {
            document.forms["yourFormName"].submit();
        }
    }
function validateAadhaarNumber() {
  const aadhaarInput = document.getElementById('aadhar-card-number');
  const aadhaarError = document.getElementById('aadhaar-error');

  const aadhaarNumber = aadhaarInput.value.trim();
  const aadhaarPattern = /^\d{12}$/; // Regular expression for 12 digits

  if (!aadhaarPattern.test(aadhaarNumber)) {
    aadhaarError.textContent = 'Please enter a valid 12-digit Aadhaar card number.';
    aadhaarInput.style.border = '1px solid red';
  } else {
    aadhaarError.textContent = '';
    aadhaarInput.style.border = '';
  }
}
</script>
</head>
<body>
<form method="POST" action="update.php" onsubmit="showConfirmation(); return false;">
    <input type="hidden" name="participantID" value="<?php echo $row['ParticipantID']; ?>">
    
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $row['Name']; ?>" class="capitalize"><br>

    <!-- Add more input fields for other participant attributes -->
    <label for="age">Age:</label>
    <input type="number" name="age" value="<?php echo $row['Age']; ?>" min="0";><br>

    <label for="gender">Gender:</label>
    <input type="text" name="gender" value="<?php echo $row['Gender']; ?>"><br>

    <label for="panchayat">Panchayat:</label>
    <select name="panchayat" id="panchayat">
  <option value="Akalakunnam Grama Panchayat" <?php if ($row['panchayat'] == 'Akalakunnam Grama Panchayat') echo 'selected'; ?>>Akalakunnam Grama Panchayat</option>
  <option value="Arpookara Grama Panchayat" <?php if ($row['panchayat'] == 'Arpookara Grama Panchayat') echo 'selected'; ?>>Arpookara Grama Panchayat</option>
  <option value="Athirampuzha Grama Panchayat" <?php if ($row['panchayat'] == 'Athirampuzha Grama Panchayat') echo 'selected'; ?>>Athirampuzha Grama Panchayat</option>
  <option value="Ayarkunnam Grama Panchayat" <?php if ($row['panchayat'] == 'Ayarkunnam Grama Panchayat') echo 'selected'; ?>>Ayarkunnam Grama Panchayat</option>
  <option value="Aymanam Grama Panchayat" <?php if ($row['panchayat'] == 'Aymanam Grama Panchayat') echo 'selected'; ?>>Aymanam Grama Panchayat</option>
  <option value="Bharananganam Grama Panchayat" <?php if ($row['panchayat'] == 'Bharananganam Grama Panchayat') echo 'selected'; ?>>Bharananganam Grama Panchayat</option>
  <option value="Changanassery Municipality" <?php if ($row['panchayat'] == 'Changanassery Municipality') echo 'selected'; ?>>Changanassery Municipality</option>
  <option value="Chempu Grama Panchayat" <?php if ($row['panchayat'] == 'Chempu Grama Panchayat') echo 'selected'; ?>>Chempu Grama Panchayat</option>
  <option value="Chirakkadavu Grama Panchayat" <?php if ($row['panchayat'] == 'Chirakkadavu Grama Panchayat') echo 'selected'; ?>>Chirakkadavu Grama Panchayat</option>
  <option value="Elikulam Grama Panchayat" <?php if ($row['panchayat'] == 'Elikulam Grama Panchayat') echo 'selected'; ?>>Elikulam Grama Panchayat</option>
  <option value="Erattupetta Block Panchayat" <?php if ($row['panchayat'] == 'Erattupetta Block Panchayat') echo 'selected'; ?>>Erattupetta Block Panchayat</option>
  <option value="Erattupetta Municipality" <?php if ($row['panchayat'] == 'Erattupetta Municipality') echo 'selected'; ?>>Erattupetta Municipality</option>
  <option value="Erumely Grama Panchayat" <?php if ($row['panchayat'] == 'Erumely Grama Panchayat') echo 'selected'; ?>>Erumely Grama Panchayat</option>
  <option value="Ettumanoor Block Panchayat" <?php if ($row['panchayat'] == 'Ettumanoor Block Panchayat') echo 'selected'; ?>>Ettumanoor Block Panchayat</option>
  <option value="Ettumanoor Municipality" <?php if ($row['panchayat'] == 'Ettumanoor Municipality') echo 'selected'; ?>>Ettumanoor Municipality</option>
  <option value="Kadanad Grama Panchayat" <?php if ($row['panchayat'] == 'Kadanad Grama Panchayat') echo 'selected'; ?>>Kadanad Grama Panchayat</option>
  <option value="Kadaplamattom Grama Panchayat" <?php if ($row['panchayat'] == 'Kadaplamattom Grama Panchayat') echo 'selected'; ?>>Kadaplamattom Grama Panchayat</option>
  <option value="Kaduthuruthy Block Panchayat" <?php if ($row['panchayat'] == 'Kaduthuruthy Block Panchayat') echo 'selected'; ?>>Kaduthuruthy Block Panchayat</option>
  <option value="Kaduthuruthy Grama Panchayat"<?php if ($row['panchayat'] == 'Kaduthuruthy Grama Panchayat') echo 'selected'; ?>>Kaduthuruthy Grama Panchayat</option>
  <option value="Kallara Grama Panchayat" <?php if ($row['panchayat'] == 'Kallara Grama Panchayat') echo 'selected'; ?>>Kallara Grama Panchayat</option>
  <option value="Kanakkary Grama Panchayat" <?php if ($row['panchayat'] == 'Kanakkary Grama Panchayat') echo 'selected'; ?>>Kanakkary Grama Panchayat</option>
  <option value="Kangazha Grama Panchayat" <?php if ($row['panchayat'] == 'Kangazha Grama Panchayat') echo 'selected'; ?>>Kangazha Grama Panchayat</option>
  <option value="Kanjirappally Block Panchayat" <?php if ($row['panchayat'] == 'Kanjirappally Block Panchayat') echo 'selected'; ?>>Kanjirappally Block Panchayat</option>
<option value="Kanjirappally Grama Panchayat" <?php if ($row['panchayat'] == 'Kanjirappally Grama Panchayat') echo 'selected'; ?>>Kanjirappally Grama Panchayat</option>
<option value="Karoor Grama Panchayat" <?php if ($row['panchayat'] == 'Karoor Grama Panchayat') echo 'selected'; ?>>Karoor Grama Panchayat</option>
<option value="Karukachal Grama Panchayat" <?php if ($row['panchayat'] == 'Karukachal Grama Panchayat') echo 'selected'; ?>>Karukachal Grama Panchayat</option>
<option value="Kidangoor Grama Panchayat" <?php if ($row['panchayat'] == 'Kidangoor Grama Panchayat') echo 'selected'; ?>>Kidangoor Grama Panchayat</option>
<option value="Kooroppada Grama Panchayat" <?php if ($row['panchayat'] == 'Kooroppada Grama Panchayat') echo 'selected'; ?>>Kooroppada Grama Panchayat</option>
<option value="Koottickal Grama Panchayat" <?php if ($row['panchayat'] == 'Koottickal Grama Panchayat') echo 'selected'; ?>>Koottickal Grama Panchayat</option>
<option value="Koruthodu Grama Panchayat" <?php if ($row['panchayat'] == 'Koruthodu Grama Panchayat') echo 'selected'; ?>>Koruthodu Grama Panchayat</option>
<option value="Kottayam District Panchayat" <?php if ($row['panchayat'] == 'Kottayam District Panchayat') echo 'selected'; ?>>Kottayam District Panchayat</option>
<option value="Kottayam Municipality" <?php if ($row['panchayat'] == 'Kottayam Municipality') echo 'selected'; ?>>Kottayam Municipality</option>
<option value="Kozhuvanal Grama Panchayat" <?php if ($row['panchayat'] == 'Kozhuvanal Grama Panchayat') echo 'selected'; ?>>Kozhuvanal Grama Panchayat</option>
<option value="Kumarakom Grama Panchayat" <?php if ($row['panchayat'] == 'Kumarakom Grama Panchayat') echo 'selected'; ?>>Kumarakom Grama Panchayat</option>
<option value="Kuravilangad Grama Panchayat" <?php if ($row['panchayat'] == 'Kuravilangad Grama Panchayat') echo 'selected'; ?>>Kuravilangad Grama Panchayat</option>
<option value="Kurichy Grama Panchayat" <?php if ($row['panchayat'] == 'Kurichy Grama Panchayat') echo 'selected'; ?>>Kurichy Grama Panchayat</option>
<option value="Lalam Block Panchayat" <?php if ($row['panchayat'] == 'Lalam Block Panchayat') echo 'selected'; ?>>Lalam Block Panchayat</option>
<option value="Madappally Block Panchayat" <?php if ($row['panchayat'] == 'Madappally Block Panchayat') echo 'selected'; ?>>Madappally Block Panchayat</option>
<option value="Madappally Grama Panchayat" <?php if ($row['panchayat'] == 'Madappally Grama Panchayat') echo 'selected'; ?>>Madappally Grama Panchayat</option>
<option value="Manarcadu Grama Panchayat" <?php if ($row['panchayat'] == 'Manarcadu Grama Panchayat') echo 'selected'; ?>>Manarcadu Grama Panchayat</option>
<option value="Manimala Grama Panchayat" <?php if ($row['panchayat'] == 'Manimala Grama Panchayat') echo 'selected'; ?>>Manimala Grama Panchayat</option>
<option value="Manjoor Grama Panchayat" <?php if ($row['panchayat'] == 'Manjoor Grama Panchayat') echo 'selected'; ?>>Manjoor Grama Panchayat</option>
<option value="Marangattupilly Grama Panchayat" <?php if ($row['panchayat'] == 'Marangattupilly Grama Panchayat') echo 'selected'; ?>>Marangattupilly Grama Panchayat</option>
<option value="Maravanthuruthu Grama Panchayat" <?php if ($row['panchayat'] == 'Maravanthuruthu Grama Panchayat') echo 'selected'; ?>>Maravanthuruthu Grama Panchayat</option>
<option value="Meenachil Grama Panchayat" <?php if ($row['panchayat'] == 'Meenachil Grama Panchayat') echo 'selected'; ?>>Meenachil Grama Panchayat</option>
<option value="Meenadom Grama Panchayat" <?php if ($row['panchayat'] == 'Meenadom Grama Panchayat') echo 'selected'; ?>>Meenadom Grama Panchayat</option>
<option value="Melukavu Grama Panchayat" <?php if ($row['panchayat'] == 'Melukavu Grama Panchayat') echo 'selected'; ?>>Melukavu Grama Panchayat</option>
<option value="Moonnilavu Grama Panchayat" <?php if ($row['panchayat'] == 'Moonnilavu Grama Panchayat') echo 'selected'; ?>>Moonnilavu Grama Panchayat</option>
<option value="Mulakulam Grama Panchayat" <?php if ($row['panchayat'] == 'Mulakulam Grama Panchayat') echo 'selected'; ?>>Mulakulam Grama Panchayat</option>
<option value="Mundakayam Grama Panchayat" <?php if ($row['panchayat'] == 'Mundakayam Grama Panchayat') echo 'selected'; ?>>Mundakayam Grama Panchayat</option>
<option value="Mutholy Grama Panchayat" <?php if ($row['panchayat'] == 'Mutholy Grama Panchayat') echo 'selected'; ?>>Mutholy Grama Panchayat</option>
<option value="Nedumkunnam Grama Panchayat" <?php if ($row['panchayat'] == 'Nedumkunnam Grama Panchayat') echo 'selected'; ?>>Nedumkunnam Grama Panchayat</option>
<option value="Neendoor Grama Panchayat" <?php if ($row['panchayat'] == 'Neendoor Grama Panchayat') echo 'selected'; ?>>Neendoor Grama Panchayat</option>
<option value="Neezhoor Grama Panchayat" <?php if ($row['panchayat'] == 'Neezhoor Grama Panchayat') echo 'selected'; ?>>Neezhoor Grama Panchayat</option>
<option value="Paippad Grama Panchayat" <?php if ($row['panchayat'] == 'Paippad Grama Panchayat') echo 'selected'; ?>>Paippad Grama Panchayat</option>
<option value="Pala Municipality" <?php if ($row['panchayat'] == 'Pala Municipality') echo 'selected'; ?>>Pala Municipality</option>
<option value="Pallickathodu Grama Panchayat" <?php if ($row['panchayat'] == 'Pallickathodu Grama Panchayat') echo 'selected'; ?>>Pallickathodu Grama Panchayat</option>
<option value="Pallom Block Panchayat" <?php if ($row['panchayat'] == 'Pallom Block Panchayat') echo 'selected'; ?>>Pallom Block Panchayat</option>
<option value="Pampady Block Panchayat" <?php if ($row['panchayat'] == 'Pampady Block Panchayat') echo 'selected'; ?>>Pampady Block Panchayat</option>
<option value="Pampady Grama Panchayat" <?php if ($row['panchayat'] == 'Pampady Grama Panchayat') echo 'selected'; ?>>Pampady Grama Panchayat</option>
<option value="Panachikkad Grama Panchayat" <?php if ($row['panchayat'] == 'Panachikkad Grama Panchayat') echo 'selected'; ?>>Panachikkad Grama Panchayat</option>
<option value="Parathodu Grama Panchayat" <?php if ($row['panchayat'] == 'Parathodu Grama Panchayat') echo 'selected'; ?>>Parathodu Grama Panchayat</option>
<option value="Poonjar Grama Panchayat" <?php if ($row['panchayat'] == 'Poonjar Grama Panchayat') echo 'selected'; ?>>Poonjar Grama Panchayat</option>
<option value="Poonjar Thekkekara Grama Panchayat" <?php if ($row['panchayat'] == 'Poonjar Thekkekara Grama Panchayat') echo 'selected'; ?>>Poonjar Thekkekara Grama Panchayat</option>
<option value="Puthuppally Grama Panchayat" <?php if ($row['panchayat'] == 'Puthuppally Grama Panchayat') echo 'selected'; ?>>Puthuppally Grama Panchayat</option>
<option value="Ramapuram Grama Panchayat" <?php if ($row['panchayat'] == 'Ramapuram Grama Panchayat') echo 'selected'; ?>>Ramapuram Grama Panchayat</option>
<option value="Teekoy Grama Panchayat" <?php if ($row['panchayat'] == 'Teekoy Grama Panchayat') echo 'selected'; ?>>Teekoy Grama Panchayat</option>
<option value="Thalanad Grama Panchayat" <?php if ($row['panchayat'] == 'Thalanad Grama Panchayat') echo 'selected'; ?>>Thalanad Grama Panchayat</option>
<option value="Thalappalam Grama Panchayat" <?php if ($row['panchayat'] == 'Thalappalam Grama Panchayat') echo 'selected'; ?>>Thalappalam Grama Panchayat</option>
<option value="Thalayazham Grama Panchayat" <?php if ($row['panchayat'] == 'Thalayazham Grama Panchayat') echo 'selected'; ?>>Thalayazham Grama Panchayat</option>
<option value="Thalayolaparambu Grama Panchayat" <?php if ($row['panchayat'] == 'Thalayolaparambu Grama Panchayat') echo 'selected'; ?>>Thalayolaparambu Grama Panchayat</option>
<option value="Thidanad Grama Panchayat" <?php if ($row['panchayat'] == 'Thidanad Grama Panchayat') echo 'selected'; ?>>Thidanad Grama Panchayat</option>
<option value="Thiruvarppu Grama Panchayat" <?php if ($row['panchayat'] == 'Thiruvarppu Grama Panchayat') echo 'selected'; ?>>Thiruvarppu Grama Panchayat</option>
<option value="Thrickodithanam Grama Panchayat" <?php if ($row['panchayat'] == 'Thrickodithanam Grama Panchayat') echo 'selected'; ?>>Thrickodithanam Grama Panchayat</option>
<option value="TV Puram Grama Panchayat" <?php if ($row['panchayat'] == 'TV Puram Grama Panchayat') echo 'selected'; ?>>TV Puram Grama Panchayat</option>
<option value="Udayanapuram Grama Panchayat" <?php if ($row['panchayat'] == 'Udayanapuram Grama Panchayat') echo 'selected'; ?>>Udayanapuram Grama Panchayat</option>
<option value="Uzhavoor Block Panchayat" <?php if ($row['panchayat'] == 'Uzhavoor Block Panchayat') echo 'selected'; ?>>Uzhavoor Block Panchayat</option>
<option value="Uzhavoor Grama Panchayat" <?php if ($row['panchayat'] == 'Uzhavoor Grama Panchayat') echo 'selected'; ?>>Uzhavoor Grama Panchayat</option>
<option value="Vaikom Block Panchayat" <?php if ($row['panchayat'] == 'Vaikom Block Panchayat') echo 'selected'; ?>>Vaikom Block Panchayat</option>
<option value="Vaikom Municipality" <?php if ($row['panchayat'] == 'Vaikom Municipality') echo 'selected'; ?>>Vaikom Municipality</option>
<option value="Vakathanam Grama Panchayat" <?php if ($row['panchayat'] == 'Vakathanam Grama Panchayat') echo 'selected'; ?>>Vakathanam Grama Panchayat</option>
<option value="Vazhappally Grama Panchayat" <?php if ($row['panchayat'] == 'Vazhappally Grama Panchayat') echo 'selected'; ?>>Vazhappally Grama Panchayat</option>
<option value="Vazhoor Block Panchayat" <?php if ($row['panchayat'] == 'Vazhoor Block Panchayat') echo 'selected'; ?>>Vazhoor Block Panchayat</option>
<option value="Vazhoor Grama Panchayat" <?php if ($row['panchayat'] == 'Vazhoor Grama Panchayat') echo 'selected'; ?>>Vazhoor Grama Panchayat</option>
<option value="Vechoor Grama Panchayat" <?php if ($row['panchayat'] == 'Vechoor Grama Panchayat') echo 'selected'; ?>>Vechoor Grama Panchayat</option>
<option value="Veliyannoor Grama Panchayat" <?php if ($row['panchayat'] == 'Veliyannoor Grama Panchayat') echo 'selected'; ?>>Veliyannoor Grama Panchayat</option>
<option value="Vellavoor Grama Panchayat" <?php if ($row['panchayat'] == 'Vellavoor Grama Panchayat') echo 'selected'; ?>>Vellavoor Grama Panchayat</option>
<option value="Velloor Grama Panchayat" <?php if ($row['panchayat'] == 'Velloor Grama Panchayat') echo 'selected'; ?>>Velloor Grama Panchayat</option>
<option value="Vijayapuram Grama Panchayat" <?php if ($row['panchayat'] == 'Vijayapuram Grama Panchayat') echo 'selected'; ?>>Vijayapuram Grama Panchayat</option>

 </select><br>

    <label for="taluk">Taluk:</label>
    <select name="taluk" id="taluk">
    <option value="Changanassery" <?php if ($row['taluk'] == 'Changanassery') echo 'selected'; ?>>Changanassery</option>
    <option value="Kottayam" <?php if ($row['taluk'] == 'Kottayam') echo 'selected'; ?>>Kottayam</option>
    <option value="Vaikom" <?php if ($row['taluk'] == 'Vaikom') echo 'selected'; ?>>Vaikom</option>
    <option value="Meenachil" <?php if ($row['taluk'] == 'Meenachil') echo 'selected'; ?>>Meenachil</option>
    <option value="Kanjirappally" <?php if ($row['taluk'] == 'Kanjirappally') echo 'selected'; ?>>Kanjirappally</option>
 </select><br>

    <label for="ward">Ward:</label>
    <input type="number" name="ward" value="<?php echo $row['ward']; ?>" min="0"><br>

    <label for="educationLevel">Education Level:</label>
    <select name="education-level" id="education-level">
    <option value="Primary School or Elementary School" <?php if ($row['EducationLevel'] == 'Primary School or Elementary School') echo 'selected'; ?>>Primary School or Elementary School</option>
    <option value="Secondary School or High School" <?php if ($row['EducationLevel'] == 'Secondary School or High School') echo 'selected'; ?>>Secondary School or High School</option>
    <option value="Diploma or Certificate Programs" <?php if ($row['EducationLevel'] == 'Diploma or Certificate Programs') echo 'selected'; ?>>Diploma or Certificate Programs</option>
    <option value="Bachelors Degree" <?php if ($row['EducationLevel'] == "Bachelor's Degree") echo 'selected'; ?>>Bachelor's Degree</option>
    <option value="Masters Degree" <?php if ($row['EducationLevel'] == "Master's Degree") echo 'selected'; ?>>Master's Degree</option>
 </select><br>

    <label for="vocationalTraining">Vocational Training:</label>
    <input type="text" name="vocationalTraining" value="<?php echo $row['VocationalTraining']; ?>"><br>

    <label for="address">House Name:</label>
    <input type="text" name="address" value="<?php echo $row['Address']; ?>"><br>

    <label for="phoneNumber">Phone Number:</label>
<input type="text" name="phoneNumber" value="<?php echo $row['PhoneNumber']; ?>" pattern="\d{10}" title="Please enter a 10-digit phone number (numeric characters only)">


    <label for="email">Email:</label>
    <input type="text" name="email" value="<?php echo $row['Email']; ?>"><br>

    <label for="birthCertificate">Birth Certificate:</label>
    <input type="text" name="birthCertificate" value="<?php echo $row['BirthCertificate']; ?>"><br>

    <label for="disabilityCertificate">Disability Certificate:</label>
    <input type="text" name="disabilityCertificate" value="<?php echo $row['DisabilityCertificate']; ?>"><br>

    <label for="udid">UDID:</label>
    <input type="text" name="udid" value="<?php echo $row['Udid']; ?>"><br>

    <label for="aadharCardNumber">Aadhar Card Number:</label>
    <input type="text" name="aadharCardNumber" value="<?php echo $row['AadharCardNumber']; ?>" pattern="\<d>12</d>" title="Please enter a 12-digit aadhar number (numeric characters only)"><br>

    <label for="electionID">Election ID:</label>
    <input type="text" name="electionID" value="<?php echo $row['ElectionID']; ?>"><br>

    <label for="rationCard">Ration Card:</label>
    <input type="text" name="rationCard" value="<?php echo $row['RationCard']; ?>"><br>

    <label for="otherIdentity">Other Identity:</label>
    <input type="text" name="otherIdentity" value="<?php echo $row['OtherIdentity']; ?>"><br>

    <label for="assistive-devices">Use of any assistive devices:</label>
    <input type="text" name="assistive-devices" value="<?php echo $row['AssistiveDevices']; ?>"><br>

    <label for="pension">Pension:</label>
    <input type="text" name="pension" value="<?php echo $row['Pension']; ?>"><br>

    <label for="pensionAmount">Pension Amount:</label>
    <input type="number" name="pensionAmount" value="<?php echo $row['pensionAmount']; ?>"><br>

    <label for="scholarship">Scholarship:</label>
    <input type="text" name="scholarship" value="<?php echo $row['Scholarship']; ?>"><br>

    <label for="healthInsurance">Health Insurance:</label>
    <input type="text" name="healthInsurance" value="<?php echo $row['HealthInsurance']; ?>"><br>

    <label for="asraya">Asraya:</label>
    <input type="text" name="asraya" value="<?php echo $row['Asraya']; ?>"><br>

    <label for="ksrtcConcession">KSRTC Concession:</label>
    <input type="text" name="ksrtcConcession" value="<?php echo $row['KSRTCConcession']; ?>"><br>

    <label for="privateBusConcession">Private Bus Concession:</label>
    <input type="text" name="privateBusConcession" value="<?php echo $row['PrivateBusConcession']; ?>"><br>

    <label for="railwayConcession">Railway Concession:</label>
    <input type="text" name="railwayConcession" value="<?php echo $row['RailwayConcession']; ?>"><br>

    <label for="aswasakiran">Aswasakiran:</label>
    <input type="text" name="aswasakiran" value="<?php echo $row['Aswasakiran']; ?>"><br>

    <label for="otherBenefits">Other Benefits:</label>
    <input type="text" name="otherBenefits" value="<?php echo $row['OtherBenefits']; ?>"><br>

    <label for="membership">Membership:</label>
    <input type="text" name="membership" value="<?php echo $row['Membership']; ?>"><br>

    <label for="bankAccountType">Bank Account Type:</label>
    <input type="text" name="bankAccountType" value="<?php echo $row['BankAccountType']; ?>"><br>

    <label for="ACHolderName">Account Holder Name:</label>
    <input type="text" name="ACHolderName" value="<?php echo $row['ACHolderName']; ?>"><br>
    
    <label for="AccountNumber">Account Number:</label>
    <input type="number" name="AccountNumber" value="<?php echo $row['AccountNumber']; ?>"><br>

    <label for="ifscCode">IFSC Code:</label>
    <input type="text" name="ifscCode" value="<?php echo $row['ifscCode']; ?>"><br>

    <label for="BranchName">Branch Name:</label>
    <input type="text" name="BranchName" value="<?php echo $row['BranchName']; ?>"><br>

    <label for="disabilityType">Disability Type:</label>
<select name="disabilityType" id="disabilityType">
    <option value="blindness" <?php if ($row['DisabilityType'] == 'blindness') echo 'selected'; ?>>Blindness</option>
    <option value="low-vision" <?php if ($row['DisabilityType'] == 'low-vision') echo 'selected'; ?>>Low-vision</option>
    <option value="leprosy" <?php if ($row['DisabilityType'] == 'leprosy') echo 'selected'; ?>>Leprosy Cured Persons</option>
    <option value="hearing-impairment" <?php if ($row['DisabilityType'] == 'hearing-impairment') echo 'selected'; ?>>Hearing Impairment</option>
    <option value="locomotor-disability" <?php if ($row['DisabilityType'] == 'locomotor-disability') echo 'selected'; ?>>Locomotor Disability</option>
    <option value="dwarfism" <?php if ($row['DisabilityType'] == 'dwarfism') echo 'selected'; ?>>Dwarfism</option>
    <option value="intellectual-disability" <?php if ($row['DisabilityType'] == 'intellectual-disability') echo 'selected'; ?>>Intellectual Disability</option>
    <option value="mental-illness" <?php if ($row['DisabilityType'] == 'mental-illness') echo 'selected'; ?>>Mental Illness</option>
    <option value="autism-spectrum-disorder" <?php if ($row['DisabilityType'] == 'autism-spectrum-disorder') echo 'selected'; ?>>Autism Spectrum Disorder (ASD)</option>
    <option value="cerebral-palsy" <?php if ($row['DisabilityType'] == 'cerebral-palsy') echo 'selected'; ?>>Cerebral Palsy (CP)</option>
    <option value="muscular-dystrophy" <?php if ($row['DisabilityType'] == 'muscular-dystrophy') echo 'selected'; ?>>Muscular Dystrophy (MD)</option>
    <optgroup label="Chronic Neurological Conditions">
        <option value="alzheimers-dementia" <?php if ($row['DisabilityType'] == 'alzheimers-dementia') echo 'selected'; ?>>Alzheimer's disease and Dementia</option>
        <option value="parkinsons-disease" <?php if ($row['DisabilityType'] == 'parkinsons-disease') echo 'selected'; ?>>Parkinson's disease</option>
        <option value="dystonia" <?php if ($row['DisabilityType'] == 'dystonia') echo 'selected'; ?>>Dystonia</option>
        <option value="als" <?php if ($row['DisabilityType'] == 'als') echo 'selected'; ?>>ALS (Lou Gehrig's disease)</option>
        <option value="huntingtons-disease" <?php if ($row['DisabilityType'] == 'huntingtons-disease') echo 'selected'; ?>>Huntington's disease</option>
        <option value="neuromuscular-disease" <?php if ($row['DisabilityType'] == 'neuromuscular-disease') echo 'selected'; ?>>Neuromuscular disease</option>
        <option value="multiple-sclerosis" <?php if ($row['DisabilityType'] == 'multiple-sclerosis') echo 'selected'; ?>>Multiple sclerosis</option>
        <option value="epilepsy" <?php if ($row['DisabilityType'] == 'epilepsy') echo 'selected'; ?>>Epilepsy</option>
        <option value="stroke" <?php if ($row['DisabilityType'] == 'stroke') echo 'selected'; ?>>Stroke</option>
    </optgroup>
    <option value="specific-learning-disabilities" <?php if ($row['DisabilityType'] == 'specific-learning-disabilities') echo 'selected'; ?>>Specific Learning Disabilities</option>
    <option value="multiple-sclerosis" <?php if ($row['DisabilityType'] == 'multiple-sclerosis') echo 'selected'; ?>>Multiple Sclerosis (MS)</option>
    <option value="speech-and-language-disability" <?php if ($row['DisabilityType'] == 'speech-and-language-disability') echo 'selected'; ?>>Speech and Language Disability</option>
    <option value="thalassemia" <?php if ($row['DisabilityType'] == 'thalassemia') echo 'selected'; ?>>Thalassemia</option>
    <option value="hemophilia" <?php if ($row['DisabilityType'] == 'hemophilia') echo 'selected'; ?>>Hemophilia</option>
    <option value="sickle-cell-disease" <?php if ($row['DisabilityType'] == 'sickle-cell-disease') echo 'selected'; ?>>Sickle Cell Disease</option>
    <option value="multiple-disabilities" <?php if ($row['DisabilityType'] == 'multiple-disabilities') echo 'selected'; ?>>Multiple Disabilities including deaf-blindness</option>
    <option value="acid-attack-victims" <?php if ($row['DisabilityType'] == 'acid-attack-victims') echo 'selected'; ?>>Acid attack victims</option>
    <option value="parkinsons-disease" <?php if ($row['DisabilityType'] == 'parkinsons-disease') echo 'selected'; ?>>Parkinson's Disease (PD)</option>
</select><br>


    <label for="ageOfOnset">Age of Onset:</label>
    <input type="number" name="ageOfOnset" value="<?php echo $row['AgeOfOnset']; ?>" min="0";><br>

    <label for="severity">Severity:</label>
    <select name="severity" id="severity" required>
  <option value="Mild" <?php if ($row['Severity'] == 'Mild') echo 'selected'; ?>>Mild</option>
  <option value="Moderate" <?php if ($row['Severity'] == 'Moderate') echo 'selected'; ?>>Moderate</option>
  <option value="Severe" <?php if ($row['Severity'] == 'Severe') echo 'selected'; ?>>Severe</option>
  <option value="Profound" <?php if ($row['Severity'] == 'Profound') echo 'selected'; ?>>Profound</option>
  <option value="Temporary" <?php if ($row['Severity'] == 'Temporary') echo 'selected'; ?>>Temporary</option>
  <option value="Permanent" <?php if ($row['Severity'] == 'Permanent') echo 'selected'; ?>>Permanent</option>
  <option value="Congenital" <?php if ($row['Severity'] == 'Congenital') echo 'selected'; ?>>Congenital</option>
  <option value="Acquired" <?php if ($row['Severity'] == 'Acquired') echo 'selected'; ?>>Acquired</option>
  <option value="Progressive" <?php if ($row['Severity'] == 'Progressive') echo 'selected'; ?>>Progressive</option>
  <option value="Intermittent" <?php if ($row['Severity'] == 'Intermittent') echo 'selected'; ?>>Intermittent</option>
  <option value="Sensory Impairment" <?php if ($row['Severity'] == 'ensory Impairment') echo 'selected'; ?>>Sensory Impairment</option>
</select><br>
    
    <label for="duration">Duration:</label>
    <input type="text" name="duration" value="<?php echo $row['Duration']; ?>"><br>

    <label for="employmentStatus">Employment Status:</label>
<select name="employmentStatus" id="employmentStatus" onchange="toggleFields()">
    <option value="unemployed" <?php if ($row['EmploymentStatus'] == 'unemployed') echo 'selected'; ?>>Unemployed</option>
    <option value="employed" <?php if ($row['EmploymentStatus'] == 'employed') echo 'selected'; ?>>Employed</option>
    <option value="selfemployed" <?php if ($row['EmploymentStatus'] == 'selfemployed') echo 'selected'; ?>>Self Employed</option>
</select><br>

    <label for="monthlyIncome">Monthly Income:</label>
    <input type="number" name="monthlyIncome" value="<?php echo $row['MonthlyIncome']; ?>" min="0"><br>

    <label for="typeOfWork">Type of Work:</label>
    <input type="text" name="typeOfWork" value="<?php echo $row['TypeOfWork']; ?>"><br>

    <label for="registeredWithEmploymentExchange">Registered with Employment Exchange:</label>
    <input type="text" name="registeredWithEmploymentExchange" value="<?php echo $row['RegisteredWithEmploymentExchange']; ?>"><br>

    <label for="healthcareCoverageSource">Healthcare Coverage Source:</label>
    <input type="text" name="healthcareCoverageSource" value="<?php echo $row['HealthcareCoverageSource']; ?>"><br>

    <label for="monthlyHealthcareExpenses">Monthly Healthcare Expenses:</label>
    <input type="number" name="monthlyHealthcareExpenses" value="<?php echo $row['MonthlyHealthcareExpenses']; ?>" min="0"><br>

    <label for="healthcareServicesUsed">Healthcare Services Used:</label>
    <input type="text" name="healthcareServicesUsed" value="<?php echo $row['HealthcareServicesUsed']; ?>"><br>

    <label for="housingType">Housing Type:</label>
    <input type="text" name="housingType" value="<?php echo $row['HousingType']; ?>"><br>

    <label for="monthlyHousingCosts">Monthly Housing Costs:</label>
    <input type="number" name="monthlyHousingCosts" value="<?php echo $row['MonthlyHousingCosts']; ?>" min="0"><br>

    <label for="fatherName">Father's Name:</label>
    <input type="text" name="fatherName" value="<?php echo $row['FatherName']; ?>"><br>

    <label for="motherName">Mother's Name:</label>
    <input type="text" name="motherName" value="<?php echo $row['MotherName']; ?>"><br>

    <label for="siblingName">Sibling's Name:</label>
    <input type="text" name="siblingName" value="<?php echo $row['SiblingName']; ?>"><br>

    <label for="fatherAge">Father's Age:</label>
    <input type="number" name="fatherAge" value="<?php echo $row['FatherAge']; ?>" min="0"><br>

    <label for="motherAge">Mother's Age:</label>
    <input type="number" name="motherAge" value="<?php echo $row['MotherAge']; ?>" min="0"><br>

    <label for="siblingAge">Sibling's Age:</label>
    <input type="number" name="siblingAge" value="<?php echo $row['SiblingAge']; ?>" min="0"><br>

    <label for="fatherEducation">Father's Education:</label>
    <select name="fatherEducation" id="fatherEducation"  required>
  <option value="Primary School or Elementary School" <?php if ($row['FatherEducation'] == 'Primary School or Elementary School') echo 'selected'; ?>>Primary School or Elementary School</option>
  <option value="Secondary School or High School" <?php if ($row['FatherEducation'] == 'Secondary School or High School') echo 'selected'; ?>>Secondary School or High School</option>
  <option value="Diploma or Certificate Programs" <?php if ($row['FatherEducation'] == 'Diploma or Certificate Programs') echo 'selected'; ?>>Diploma or Certificate Programs</option>
  <option value="Bachelors Degree" <?php if ($row['FatherEducation'] == 'Bachelors Degree') echo 'selected'; ?>>Bachelor's Degree</option>
  <option value="Masters Degree" <?php if ($row['FatherEducation'] == 'Masters Degree') echo 'selected'; ?>>Master's Degree</option>
 </select><br>
   
    <label for="motherEducation">Mother's Education:</label>
    <select name="motherEducation" id="motherEducation"  required>
  <option value="Primary School or Elementary School"  <?php if ($row['MotherEducation'] == 'Primary School or Elementary School') echo 'selected'; ?>>Primary School or Elementary School</option>
  <option value="Secondary School or High School"  <?php if ($row['MotherEducation'] == 'Secondary School or High School') echo 'selected'; ?>>Secondary School or High School</option>
  <option value="Diploma or Certificate Programs"  <?php if ($row['MotherEducation'] == 'Diploma or Certificate Programs') echo 'selected'; ?>>Diploma or Certificate Programs</option>
  <option value="Bachelors Degree"  <?php if ($row['MotherEducation'] == 'Bachelors Degree') echo 'selected'; ?>>Bachelor's Degree</option>
  <option value="Masters Degree"  <?php if ($row['MotherEducation'] == 'Masters Degree') echo 'selected'; ?>>Master's Degree</option>
 </select><br>
   
    <label for="siblingEducation">Sibling's Education:</label>
    <select name="siblingEducation" id="siblingEducation"  required>
    <option value="null"  <?php if ($row['SiblingEducation'] == 'Masters Degree') echo 'selected'; ?>>None</option>
  <option value="Primary School or Elementary School" <?php if ($row['SiblingEducation'] == 'Primary School or Elementary School') echo 'selected'; ?>>Primary School or Elementary School</option>
  <option value="Secondary School or High School" <?php if ($row['SiblingEducation'] == 'Secondary School or High School') echo 'selected'; ?>>Secondary School or High School</option>
  <option value="Diploma or Certificate Programs" <?php if ($row['SiblingEducation'] == 'Diploma or Certificate Programs') echo 'selected'; ?>>Diploma or Certificate Programs</option>
  <option value="Bachelors Degree" <?php if ($row['SiblingEducation'] == 'Bachelors Degree') echo 'selected'; ?>>Bachelor's Degree</option>
  <option value="Masters Degree" <?php if ($row['SiblingEducation'] == 'Masters Degree') echo 'selected'; ?>>Master's Degree</option>
 </select><br>
   

    <label for="fatherOccupation">Father's Occupation:</label>
    <input type="text" name="fatherOccupation" value="<?php echo $row['FatherOccupation']; ?>"><br>

    <label for="motherOccupation">Mother's Occupation:</label>
    <input type="text" name="motherOccupation" value="<?php echo $row['MotherOccupation']; ?>"><br>

    <label for="siblingOccupation">Sibling's Occupation:</label>
    <input type="text" name="siblingOccupation" value="<?php echo $row['SiblingOccupation']; ?>"><br>

    <label for="fatherSalary">Father's Salary:</label>
    <input type="number" name="fatherSalary" value="<?php echo $row['FatherSalary']; ?>" min="0"><br>

    <label for="motherSalary">Mother's Salary:</label>
    <input type="number" name="motherSalary" value="<?php echo $row['MotherSalary']; ?>" min="0"><br>

    <label for="siblingSalary">Sibling's Salary:</label>
    <input type="number" name="siblingSalary" value="<?php echo $row['SiblingSalary']; ?>" in="0"><br>

    <label for="parents-pension">Parents having Pension:</label>
    <input type="text" name="parents-pension" value="<?php echo $row['ParentsPension']; ?>" ><br>

    <label for="parentsPensionAmount">Parents' Pension Amount:</label>
    <input type="number" name="parentsPensionAmount" value="<?php echo $row['parentsPensionAmount']; ?>" in="0"><br>

    <label for="employable-skills">Parents Willing to Send Children for Employable Skills Development:</label>
    <input type="text" name="employable-skills" value="<?php echo $row['EmployableSkills']; ?>"><br>


    <label for="incomeLevel">Income Level:</label>
    <input type="number" name="incomeLevel" value="<?php echo $row['IncomeLevel']; ?>" min="0"><br>

    <label for="rationCardType">Ration Card Type:</label>
<select name="rationCardType" id="rationCardType">
    <option value="AAY" <?php if ($row['RationCardType'] == 'AAY') echo 'selected'; ?>>Antyodaya Anna Yojana (AAY)</option>
    <option value="PHH" <?php if ($row['RationCardType'] == 'PHH') echo 'selected'; ?>>Priority Household (PHH)</option>
    <option value="BPL" <?php if ($row['RationCardType'] == 'BPL') echo 'selected'; ?>>Below Poverty Line (BPL)</option>
    <option value="APL" <?php if ($row['RationCardType'] == 'APL') echo 'selected'; ?>>Above Poverty Line (APL)</option>
    <option value="AY" <?php if ($row['RationCardType'] == 'AY') echo 'selected'; ?>>Annapoorna Yojana (AY)</option>
</select><br><br>


    <label for="landOwnership">Land Ownership:</label>
    <select name="landOwnership" id="landOwnerships">
    <option value="own" <?php if ($row['LandOwnership'] == 'own') echo 'selected'; ?>>Own</option>
    <option value="leased" <?php if ($row['LandOwnership'] == 'leased') echo 'selected'; ?>>Leased</option>
</select><br>

    <label for="landArea">Land Area:</label>
    <input type="number" name="landArea" value="<?php echo $row['LandArea']; ?>" min="0"><br>

    <label for="houseOwnership">House Ownership:</label>
<select name="houseOwnership" id="houseOwnership">
    <option value="owned" <?php if ($row['Houseownership'] == 'owned') echo 'selected'; ?>>Owned</option>
    <option value="rented" <?php if ($row['Houseownership'] == 'rented') echo 'selected'; ?>>Rented</option>
</select><br><br>


    <label for="houseArea">House Area:</label>
    <input type="number" name="houseArea" value="<?php echo $row['HouseArea']; ?>" min="0"><br>

    <label for="houseType">House Type:</label>
    <select name="houseType" id="houseType">
    <option value="concrete" <?php if ($row['HouseType'] == 'concrete') echo 'selected'; ?>>Concrete</option>
    <option value="asbestos" <?php if ($row['HouseType'] == 'asbestos') echo 'selected'; ?>>Asbestos</option>
    <option value="thatched" <?php if ($row['HouseType'] == 'thatched') echo 'selected'; ?>>Thatched</option>
</select><br>

<label for="waterSource">Water Source:</label>
<select name="waterSource" id="waterSource" required>
    <option value="municipal" <?php if ($row['WaterSource'] == 'municipal') echo 'selected'; ?>>Municipal Water Supply</option>
    <option value="well" <?php if ($row['WaterSource'] == 'well') echo 'selected'; ?>>Well Water</option>
    <option value="borehole" <?php if ($row['WaterSource'] == 'borehole') echo 'selected'; ?>>Borehole Water</option>
    <option value="river-stream" <?php if ($row['WaterSource'] == 'river-stream') echo 'selected'; ?>>River and Stream Water</option>
    <option value="rainwater-harvesting" <?php if ($row['WaterSource'] == 'rainwater-harvesting') echo 'selected'; ?>>Rainwater Harvesting</option>
</select><br>


    <label for="cookingFuelSource">Cooking Fuel Source:</label>
    <input type="text" name="cookingFuelSource" value="<?php echo $row['CookingFuelSource']; ?>"><br>

    <label for="toiletType">Toilet Type:</label>
    <input type="text" name="toiletType" value="<?php echo $row['ToiletType']; ?>"><br>

    <label for="family-transportation">Transportation:</label>
<select name="family-transportation" id="family-transportation">
  <option value="private" <?php if ($row['Transportation'] == 'private') echo 'selected'; ?>>Private</option>
  <option value="public" <?php if ($row['Transportation'] == 'public') echo 'selected'; ?>>Public</option>
</select><br>

   
    <button type="submit">Update</button>
</form>
</body>
</html>


        <?php
    } else {
        echo "Participant not found.";
    }
} else {
    echo "Participant ID not provided.";
}

// Close the database connection
mysqli_close($conn);
?>
<style>
    /* Add general styles for form layout */
    
    .capitalize {
        text-transform: capitalize;
    }

    form {
        width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    input[type="text"],
    button,
    select{
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
</style>
