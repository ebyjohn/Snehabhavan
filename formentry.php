<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Store form data in session variables
 if(isset($_POST["form1"])){
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
  $_SESSION['assistive-devices'] = $_POST['assistive-devices'];
  $_SESSION['pension'] = $_POST['pension'];
  $_SESSION['scholarship'] = $_POST['scholarship'];
  $_SESSION['health-insurance'] = $_POST['health-insurance'];
  $_SESSION['asraya'] = $_POST['asraya'];
  $_SESSION['ksrtc-concession'] = $_POST['ksrtc-concession'];
  $_SESSION['private-bus-concession'] = $_POST['private-bus-concession'];
  $_SESSION['railway-concession'] = $_POST['railway-concession'];
  $_SESSION['aswasakiran'] = $_POST['aswasakiran'];
  $_SESSION['other-benefits'] = $_POST['other-benefits'];
  $_SESSION['membership'] = $_POST['membership'];
  $_SESSION['bank-account-type'] = $_POST['bank-account-type'];
  $_SESSION['bank-details'] = $_POST['bank-details'];
 }
 if(isset($_POST["form2"])){
  $_SESSION['disability-type'] = $_POST['disability-type'];
  $_SESSION['age-of-onset'] = $_POST['age-of-onset'];
  $_SESSION['severity'] = $_POST['severity'];
  $_SESSION['duration'] = $_POST['duration'];
 }
 if(isset($_POST["form3"])){
  $_SESSION['employment-status'] = $_POST['employment-status'];
  $_SESSION['monthly-income'] = $_POST['monthly-income'];
  $_SESSION['type-of-work'] = $_POST['type-of-work'];
  $_SESSION['registered-with-employment-exchange'] =$_POST['registered-with-employment-exchange'];
 }
 if(isset($_POST["form4"])){
  $_SESSION['healthcare-coverage-source'] = $_POST['healthcare-coverage-source'];
  $_SESSION['monthly-healthcare-expenses'] = $_POST['monthly-healthcare-expenses'];
  $_SESSION['healthcare-services-used'] = $_POST['healthcare-services-used'];
 }
 if(isset($_POST["form5"])){
  $_SESSION['housing-type'] = $_POST['housing-type'];
  $_SESSION['monthly-housing-costs'] = $_POST['monthly-housing-costs'];
  $_SESSION['land-ownership-details'] = $_POST['land-ownership-details'];
  $_SESSION['house-details'] = $_POST['house-details'];
  $_SESSION['water-source'] = $_POST['water-source'];
  $_SESSION['cooking-fuel-source'] = $_POST['cooking-fuel-source'];
  $_SESSION['toilet-type'] = $_POST['toilet-type'];
  $_SESSION['transportation'] = $_POST['transportation'];
 }
 if(isset($_POST["form6"])){
  $_SESSION['housing-type'] = $_POST['housing-type'];
  $_SESSION['monthly-housing-costs'] = $_POST['monthly-housing-costs'];
    $_SESSION['family-income-level'] = $_POST['family-income-level'];
    $_SESSION['family-ration-card-type'] = $_POST['family-ration-card-type'];
    $_SESSION['family-land-ownership-details'] = $_POST['family-land-ownership-details'];
    $_SESSION['family-land-area'] = $_POST['family-land-area'];
    $_SESSION['family-house-details'] = $_POST['family-house-details'];
    $_SESSION['house-land-area'] = $_POST['house-land-area'];
    $_SESSION['type-of-construction'] = $_POST['type-of-construction'];
    $_SESSION['family-water-source'] = $_POST['family-water-source'];
    $_SESSION['family-cooking-fuel-source'] = $_POST['family-cooking-fuel-source'];
    $_SESSION['family-toilet-type'] = $_POST['family-toilet-type'];
    $_SESSION['family-transportation'] = $_POST['family-transportation'];
    $_SESSION['father-name'] = $_POST['father-name'];
    $_SESSION['mother-name'] = $_POST['mother-name'];
    $_SESSION['sibling-name'] = $_POST['sibling-name'];
    $_SESSION['father-age'] = $_POST['father-age'];
    $_SESSION['mother-age'] = $_POST['mother-age'];
    $_SESSION['sibling-age'] = $_POST['sibling-age'];
    $_SESSION['father-education'] = $_POST['father-education'];
    $_SESSION['mother-education'] = $_POST['mother-education'];
    $_SESSION['sibling-education'] = $_POST['sibling-education'];
    $_SESSION['father-occupation'] = $_POST['father-occupation'];
    $_SESSION['mother-occupation'] = $_POST['mother-occupation'];
    $_SESSION['sibling-occupation'] = $_POST['sibling-occupation'];
    $_SESSION['father-salary'] = $_POST['father-salary'];
    $_SESSION['mother-salary'] = $_POST['mother-salary'];
    $_SESSION['sibling-salary'] = $_POST['sibling-salary'];
    $_SESSION['parents-pension'] = $_POST['parents-pension'];
    $_SESSION['employable-skills'] = $_POST['employable-skills'];
 }
 if (isset($_POST['form3_submitted'])) {


  // Redirect to the next page
  header("Location: next_form.php");
  // exit;
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Data Entry Form</title> 
  <link rel="stylesheet" type="text/css" href="home1.css">
  <style>
    /* Style for the tabs container */
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #f1f1f1;
    }

    /* Style for each tab */
    li {
      float: left;
    }

    /* Style for tab links */
    li a {
      display: block;
      color: #333;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    /* Change the background color of the active tab link */
    li a.active {
      background-color: #4CAF50;
      color: white;
    }

    /* Change the color of tab links on hover */
    li a:hover {
      background-color: #ddd;
    }

    /* Hide the content of all tabs except the active one */
    .tab {
      display: none;
    }

    /* Style for the active tab content */
    .active {
      display: block;
    }
  </style>
</head>
<body>
  <a href="logout.php">LOG OUT</a>
<ul>
    <li><a href="#" onclick="showTab('participant-info')">Participant Information</a></li>
    <li><a href="#" onclick="showTab('disability-info')">Disability Information</a></li>
    <li><a href="#" onclick="showTab('employment-info')">Employment Information</a></li>
    <li><a href="#" onclick="showTab('healthcare-info')">Healthcare Information</a></li>
    <li><a href="#" onclick="showTab('housing-info')">Housing Information</a></li>
    <li><a href="#" onclick="showTab('family-info')">Family Information</a></li>
    <!-- Add more tabs as needed -->
  </ul>
  <div id="participant-info" class="tab active">
  <h2>Participant Information</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form1">
    <!-- Participant Information -->
  

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" ><br><br>

    <label for="age">Age:</label>
    <input type="number" name="age" id="age" ><br><br>

    <label for="gender">Gender:</label>
    <select name="gender" id="gender" >
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select><br><br>

    <label for="taluk">Taluk:</label>
<select name="taluk" id="taluk">
  <option value="Changanassery">Changanassery</option>
  <option value="Kottayam">Kottayam</option>
  <option value="Vaikom">Vaikom</option>
  <option value="Meenachil">Meenachil</option>
  <option value="Kanjirappally">Kanjirappally</option>
</select>


    <label for="panchayat">Panchayat:</label>
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
     
    <label for="ward">ward:</label>
    <input type="text" name="ward" id="ward"><br><br>

    <label for="education-level">Education Level:</label>
    <select name="education-level" id="education-level">
        <option value="Primary">Primary</option>
        <option value="Secondary">Secondary</option>
        <option value="Higher Secondary">Higher Secondary</option>
    </select>

    <label for="vocational-training">Vocational Training:</label>
<select name="vocational-training" id="vocational-training">
    <option value="No">No</option>
    <option value="Yes">Yes</option>
</select><br><br>


    <label for="address">Address:</label>
<textarea name="address" id="address"></textarea><br><br>


    <label for="phone-number">Phone Number:</label>
    <input type="tel" name="phone-number" id="phone-number" ><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" ><br><br>

    <label for="birth-certificate">Birth Certificate:</label>
    <input type="text" name="birth-certificate" id="birth-certificate" ><br><br>

    <label for="disability-certificate">Disability Certificate:</label>
    <input type="text" name="disability-certificate" id="disability-certificate" ><br><br>

    <label for="udid">UDID:</label>
    <input type="text" name="udid" id="udid" ><br><br>

    <label for="aadhar-card-number">Aadhar Card Number:</label>
    <input type="text" name="aadhar-card-number" id="aadhar-card-number" ><br><br>

    <label for="election-id">Election ID:</label>
    <input type="text" name="election-id" id="election-id" ><br><br>

    <label for="ration-card">Ration Card:</label>
    <input type="text" name="ration-card" id="ration-card" ><br><br>

    <label for="other-identity">Other Identity:</label>
    <input type="text" name="other-identity" id="other-identity"><br><br>

    <label for="assistive-devices">Use of any assistive devices:</label>
    <input type="radio" name="assistive-devices" value="YES">YES<br><br>
    <input type="radio" name="assistive-devices" value="NO">NO<br><br>


    <label for="pension">Pension:</label>
    <input type="checkbox" name="pension" id="pension"><br><br>

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
<select name="bank-account-type" id="bank-account-type">
<option value="own">Own Account</option>
  <option value="joint">Joint Account</option>
  </select><br><br>

    <label for="bank-details">Bank Details:</label>
<textarea name="bank-details" id="bank-details"></textarea><br><br>

    <input type="submit" value="NEXT">
  </form>
  </div>
  <div id="disability-info" class="tab">
  <h2>Disability Information</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form2">
    <!-- Disability Information 
    <label for="participant-id">Participant ID:</label>
    <input type="number" name="participant-id" id="participant-id" ><br><br>-->
    <div class="form-group">
    <label for="disability-type">Disability Type:</label>
    <select id="disability-type" name="disability-type">
                <option value="blindness">Blindness</option>
                <option value="low-vision">Low-vision</option>
                <option value="leprosy">Leprosy Cured Persons</option>
                <option value="hearing-impairment">Hearing Impairment</option>
                <option value="locomotor-disability">Locomotor Disability</option>
                <option value="dwarfism">Dwarfism</option>
                <option value="intellectual-disability">Intellectual Disability</option>
                <option value="mental-illness">Mental Illness</option>
                <option value="autism-spectrum-disorder">Autism Spectrum Disorder (ASD)</option>
                <option value="cerebral-palsy">Cerebral Palsy (CP)</option>
                <option value="muscular-dystrophy">Muscular Dystrophy (MD)</option>
                <optgroup label="Chronic Neurological Conditions">
                    <option value="alzheimers-dementia">Alzheimer's disease and Dementia</option>
                    <option value="parkinsons-disease">Parkinson's disease</option>
                    <option value="dystonia">Dystonia</option>
                    <option value="als">ALS (Lou Gehrig's disease)</option>
                    <option value="huntingtons-disease">Huntington's disease</option>
                    <option value="neuromuscular-disease">Neuromuscular disease</option>
                    <option value="multiple-sclerosis">Multiple sclerosis</option>
                    <option value="epilepsy">Epilepsy</option>
                    <option value="stroke">Stroke</option>
                </optgroup>
                <option value="specific-learning-disabilities">Specific Learning Disabilities</option>
                <option value="multiple-sclerosis">Multiple Sclerosis (MS)</option>
                <option value="speech-and-language-disability">Speech and Language Disability</option>
                <option value="thalassemia">Thalassemia</option>
                <option value="hemophilia">Hemophilia</option>
                <option value="sickle-cell-disease">Sickle Cell Disease</option>
                <option value="multiple-disabilities">Multiple Disabilities including deaf-blindness</option>
                <option value="acid-attack-victims">Acid attack victims</option>
                <option value="parkinsons-disease">Parkinson's Disease (PD)</option>
            </select>

    <label for="age-of-onset">Age of Onset:</label>
    <input type="number" name="age-of-onset" id="age-of-onset"><br><br>

    <label for="severity">Severity:</label>
    <input type="text" name="severity" id="severity"><br><br>

    <label for="duration">Duration:</label>
    <input type="text" name="duration" id="duration"><br><br>
</div>
    <input type="submit" value="NEXT">
  </form>
</div>
<div id="employment-info" class="tab">
<h2>Employment Information</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form3">
    <!-- Employment Information
    <label for="participant-id">Participant ID:</label>
    <input type="number" name="participant-id" id="participant-id"><br><br> -->
    <link rel="stylesheet" type="text/css" href="2ndform.css">
    <label for="employment-status">Employment Status:</label>
    <input type="text" name="employment-status" id="employment-status" ><br><br>

    <label for="monthly-income">Monthly Income:</label>
    <input type="number" name="monthly-income" id="monthly-income" step="0.01" ><br><br>

    <label for="type-of-work">Type of Work:</label>
    <input type="text" name="type-of-work" id="type-of-work" ><br><br>

    <label for="registered-with-employment-exchange">Registered with Employment Exchange:</label>
    <input type="checkbox" name="registered-with-employment-exchange" id="registered-with-employment-exchange"><br><br>

    <input type="submit" value="NEXT">
  </form>
</div>
<div id="healthcare-info" class="tab">
<h2>Healthcare Information</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form4">
    <!-- Healthcare Information 
    <label for="participant-id">Participant ID:</label>
    <input type="number" name="participant-id" id="participant-id" ><br><br>-->

    <label for="healthcare-coverage-source">Healthcare Coverage Source:</label>
    <textarea name="healthcare-coverage-source" id="healthcare-coverage-source" rows="4" cols="30" ></textarea><br><br>

    <label for="monthly-healthcare-expenses">Monthly Healthcare Expenses:</label>
    <input type="number" name="monthly-healthcare-expenses" id="monthly-healthcare-expenses" step="0.01" ><br><br>

    <label for="healthcare-services-used">Healthcare Services Used:</label>
    <textarea name="healthcare-services-used" id="healthcare-services-used" rows="4" cols="30"></textarea><br><br>

    <input type="submit" value="NEXT">
  </form>
  </div>
  <div id="housing-info" class="tab">
      <h2>Housing Information</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form5">
    <!-- Housing Information 
    <label for="participant-id">Participant ID:</label>
    <input type="number" name="participant-id" id="participant-id"><br><br>-->

    <label for="housing-type">Housing Type:</label>
    <input type="text" name="housing-type" id="housing-type"><br><br>

    <label for="monthly-housing-costs">Monthly Housing Costs:</label>
    <input type="number" name="monthly-housing-costs" id="monthly-housing-costs" step="0.01"><br><br>

    <label for="land-ownership-details">Land Ownership Details:</label>
    <textarea name="land-ownership-details" id="land-ownership-details" rows="4" cols="30"></textarea><br><br>

    <label for="house-details">House Details:</label>
    <textarea name="house-details" id="house-details" rows="4" cols="30"></textarea><br><br>

    <label for="water-source">Water Source:</label>
    <input type="text" name="water-source" id="water-source"><br><br>

    <label for="cooking-fuel-source">Cooking Fuel Source:</label>
    <input type="text" name="cooking-fuel-source" id="cooking-fuel-source"><br><br>

    <label for="toilet-type">Toilet Type:</label>
    <input type="text" name="toilet-type" id="toilet-type"><br><br>

    <label for="transportation">Transportation:</label>
    <input type="text" name="transportation" id="transportation"><br><br>

    <input type="submit" value="NEXT">
  </form>
  </div>
  <div id="family-info" class="tab">
  <h2>Family Information</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form6">
    <!-- Family Information 
    <label for="family-participant-id">Participant ID:</label>
    <input type="number" name="family-participant-id" id="family-participant-id"><br><br>-->
    <label for="housing-type">Housing Type:</label>
    <input type="text" name="housing-type" id="housing-type"><br><br>

    <label for="monthly-housing-costs">Monthly Housing Costs:</label>
    <input type="number" name="monthly-housing-costs" id="monthly-housing-costs" step="0.01"><br><br>

    Family Member Details:<br>
    <label for="father-name">Father's Name:</label>
    <input type="text" name="father-name" id="father-name"><br><br>

    <label for="mother-name">Mother's Name:</label>
    <input type="text" name="mother-name" id="mother-name"><br><br>

    <label for="sibling-name">Sibling's Name:</label>
    <input type="text" name="sibling-name" id="sibling-name"><br><br>

    <label for="father-age">Father's Age:</label>
    <input type="number" name="father-age" id="father-age"><br><br>

    <label for="mother-age">Mother's Age:</label>
    <input type="number" name="mother-age" id="mother-age"><br><br>

    <label for="sibling-age">Sibling's Age:</label>
    <input type="number" name="sibling-age" id="sibling-age"><br><br>

    <label for="father-education">Father's Education:</label>
    <input type="text" name="father-education" id="father-education"><br><br>

    <label for="mother-education">Mother's Education:</label>
    <input type="text" name="mother-education" id="mother-education"><br><br>

    <label for="sibling-education">Sibling's Education:</label>
    <input type="text" name="sibling-education" id="sibling-education"><br><br>

    <label for="father-occupation">Father's Occupation:</label>
    <input type="text" name="father-occupation" id="father-occupation"><br><br>

    <label for="mother-occupation">Mother's Occupation:</label>
    <input type="text" name="mother-occupation" id="mother-occupation"><br><br>

    <label for="sibling-occupation">Sibling's Occupation:</label>
    <input type="text" name="sibling-occupation" id="sibling-occupation"><br><br>

    <label for="father-salary">Father's Salary:</label>
    <input type="number" name="father-salary" id="father-salary"><br><br>

    <label for="mother-salary">Mother's Salary:</label>
    <input type="number" name="mother-salary" id="mother-salary"><br><br>

    <label for="sibling-salary">Sibling's Salary:</label>
    <input type="number" name="sibling-salary" id="sibling-salary"><br><br>

    <label for="parents-pension">Parents having Pension:</label>
    <input type="radio" name="parents-pension" value="YES">YES<br><br>
    <input type="radio" name="parents-pension" value="NO">NO<br><br>

    <label for="employable-skills">Parents Willing to Send Children for Employable Skills Development:</label>
    <input type="checkbox" name="employable-skills" value="Yes"><br><br>

    
    <label for="family-income-level">Income Level:</label>
    <input type="number" name="family-income-level" id="family-income-level" step="0.01"><br><br>

    <label for="family-ration-card-type">Ration Card Type:</label>
<select name="family-ration-card-type" id="family-ration-card-type">
  <option value="AAY">Antyodaya Anna Yojana (AAY)</option>
  <option value="PHH">Priority Household (PHH)</option>
  <option value="BPL">Below Poverty Line (BPL)</option>
  <option value="APL">Above Poverty Line (APL)</option>
  <option value="AY">Annapoorna Yojana (AY)</option>
</select><br><br>


    <label for="family-land-ownership-details">Land Ownership Details:</label>
<select name="family-land-ownership-details" id="family-land-ownership-details">
  <option value="own">Own</option>
  <option value="leased">Leased</option>
</select><br><br>

<label for="family-land-area">Land Area (in cent):</label>
<input type="number" name="family-land-area" id="family-land-area" step="0.01"><br><br>

<label for="family-house-details">House Details:</label>
<select name="family-house-details" id="family-house-details">
  <option value="owned">Owned</option>
  <option value="rented">Rented</option>
</select><br><br>

<label for="house-land-area">House Area (in cent):</label>
<input type="number" name="house-land-area" id="house-land-area" step="0.01"><br><br>

<label for="type-of-construction">House Type:</label>
<select name="type-of-construction" id="type-of-construction">
  <option value="concrete">Concrete</option>
  <option value="asbestos">Asbestos</option>
  <option value="thatched">Thatched</option>
</select><br><br>



    <label for="family-water-source">Water Source:</label>
    <input type="text" name="family-water-source" id="family-water-source"><br><br>

    <label for="family-cooking-fuel-source">Cooking Fuel Source:</label>
    <input type="text" name="family-cooking-fuel-source" id="family-cooking-fuel-source"><br><br>

    <label for="family-toilet-type">Toilet Type:</label>
    <input type="text" name="family-toilet-type" id="family-toilet-type"><br><br>

    <label for="family-transportation">Transportation:</label>
    <input type="text" name="family-transportation" id="family-transportation"><br><br>
    <input type="hidden" name="form3_submitted" value="1">


    <input type="submit" value="Submit">
  </form>
  </div>
  <script>
    // JavaScript function to show the selected tab and hide others
    function showTab(tabName) {
      const tabs = document.getElementsByClassName('tab');
      for (const tab of tabs) {
        if (tab.id === tabName) {
          tab.classList.add('active');
        } else {
          tab.classList.remove('active');
        }
      }

      // Update the active tab link
      const links = document.getElementsByTagName('a');
      for (const link of links) {
        link.classList.remove('active');
        if (link.getAttribute('onclick').includes(tabName)) {
          link.classList.add('active');
        }
      }
    }

    // Function to handle "NEXT" button click for each form
    function moveToNextTab(currentTab, nextTab) {
      const form = document.getElementById(currentTab).getElementsByTagName('form')[0];
      form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission for now
        showTab(nextTab); // Move to the next tab
      });
    }

    // Attach click events for each "NEXT" button to move to the next tab
    moveToNextTab('participant-info', 'disability-info');
    moveToNextTab('disability-info', 'employment-info');
    moveToNextTab('employment-info', 'healthcare-info');
    moveToNextTab('healthcare-info', 'housing-info');
    moveToNextTab('housing-info', 'family-info');
    // Add more forms and tabs as needed
  </script>
</body>
</html>