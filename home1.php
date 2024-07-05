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

  $_SESSION['name'] = $_POST['name'];
  $_SESSION['age'] = $_POST['age'];
  $_SESSION['gender'] = $_POST['gender'];
  $_SESSION['taluk'] = $_POST['taluk']; 
  $_SESSION['panchayat'] = $_POST['panchayat'];
  $_SESSION['ward'] = $_POST['ward'];
  $_SESSION['education-level'] = $_POST['education-level'];
  $_SESSION['vocational-training'] = $_POST['vocational-training'];
  $_SESSION['address'] = $_POST['address'];
  $_SESSION['phone-number'] = $_POST['phone-number'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['birth-certificate'] = $_POST['birth-certificate'];
  $_SESSION['disability-certificate'] = $_POST['disability-certificate'];
  $_SESSION['aadhar-card-number'] = $_POST['aadhar-card-number'];
  $_SESSION['election-id'] = $_POST['election-id'];
  $_SESSION['udid'] = $_POST['udid'];
  $_SESSION['ration-card'] = $_POST['ration-card'];
  $_SESSION['other-identity'] = $_POST['other-identity'];
  $_SESSION['pension'] = isset($_POST['pension']) ? 'Yes' : 'No';
  $_SESSION['scholarship'] = isset($_POST['scholarship']) ? 'Yes' : 'No';
  $_SESSION['health-insurance'] = isset($_POST['health-insurance']) ? 'Yes' : 'No';
  $_SESSION['asraya'] = isset($_POST['asraya']) ? 'Yes' : 'No';
  $_SESSION['ksrtc-concession'] = isset($_POST['ksrtc-concession']) ? 'Yes' : 'No';
  $_SESSION['private-bus-concession'] = isset($_POST['private-bus-concession']) ? 'Yes' : 'No';
  $_SESSION['railway-concession'] = isset($_POST['railway-concession']) ? 'Yes' : 'No';
  $_SESSION['aswasakiran'] = isset($_POST['aswasakiran']) ? 'Yes' : 'No';
  $_SESSION['other-benefits'] = $_POST['other-benefits'];
  $_SESSION['membership'] = $_POST['membership'];
  $_SESSION['bank-account-type'] = $_POST['bank-account-type'];
  $_SESSION['bank-details'] = $_POST['bank-details'];
  $_SESSION['assistive-devices'] = $_POST['assistive-devices'];
  $_SESSION['ACHolderName'] = $_POST['ACHolderName'];
  $_SESSION['AccountNumber'] = $_POST['AccountNumber'];
  $_SESSION['ifscCode'] = $_POST['ifscCode'];
  $_SESSION['BranchName'] = $_POST['BranchName'];
  $_SESSION['pensionAmount'] = $_POST['pensionAmount'];
  


  // Redirect to the next page
  header("Location: 2ndform.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Data Entry Form</title> 
  <link rel="stylesheet" type="text/css" href="home1.css">
  <style>
        .hidden {
            display: none;
        }
        .capitalize {
      text-transform: capitalize;
    }
  </style>
  <script>
    function togglePensionAmount() {
        var checkbox = document.getElementById("pension");
        var pensionAmountDiv = document.getElementById("pensionAmountDiv");

        if (checkbox.checked) {
            pensionAmountDiv.style.display = "block";
        } else {
            pensionAmountDiv.style.display = "none";
        }
    }
    function validatePhoneNumber() {
    var phoneNumberInput = document.getElementById("phone-number");
    var phoneError = document.getElementById("phone-error");
    
    var phoneNumberPattern = /^\d{10}$/; // Regular expression for 10 digits
    
    if (!phoneNumberPattern.test(phoneNumberInput.value)) {
        phoneError.textContent = "Please enter a valid 10-digit phone number";
        phoneNumberInput.style.border = "1px solid red";
    } else {
        phoneError.textContent = "";
        phoneNumberInput.style.border = "";
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

<div class="header">

    <h2>Participant Information</h2>
    <a href="logout.php" class="logout-button">Logout</a>
    <a href="homebutton.php" class="home-button">HOME</a>

  </div>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <!-- Participant Information -->
   
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" class="capitalize" required><br><br>
    
    
    <label for="age">Age:</label>
<input type="number" name="age" id="age" min="0"  required><br><br>


    <label for="gender">Gender:</label>
    <select name="gender" id="gender"  required>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select><br><br>

    <label for="taluk">Taluk:</label>
 <select name="taluk" id="taluk"  required>
  <option value="Changanassery">Changanassery</option>
  <option value="Kottayam">Kottayam</option>
  <option value="Vaikom">Vaikom</option>
  <option value="Meenachil">Meenachil</option>
  <option value="Kanjirappally">Kanjirappally</option>
 </select>


  <label for="panchayat">Panchayat:</label>
 <select name="panchayat" id="panchayat"  required>
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

     
 <label for="ward">Ward:</label>
<select name="ward" id="ward" required>
  <?php
    for ($i = 1; $i <= 30; $i++) {
      echo "<option value='$i'>$i</option>";
    }
  ?>
</select><br><br>

    <label for="education-level">Education Level:</label>
 <select name="education-level" id="education-level"  required>
  <option value="Primary School or Elementary School">Primary School or Elementary School</option>
  <option value="Secondary School or High School">Secondary School or High School</option>
  <option value="Diploma or Certificate Programs">Diploma or Certificate Programs</option>
  <option value="Bachelors Degree">Bachelor's Degree</option>
  <option value="Masters Degree">Master's Degree</option>
 </select><br><br>


 <label for="vocational-training">Vocational Training:</label>
 <select name="vocational-training" id="vocational-training"  required>
    <option value="No">No</option>
    <option value="Yes">Yes</option>
 </select><br><br>
    <label for="address">House Name:</label>
 <textarea name="address" id="address"></textarea><br><br>


    <label for="phone-number">Phone Number:</label>
    <input type="number" name="phone-number" id="phone-number"  oninput="validatePhoneNumber()"  required><br><br>
    <span id="phone-error" style="color: red;"></span>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email"  required><br><br>

    <label for="birth-certificate">Birth Certificate:</label>
    <input type="text" name="birth-certificate" id="birth-certificate"  required ><br><br>

    <label for="disability-certificate">Disability Certificate:</label>
    <input type="text" name="disability-certificate" id="disability-certificate"  required><br><br>

    <label for="udid">UDID:</label>
    <input type="text" name="udid" id="udid"  required ><br><br>

    <label for="aadhar-card-number">Aadhar Card Number:</label>
    <input type="text" name="aadhar-card-number" id="aadhar-card-number" oninput="validateAadhaarNumber()"  required><br><br>
    <span id="aadhaar-error" style="color: red;"></span>

    <label for="election-id">Election ID:</label>
    <input type="text" name="election-id" id="election-id" ><br><br>

    <label for="ration-card">Ration Card:</label>
    <input type="text" name="ration-card" id="ration-card" ><br><br>

    <label for="other-identity">Other Identity:</label>
    <input type="text" name="other-identity" id="other-identity"><br><br>

    <label for="assistive-devices">Use of any assistive devices:</label>
    <input type="radio" name="assistive-devices" value="YES"  required>YES<br><br>
    <input type="radio" name="assistive-devices" value="NO"  required>NO<br><br>

    <label for="pension">Pension:</label>
    <input type="checkbox" name="pension" id="pension" onclick="togglePensionAmount()" ><br><br>

    <div id="pensionAmountDiv" class="hidden">
    <label for="pensionAmount">Pension Amount:</label>
    <input type="number" name="pensionAmount" id="pensionAmount" >
</div>



    <label for="scholarship">Scholarship:</label>
    <input type="checkbox" name="scholarship" id="scholarship"><br><br>

    <label for="health-insurance">Health Insurance:</label>
    <input type="checkbox" name="health-insurance" id="health-insurance"><br><br>

    <label for="asraya">Asraya:</label>
    <input type="checkbox" name="asraya" id="asraya"><br><br>

    <label for="ksrtc-concession">KSRTC Concession:</label>
    <input type="checkbox" name="ksrtc-concession" id="ksrtc-concession"><br><br>

    <label for="private-bus-concession">Private Bus Concession:</label>
    <input type="checkbox" name="private-bus-concession" id="private-bus-concession"><br><br>

    <label for="railway-concession">Railway Concession:</label>
    <input type="checkbox" name="railway-concession" id="railway-concession"><br><br>

    <label for="aswasakiran">Aswasakiran:</label>
    <input type="checkbox" name="aswasakiran" id="aswasakiran"><br><br>

    <label for="other-benefits">Other Benefits:</label>
    <input type="text" name="other-benefits" id="other-benefits"><br><br>

    <label for="membership">Membership:</label>
    <input type="text" name="membership" id="membership"><br><br>

    <label for="bank-account-type">Bank Account Type:</label>
 <select name="bank-account-type" id="bank-account-type" required>
 <option value="own">Own Account</option>
  <option value="joint">Joint Account</option>
  </select><br><br>
  <label for="ACHolderName">Account Holder Name:</label>
  <input type="text" name="ACHolderName" class="capitalize" required><br><br>

  <label for="AccountNumber">Account Number:</label>
  <input type="number" name="AccountNumber" required ><br><br>

  <label for="ifscCode">IFSC Code:</label>
  <input type="text" name="ifscCode" maxlength="11" required><br><br>

  <label for="BranchName">Branch Name:</label>
  <input type="text" name="BranchName" required><br><br>
   
    <input type="submit" value="NEXT">
  </form>
</body>
</html>