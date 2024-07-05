
<?php
// update.php
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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the participant ID from the form
    $participantID = $_POST['participantID'];

    // Retrieve all the form input values
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $panchayat = $_POST['panchayat'];
    $taluk = $_POST['taluk'];
    $ward = $_POST['ward'];
    $educationLevel = $_POST['education-level'];
    $vocationalTraining = $_POST['vocationalTraining'];
    $address = $_POST['address'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $birthCertificate = $_POST['birthCertificate'];
    $disabilityCertificate = $_POST['disabilityCertificate'];
    $udid = $_POST['udid'];
    $aadharCardNumber = $_POST['aadharCardNumber'];
    $electionID = $_POST['electionID'];
    $rationCard = $_POST['rationCard'];
    $otherIdentity = $_POST['otherIdentity'];
    $assistiveDevices= $_POST['assistive-devices'];
    $pension = $_POST['pension'];
    $pensionAmount = $_POST['pensionAmount'];
    $scholarship = $_POST['scholarship'];
    $healthInsurance = $_POST['healthInsurance'];
    $asraya = $_POST['asraya'];
    $ksrtcConcession = $_POST['ksrtcConcession'];
    $privateBusConcession = $_POST['privateBusConcession'];
    $railwayConcession = $_POST['railwayConcession'];
    $aswasakiran = $_POST['aswasakiran'];
    $otherBenefits = $_POST['otherBenefits'];
    $membership = $_POST['membership'];
    $bankAccountType = $_POST['bankAccountType'];
   $ACHolderName=$_POST['ACHolderName'];
   $accountnumber=$_POST['AccountNumber'];
   $ifscCode=$_POST['ifscCode'];
   $BranchName=$_POST['BranchName'];
    $disabilityType = $_POST['disabilityType'];
    $ageOfOnset = $_POST['ageOfOnset'];
    $severity = $_POST['severity'];
    $duration = $_POST['duration'];
    $employmentStatus = $_POST['employmentStatus'];
    $monthlyIncome = $_POST['monthlyIncome'];
    $typeOfWork = $_POST['typeOfWork'];
    $registeredWithEmploymentExchange = $_POST['registeredWithEmploymentExchange'];
    $healthcareCoverageSource = $_POST['healthcareCoverageSource'];
    $monthlyHealthcareExpenses = $_POST['monthlyHealthcareExpenses'];
    $healthcareServicesUsed = $_POST['healthcareServicesUsed'];
    $housingType = $_POST['housingType'];
    $monthlyHousingCosts = $_POST['monthlyHousingCosts'];
    $fatherName = $_POST['fatherName'];
    $motherName = $_POST['motherName'];
    $siblingName = $_POST['siblingName'];
    $fatherAge = $_POST['fatherAge'];
    $motherAge = $_POST['motherAge'];
    $siblingAge = $_POST['siblingAge'];
    $fatherEducation = $_POST['fatherEducation'];
    $motherEducation = $_POST['motherEducation'];
    $siblingEducation = $_POST['siblingEducation'];
    $fatherOccupation = $_POST['fatherOccupation'];
    $motherOccupation = $_POST['motherOccupation'];
    $siblingOccupation = $_POST['siblingOccupation'];
    $fatherSalary = $_POST['fatherSalary'];
    $motherSalary = $_POST['motherSalary'];
    $siblingSalary = $_POST['siblingSalary'];
    $parentsPension= $_POST['parents-pension'];
    $parentsPensionAmount= $_POST['parentsPensionAmount'];
    $employableSkills=$_POST['employable-skills'];
    $incomeLevel = $_POST['incomeLevel'];
    $rationCardType = $_POST['rationCardType'];
    $landOwnership = $_POST['landOwnership'];
    $landArea = $_POST['landArea'];
    $houseOwnership = $_POST['houseOwnership'];
    $houseArea = $_POST['houseArea'];
    $houseType = $_POST['houseType'];
    $waterSource = $_POST['waterSource'];
    $cookingFuelSource = $_POST['cookingFuelSource'];
    $toiletType = $_POST['toiletType'];
    $transportation = $_POST['family-transportation'];

    // Prepare and execute the query to update the participant's information
    $sql = "UPDATE participantdetails 
            SET 
                Name = '$name',
                Age = '$age',
                Gender = '$gender',
                panchayat = '$panchayat',
                taluk = '$taluk',
                ward = '$ward',
                EducationLevel = '$educationLevel',
                VocationalTraining = '$vocationalTraining',
                Address = '$address',
                PhoneNumber = '$phoneNumber',
                Email = '$email',
                BirthCertificate = '$birthCertificate',
                DisabilityCertificate = '$disabilityCertificate',
                Udid = '$udid',
                AadharCardNumber = '$aadharCardNumber',
                ElectionID = '$electionID',
                RationCard = '$rationCard',
                OtherIdentity = '$otherIdentity',
                AssistiveDevices=' $assistiveDevices',
                Pension = '$pension',
                pensionAmount='$pensionAmount',
                Scholarship = '$scholarship',
                HealthInsurance = '$healthInsurance',
                Asraya = '$asraya',
                KSRTCConcession = '$ksrtcConcession',
                PrivateBusConcession = '$privateBusConcession',
                RailwayConcession = '$railwayConcession',
                Aswasakiran = '$aswasakiran',
                OtherBenefits = '$otherBenefits',
                Membership = '$membership',
                BankAccountType = '$bankAccountType',
                ACHolderName= '$ACHolderName',
                AccountNumber='$accountnumber',
                ifscCode='$ifscCode',
                BranchName= '$BranchName',
                DisabilityType = '$disabilityType',
                AgeOfOnset = '$ageOfOnset',
                Severity = '$severity',
                Duration = '$duration',
                EmploymentStatus = '$employmentStatus',
                MonthlyIncome = '$monthlyIncome',
                TypeOfWork = '$typeOfWork',
                RegisteredWithEmploymentExchange = '$registeredWithEmploymentExchange',
                HealthcareCoverageSource = '$healthcareCoverageSource',
                MonthlyHealthcareExpenses = '$monthlyHealthcareExpenses',
                HealthcareServicesUsed = '$healthcareServicesUsed',
                HousingType = '$housingType',
                MonthlyHousingCosts = '$monthlyHousingCosts',
                FatherName = '$fatherName',
                MotherName = '$motherName',
                SiblingName = '$siblingName',
                FatherAge = '$fatherAge',
                MotherAge = '$motherAge',
                SiblingAge = '$siblingAge',
                FatherEducation = '$fatherEducation',
                MotherEducation = '$motherEducation',
                SiblingEducation = '$siblingEducation',
                FatherOccupation = '$fatherOccupation',
                MotherOccupation = '$motherOccupation',
                SiblingOccupation = '$siblingOccupation',
                FatherSalary = '$fatherSalary',
                MotherSalary = '$motherSalary',
                SiblingSalary = '$siblingSalary',
                ParentsPension=' $parentsPension',
                parentsPensionAmount=' $parentsPensionAmount',
                IncomeLevel = '$incomeLevel',
                RationCardType = '$rationCardType',
                LandOwnership = '$landOwnership',
                LandArea = '$landArea',
                Houseownership = '$houseOwnership',
                HouseArea = '$houseArea',
                HouseType = '$houseType',
                WaterSource = '$waterSource',
                CookingFuelSource = '$cookingFuelSource',
                ToiletType = '$toiletType',
                Transportation = '$transportation',
                EmployableSkills=' $employableSkills'
            WHERE 
                ParticipantID = '$participantID'";

    if (mysqli_query($conn, $sql)) {
        echo "Participant details updated successfully.";
    } else {
        echo "Error updating participant details: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
header("Location: editparticipant.php");
?>