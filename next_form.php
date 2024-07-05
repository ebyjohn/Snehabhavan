<?php
// Start the session
session_start();

// Check if the form data is available in session variables
if (isset($_SESSION['name'])) {
    // Retrieve the form data from session variables


    // Database connection variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mysnehabhavan";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the participant information table
   //if (isset($_SESSION['participant-name']) && isset($_SESSION['participant-age']) && isset($_SESSION['participant-gender'])) {
   // $participantId = $_SESSION['participant-id'];
    $participantName = $_SESSION['name'];
    $participantAge = $_SESSION['age'];
    $participantGender = $_SESSION['gender'];
    $participantTaluk= $_SESSION['taluk'];
    $participantPanchayat= $_SESSION['panchayat'];
    $participantWard= $_SESSION['ward'];
    $educationLevel = $_SESSION['education-level'];
    $vocationalTraining = $_SESSION['vocational-training'];
    $address = $_SESSION['address'];
    $phoneNumber = $_SESSION['phone-number'];
    $email = $_SESSION['email'];
    $birthCertificate = $_SESSION['birth-certificate'];
    $disabilityCertificate = $_SESSION['disability-certificate'];
    $aadharCardNumber = $_SESSION['aadhar-card-number'];
    $electionId = $_SESSION['election-id'];
    $udid = $_SESSION['udid'];
    $rationCard = $_SESSION['ration-card'];
    $otherIdentity = $_SESSION['other-identity'];
    $pension = $_SESSION['pension'];
    $scholarship = $_SESSION['scholarship'];
    $healthInsurance = $_SESSION['health-insurance'];
    $asraya = $_SESSION['asraya'];
    $ksrtcConcession = $_SESSION['ksrtc-concession'];
    $privateBusConcession =$_SESSION['private-bus-concession'];
    $railwayConcession = $_SESSION['railway-concession'];
    $aswasakiran = $_SESSION['aswasakiran'];
    $otherBenefits = $_SESSION['other-benefits'];
    $membership = $_SESSION['membership'];
    $bankAccountType = $_SESSION['bank-account-type'];
    $bankDetails = $_SESSION['bank-details'];
    $disabilityType = $_SESSION['disability-type'];
    $ageOfOnset = $_SESSION['age-of-onset'];
    $severity = $_SESSION['severity'];
    $duration = $_SESSION['duration'];
    $employmentStatus = $_SESSION['employment-status'];
    $monthlyIncome = $_SESSION['monthly-income'];
    $typeOfWork = $_SESSION['type-of-work'];
    $registeredWithEmploymentExchange = $_SESSION['registered-with-employment-exchange'];
    $healthcareCoverageSource = $_SESSION['healthcare-coverage-source'];
    $monthlyHealthcareExpenses = $_SESSION['monthly-healthcare-expenses'];
    $healthcareServicesUsed = $_SESSION['healthcare-services-used'];
    $housingType = $_SESSION['housing-type'];
    $monthlyHousingCosts = $_SESSION['monthly-housing-costs'];
   // $familyMemberDetails = $_SESSION['family-member-details'];
    $incomeLevel = $_SESSION['family-income-level'];
    $rationCardType =  $_SESSION['family-ration-card-type'];
    $landOwnership = $_SESSION['family-land-ownership-details'];
    $landArea = $_SESSION['family-land-area'];
    $houseOwnership = $_SESSION['family-house-details'];
    $houseArea = $_SESSION['house-land-area'];
    $houseType = $_SESSION['type-of-construction'];
    $waterSource = $_SESSION['family-water-source'];
    $cookingFuelSource = $_SESSION['family-cooking-fuel-source'];
    $toilettype=$_SESSION['family-toilet-type'];
    $transportation =  $_SESSION['family-transportation'];
    $fatherName = $_SESSION['father-name'];
    $motherName = $_SESSION['mother-name'];
    $siblingName = $_SESSION['sibling-name'];
    $fatherAge = $_SESSION['father-age'];
    $motherAge = $_SESSION['mother-age'];
    $siblingAge = $_SESSION['sibling-age'];
    $fatherEducation = $_SESSION['father-education'];
    $motherEducation = $_SESSION['mother-education'];
    $siblingEducation = $_SESSION['sibling-education'];
    $fatherOccupation = $_SESSION['father-occupation'];
    $motherOccupation = $_SESSION['mother-occupation'];
    $siblingOccupation = $_SESSION['sibling-occupation'];
    $fatherSalary = $_SESSION['father-salary'];
    $motherSalary = $_SESSION['mother-salary'];
    $siblingSalary = $_SESSION['sibling-salary'];
    $parentsPension = $_SESSION['parents-pension'];
    $employableSkills= $_SESSION['employable-skills'];
    $assistiveDevices = $_SESSION['assistive-devices'];
    $ACHolderName =  $_SESSION['ACHolderName'];
    $AccountNumber = $_SESSION['AccountNumber'];
    $ifscCode = $_SESSION['ifscCode'];
    $BranchName = $_SESSION['BranchName'];
    $pensionAmount= $_SESSION['pensionAmount'];
    $parentsPensionAmount= $_SESSION['parentsPensionAmount'];
    

    $participantQuery = "INSERT INTO participantdetails (Name, Age, Gender,panchayat,taluk,ward,EducationLevel, VocationalTraining, Address, PhoneNumber, Email, BirthCertificate, DisabilityCertificate,Udid, AadharCardNumber, ElectionID, RationCard, OtherIdentity, AssistiveDevices, Pension,pensionAmount, Scholarship, HealthInsurance, Asraya, KSRTCConcession, PrivateBusConcession, RailwayConcession, Aswasakiran, OtherBenefits, Membership, BankAccountType, ACHolderName,AccountNumber,ifscCode,BranchName,
                          DisabilityType, AgeOfOnset, Severity, Duration,EmploymentStatus, MonthlyIncome, TypeOfWork, RegisteredWithEmploymentExchange,HealthcareCoverageSource, MonthlyHealthcareExpenses, HealthcareServicesUsed,HousingType, MonthlyHousingCosts, FatherName, MotherName, SiblingName, FatherAge, MotherAge, SiblingAge, FatherEducation, MotherEducation, SiblingEducation, FatherOccupation, MotherOccupation, SiblingOccupation, FatherSalary, MotherSalary, SiblingSalary,ParentsPension,parentsPensionAmount, IncomeLevel, RationCardType,  LandOwnership, LandArea, HouseOwnership, HouseArea, HouseType, WaterSource, CookingFuelSource,ToiletType,Transportation,EmployableSkills)
                          VALUES ( '$participantName', '$participantAge', '$participantGender','$participantPanchayat','$participantTaluk','$participantWard', '$educationLevel', '$vocationalTraining', '$address', '$phoneNumber', '$email', '$birthCertificate', '$disabilityCertificate', '$udid','$aadharCardNumber', '$electionId', '$rationCard', '$otherIdentity','$assistiveDevices', '$pension','$pensionAmount', '$scholarship', '$healthInsurance', '$asraya', '$ksrtcConcession', '$privateBusConcession', '$railwayConcession', '$aswasakiran', '$otherBenefits', '$membership', '$bankAccountType', ' $ACHolderName','$AccountNumber','  $ifscCode',' $BranchName ',
                          '$disabilityType', '$ageOfOnset', '$severity', '$duration','$employmentStatus', '$monthlyIncome', '$typeOfWork', '$registeredWithEmploymentExchange', '$healthcareCoverageSource', '$monthlyHealthcareExpenses', '$healthcareServicesUsed','$housingType', '$monthlyHousingCosts','$fatherName', '$motherName', '$siblingName', '$fatherAge', '$motherAge', '$siblingAge', '$fatherEducation', '$motherEducation', '$siblingEducation', '$fatherOccupation', '$motherOccupation', '$siblingOccupation', '$fatherSalary', '$motherSalary', '$siblingSalary','$parentsPension' ,' $parentsPensionAmount','$incomeLevel', '$rationCardType', 
                          '$landOwnership', '$landArea', '$houseOwnership', '$houseArea', '$houseType', '$waterSource', '$cookingFuelSource','$toilettype','$transportation','$employableSkills' )";
                          
    
    
                      if ($conn->query($participantQuery ) !== TRUE) {
                            echo "Error inserting family information: " . $conn->error;
                        }

    // Close the database connection
    $conn->close();

    // Clear the session variables
 
  

    // Redirect to a success page
    header("Location: home1.php");
    exit();
} else {
    // If the form data is not available, redirect to the first form page
    header("Location: error.php");
    exit();
}
?>