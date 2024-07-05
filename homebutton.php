<?php
session_start();
if (isset($_SESSION['username'])) {
    // Check if the logged-in user is an admin
    $isAdmin = ($_SESSION['username'] === "ADMIN");
    if ($isAdmin) {

    // Rest of your existing code for processing the admin page
    header("Location: admin.php");
    }else{
        header("Location: home1.php");
    }
}

exit;
?>
