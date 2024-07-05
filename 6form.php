<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Store the form data in session variables
      //  $_SESSION['family-participant-id'] = $_POST['family-participant-id'];
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
        $_SESSION['parentsPensionAmount'] = $_POST['parentsPensionAmount']; 
    // Redirect to the next form or process the data further
        // You can update this part based on your application's logic
      
        header("Location: next_form.php");
        exit;
    } //else {
        // Handle form validation errors or missing fields
       // echo "Please fill in all the required fields.";
    //}
//}
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
        /* CSS styles for <p> tags */
/* CSS styles for <p> tags */
p {
  font-size: 18px;
  color: #333;
  padding: 10px; /* Add padding for spacing within the section */
  border: 2px solid #0074D9; /* Add a border with a color of your choice */
  background-color: #bfecb0; /* Add a background color for the section */
  border-radius: 5px; /* Add rounded corners to the section */
  margin: 10px 0;
  font-weight: bold;
  /* You can adjust these styles to match your preferred appearance */
}
/* CSS styles for input fields */
.hidden {
        display: none;
    }

    #confirmation-alert {
        background-color: #4CAF50;
        color: white;
        text-align: center;
        padding: 10px;
    }
    .hidden {
            display: none;
        }
        .capitalize {
      text-transform: capitalize;
    }



    </style>
    <script>
       function showConfirmation() {
        if (confirm("Are you sure you want to submit the form?")) {
            document.forms["yourFormName"].submit();
        }
    }
    function toggleParentsPensionAmount() {
        var yesRadio = document.querySelector('input[name="parents-pension"][value="YES"]');
        var parentsPensionAmountDiv = document.getElementById("parentsPensionAmountDiv");

        if (yesRadio.checked) {
            parentsPensionAmountDiv.style.display = "block";
        } else {
            parentsPensionAmountDiv.style.display = "none";
        }
    }
    function roundNumber(input) {
    // Round the value to the nearest integer (no decimal places)
    input.value = Math.round(input.value);
}
</script>
</head>
<body>
<div class="header">
  <h2>Family Information</h2>
  <a href="logout.php" class="logout-button">Logout</a>
    </div>
    <form name="yourFormName" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="showConfirmation(); return false;">

    <!-- Family Information 
    <label for="family-participant-id">Participant ID:</label>
    <input type="number" name="family-participant-id" id="family-participant-id"><br><br>-->
    

    <p>Family Member Details</p><br>
    <label for="father-name">Father's Name:</label>
    <input type="text" name="father-name" id="father-name" class="capitalize" required><br><br>

    <label for="mother-name">Mother's Name:</label>
    <input type="text" name="mother-name" id="mother-name" class="capitalize" required><br><br>

    <label for="sibling-name">Sibling's Name:</label>
    <input type="text" name="sibling-name" id="sibling-name" class="capitalize"><br><br>

    <label for="father-age">Father's Age:</label>
    <input type="number" name="father-age" id="father-age" min="0" ><br><br>

    <label for="mother-age">Mother's Age:</label>
    <input type="number" name="mother-age" id="mother-age" min="0"><br><br>

    <label for="sibling-age">Sibling's Age:</label>
    <input type="number" name="sibling-age" id="sibling-age" min="0"><br><br>

    <label for="father-education">Father's Education:</label>
    <select name="father-education" id="father-education"  required>
  <option value="Primary School or Elementary School">Primary School or Elementary School</option>
  <option value="Secondary School or High School">Secondary School or High School</option>
  <option value="Diploma or Certificate Programs">Diploma or Certificate Programs</option>
  <option value="Bachelors Degree">Bachelor's Degree</option>
  <option value="Masters Degree">Master's Degree</option>
 </select><br><br>

    <label for="mother-education">Mother's Education:</label>
    <select name="mother-education" id="mother-education"  required>
  <option value="Primary School or Elementary School">Primary School or Elementary School</option>
  <option value="Secondary School or High School">Secondary School or High School</option>
  <option value="Diploma or Certificate Programs">Diploma or Certificate Programs</option>
  <option value="Bachelors Degree">Bachelor's Degree</option>
  <option value="Masters Degree">Master's Degree</option>
 </select><br><br>
    <label for="sibling-education">Sibling's Education:</label>
    <select name="sibling-education" id="sibling-education"  required>
    <option value="null">None</option>
  <option value="Primary School or Elementary School">Primary School or Elementary School</option>
  <option value="Secondary School or High School">Secondary School or High School</option>
  <option value="Diploma or Certificate Programs">Diploma or Certificate Programs</option>
  <option value="Bachelors Degree">Bachelor's Degree</option>
  <option value="Masters Degree">Master's Degree</option>
 </select><br><br>

    <label for="father-occupation">Father's Occupation:</label>
    <input type="text" name="father-occupation" id="father-occupation"><br><br>

    <label for="mother-occupation">Mother's Occupation:</label>
    <input type="text" name="mother-occupation" id="mother-occupation"><br><br>

    <label for="sibling-occupation">Sibling's Occupation:</label>
    <input type="text" name="sibling-occupation" id="sibling-occupation"><br><br>

    <label for="father-salary">Father's Salary:</label>
    <input type="number" name="father-salary" id="father-salary" min="0" step="1" onblur="roundNumber(this)"><br><br>

    <label for="mother-salary">Mother's Salary:</label>
    <input type="number" name="mother-salary" id="mother-salary" min="0"step="1" onblur="roundNumber(this)"><br><br>

    <label for="sibling-salary">Sibling's Salary:</label>
    <input type="number" name="sibling-salary" id="sibling-salary" min="0" step="1" onblur="roundNumber(this)"><br><br>

    <label for="parents-pension">Parents having Pension:</label>
    <input type="radio" name="parents-pension" value="YES" onclick="toggleParentsPensionAmount()" required>YES<br><br>
    <input type="radio" name="parents-pension" value="NO" onclick="toggleParentsPensionAmount()" required>NO<br><br>

    <div id="parentsPensionAmountDiv" class="hidden">
    <label for="parentsPensionAmount">Parents' Pension Amount:</label>
    <input type="text" name="parentsPensionAmount" id="parentsPensionAmount">
</div>

    <label for="employable-skills">Parents Willing to Send Children for Employable Skills Development:</label>
    <input type="checkbox" name="employable-skills" value="Yes" required><br><br>

    
    <label for="family-income-level">Income Level:</label>
    <input type="number" name="family-income-level" id="family-income-level" min="0" required><br><br>

    <label for="family-ration-card-type">Ration Card Type:</label>
<select name="family-ration-card-type" id="family-ration-card-type" required>
  <option value="AAY">Antyodaya Anna Yojana (AAY)</option>
  <option value="PHH">Priority Household (PHH)</option>
  <option value="BPL">Below Poverty Line (BPL)</option>
  <option value="APL">Above Poverty Line (APL)</option>
  <option value="AY">Annapoorna Yojana (AY)</option>
</select><br><br>
 
<p>Housing Information</p>

    <label for="family-land-ownership-details">Land Ownership Details:</label>
<select name="family-land-ownership-details" id="family-land-ownership-details" required>
  <option value="own">Own</option>
  <option value="leased">Leased</option>
</select><br><br>

<label for="family-land-area">Land Area (in cent):</label>
<input type="number" name="family-land-area" id="family-land-area" step="0.01" min="0"><br><br>


<label for="family-house-details">House Details:</label>
<select name="family-house-details" id="family-house-details" required>
  <option value="owned">Owned</option>
  <option value="rented">Rented</option>
</select><br><br>

<label for="house-land-area">House Area (in sq):</label>
<input type="number" name="house-land-area" id="house-land-area" step="0.01" min="0"><br><br>

<label for="type-of-construction">House Type:</label>
<select name="type-of-construction" id="type-of-construction" required>
  <option value="concrete">Concrete</option>
  <option value="asbestos">Asbestos</option>
  <option value="thatched">Thatched</option>
</select><br><br>

<label for="monthly-housing-costs">Monthly Housing Costs:</label>
    <input type="number" name="monthly-housing-costs" id="monthly-housing-costs" step="0.01" min="0" required><br><br>

    <label for="family-water-source">Water Source:</label>
<select name="family-water-source" id="family-water-source" required>
    <option value="municipal">Municipal Water Supply</option>
    <option value="well">Well Water</option>
    <option value="borehole">Borehole Water</option>
    <option value="river-stream">River and Stream Water</option>
    <option value="rainwater-harvesting">Rainwater Harvesting</option>
</select><br><br>


    <label for="family-cooking-fuel-source">Cooking Fuel Source:</label>
        <select name="family-cooking-fuel-source" id="family-cooking-fuel-source" required>
            <option value="Gas">Gas</option>
            <option value="Kerosene">Kerosene</option>
            <option value="Firewood">Firewood</option>
        </select><br><br>

        <label for="family-toilet-type">Toilet Type:</label>
<select name="family-toilet-type" id="family-toilet-type">
  <option value="indoor">Indoor</option>
  <option value="outdoor">Outdoor</option>
</select><br><br>


    <label for="family-transportation">Transportation:</label>
<select name="family-transportation" id="family-transportation">
<option value="">Select</option>
  <option value="private">Private</option>
  <option value="public">Public</option>
</select><br><br>



    <div class="form-buttons">
    <a href="4form.php" class="back-button">Back</a>
    <div id="confirmation-alert" class="hidden">
    <p>Your form has been submitted successfully!</p>
</div>


    <input type="submit" value="SUBMIT">
     </div>
  </div>
  </form>
</body>
</html>