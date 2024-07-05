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
// $_SESSION['disability-participant-id'] = $_POST['participant-id'];
  $_SESSION['disability-type'] = $_POST['disability-type'];
  $_SESSION['age-of-onset'] = $_POST['age-of-onset'];
  $_SESSION['severity'] = $_POST['severity'];
  $_SESSION['duration'] = $_POST['duration'];

  // Redirect to the next page
  header("Location:3form.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Data Entry Form</title>
  <link rel="stylesheet" type="text/css" href="home1.css">
</head>
<body>
<div class="header">
  <h2>Disability Information</h2>
  <a href="logout.php" class="logout-button">Logout</a>
</div>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <!-- Disability Information 
    <label for="participant-id">Participant ID:</label>
    <input type="number" name="participant-id" id="participant-id" ><br><br>-->
    <div class="form-group">
    <label for="disability-type">Disability Type:</label>
    <select id="disability-type" name="disability-type" required>
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
    <input type="number" name="age-of-onset" id="age-of-onset" min="0" required><br><br>

    <label for="severity">Severity:</label>
<select name="severity" id="severity" required>
  <option value="Mild">Mild</option>
  <option value="Moderate">Moderate</option>
  <option value="Severe">Severe</option>
  <option value="Profound">Profound</option>
  <option value="Temporary">Temporary</option>
  <option value="Permanent">Permanent</option>
  <option value="Congenital">Congenital</option>
  <option value="Acquired">Acquired</option>
  <option value="Progressive">Progressive</option>
  <option value="Intermittent">Intermittent</option>
  <option value="Sensory Impairment">Sensory Impairment</option>
</select><br><br>


    <label for="duration">Duration:</label>
    <input type="text" name="duration" id="duration" required><br><br>
    <div class="form-buttons">
    <a href="home1.php" class="back-button">Back</a>

    <input type="submit" value="NEXT">
     </div>
  </div>
    </form>

</body>
</html>