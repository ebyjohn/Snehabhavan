<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "mysnehabhavan";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the input Panchayat value from the form
    $inputPanchayat = $_POST["panchayat"];
    $_SESSION['panchayat']=$inputPanchayat;
    // Create a database connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and execute the query with the input Panchayat value
    $sql = "SELECT ward, COUNT(*) AS child_count FROM participantdetails WHERE (panchayat = '$inputPanchayat' and Age<=18) GROUP BY ward";
    $result = mysqli_query($conn, $sql);

    // Close the database connection
    mysqli_close($conn);
}
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f3f3f3;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        width: 600px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .data-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
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
        background-color: #fef0e7;
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

    .download-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    /* Add additional styles for other table body columns as needed */
</style>

<div class="container">
    <h2>Ward-wise Number of Childrens</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="panchayat">Enter Panchayat:</label>
            <select name="panchayat" id="panchayat"  class="form-control">
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
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php if (isset($result) && mysqli_num_rows($result) > 0) : ?>
        <div class="table-container">
            <div class="table-wrapper">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Ward</th>
                            <th>Number of Childrens</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                            <tr>
                                <td><?php echo $row['ward']; ?></td>
                                <td><?php echo $row['child_count']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php elseif ($_SERVER["REQUEST_METHOD"] === "POST") : ?>
        <p>No results found</p>
    <?php endif; ?>
    <?php echo '<a href="8download.php" class="download-button" style="margin-right: 10px;">Download</a>';?>
    <?php echo '<a href="reports.php" class="download-button">REPORTS</a>';?>
</div>
