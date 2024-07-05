
<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Database Output Requirements</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('report3.png');
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
      background-attachment: fixed; /* Set background image to be fixed */
  background-size: cover; 
  overflow-y: scroll; 
    }
    /* Hide the default scrollbar */
body::-webkit-scrollbar {
  width: 0.5em;
}

/* Track (the area on the sides of the scrollbar) */
body::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle (the draggable part of the scrollbar) */
body::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
body::-webkit-scrollbar-thumb:hover {
  background: #555;
}

    h1 {
      text-align: center;
      color: #333;
    }
    
    .container {
      max-width: 800px;
      margin: 0 auto;
    }
    
    .button-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 30px;
      margin-top: 30px;
    }
    
    .card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      transition: box-shadow 0.3s ease;
    }
    
    .card:hover {
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }
    
    .card-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    
    .card-description {
      font-size: 14px;
      line-height: 1.4;
    }
    
    /* Menu Styles */
    .home-button {
      position: fixed;
      top: 50px;
      left: 20px;
      transform: translateY(-50%);
      background-color: #333;
      padding: 10px;
      border-radius: 50%; /* Circular shape for the button */
      z-index: 999; /* Ensures the button is above other elements */
    }
    
    .home-link {
      display: block;
      width: 20px;
      height: 20px;
      background-color: #fff;
      position: relative;
    }
    
    .home-link:before,
    .home-link:after {
      content: '';
      position: absolute;
      width: 10px;
      height: 2px;
      background-color: #333;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    
    .home-link:before {
      top: 40%;
      transform: translate(-50%, -50%) rotate(-45deg);
    }
    
    .home-link:after {
      top: 60%;
      transform: translate(-50%, -50%) rotate(45deg);
    }
    .card a {
  text-decoration: none; /* Remove underlines from links */
  color:  black; /* Change link color */
  transition: color 0.3s ease; /* Add a smooth color transition on hover */
}

.card a:hover {
  color: #ff4500; /* Change link color on hover */
}

.card p {
  color: #e6955e;  /* Change paragraph text color */
  margin-top: 10px; /* Add space between the link and paragraph */
}

/* Adjust the font size and other styles as needed */

    
  </style>
</head>
<body>
<div class="container">
    <div class="home-button">
      <a href="admin.php" class="home-link"></a>
    </div>
    
    <h1>Database Output</h1>
    
    <div class="button-grid">
      <div class="card">
        <a href="kottayamreport.php" class="card-title">District - Kottayam</a>
        <p class="card-description">View database output for District - Kottayam</p>
      </div>
      <div class="card">
        <a href="panchayatwisereport.php" class="card-title">Panchayat</a>
        <p class="card-description">View database output for Panchayat</p>
      </div>
      <div class="card">
        <a href="talukwisereport.php" class="card-title">Taluk</a>
        <p class="card-description">View database output for Taluk</p>
      </div>
      <div class="card">
        <a href="wardwisereport.php" class="card-title">Ward</a>
        <p class="card-description">View database output for Ward</p>
      </div>
      <div class="card">
        <a href="wardwisenumber.php" class="card-title">Ward-wise number of families with disabled children/person</a>
        <p class="card-description">View ward-wise number of families with disabled children/person</p>
      </div>
      <div class="card">
        <a href="sixreport.php" class="card-title">Ward-wise family listing of children/persons with disabilities</a>
        <p class="card-description">View ward-wise family listing of children/persons with disabilities</p>
      </div>
      <!-- <div class="card">
        <a href="#" class="card-title">Ward-wise family listing with different disability categories</a>
        <p class="card-description">View ward-wise family listing with different disability categories</p>
      </div> -->
      <div class="card">
        <a href="eightreport.php" class="card-title">Ward-wise listing children of different disabilities</a>
        <p class="card-description">View ward-wise listing of children with different disabilities</p>
      </div>
      <div class="card">
        <a href="ninereport.php" class="card-title">Age-wise distribution of different disabilities</a>
        <p class="card-description">View age-wise distribution of different disabilities</p>
      </div>
      <div class="card">
        <a href="tenreport.php" class="card-title">Sex-wise distribution of different disabilities</a>
        <p class="card-description">View sex-wise distribution of different disabilities</p>
      </div>
      <div class="card">
        <a href="elevenreport.php" class="card-title">Family income of different families with disabled children/person</a>
        <p class="card-description">View family income of different families with disabled children/person</p>
      </div>
      <div class="card">
        <a href="incomewisereport.php" class="card-title">Income-wise distribution of children in different Panchayat & Municipal wards</a>
        <p class="card-description">View income-wise distribution of children in different Panchayat & Municipal wards</p>
      </div>
      <div class="card">
        <a href="singleparent.php" class="card-title">Single parent with disabled children and the category</a>
        <p class="card-description">View single parent with disabled children and their category</p>
      </div>
      <div class="card">
        <a href="fatheroccupationdisabilitywise.php" class="card-title">Father’s occupation of each disability category</a>
        <p class="card-description">View father’s occupation of each disability category</p>
      </div>
      <div class="card">
        <a href="motheroccupationdisabilitywise.php" class="card-title">Mother’s occupation of each disability category</a>
        <p class="card-description">View mother’s occupation of each disability category</p>
      </div>
      <div class="card">
        <a href="fathereducationdisabilitywise.php" class="card-title">Father’s education of each disability category</a>
        <p class="card-description">View father’s education of each disability category</p>
      </div>
      <div class="card">
        <a href="mothereducationdisabilitywise.php" class="card-title">Mother’s education of each disability category</a>
        <p class="card-description">View mother’s education of each disability category</p>
      </div>
      <!-- <div class="card">
        <a href="#" class="card-title">Present engagement of disabled children - category-wise</a>
        <p class="card-description">View present engagement of disabled children category-wise</p>
      </div> -->
      <div class="card">
        <a href="nineteereport.php" class="card-title">Number of children receiving support from any source</a>
        <p class="card-description">View number of children receiving support from any source</p>
      </div>
      <div class="card">
        <a href="participantswithvocationaltraining.php" class="card-title">Number of children receiving occupational/vocational training</a>
        <p class="card-description">View number of children receiving occupational/vocational training</p>
      </div>
      <div class="card">
        <a href="parentspensionreport.php" class="card-title">Number of parents having pensionable job</a>
        <p class="card-description">View number of parents having a pensionable job</p>
      </div>
      <div class="card">
        <a href="assistivedevicesreport.php" class="card-title">Number of children/persons using assistive devices</a>
        <p class="card-description">View number of children/persons using assistive devices</p>
      </div>
      <div class="card">
        <a href="educationlevelreport.php" class="card-title">Number of children attending schools</a>
        <p class="card-description">View number of children attending schools</p>
      </div>
      <div class="card">
        <a href="twentyfourreport.php" class="card-title">Families with disabled children having cultivable land</a>
        <p class="card-description">View families with disabled children having cultivable land</p>
      </div>
      <div class="card">
        <a href="employableskillsreport.php" class="card-title">Number of parents willing to send their children for employable skills development</a>
        <p class="card-description">View number of parents willing to send their children for employable skills development</p>
      </div>
    </div>
  </div>
 
</body>
</html>
