

<?php
include 'config.php';

error_reporting(0);
// Start the session
session_start();

// Get the current user's username
$username = $_SESSION['username'];

// Destroy the session
session_destroy();

// Connect to the database
$conn = mysqli_connect($server, $user, $pass, $database);

// Update the user's status to "offline"
$update = mysqli_query($conn, "UPDATE tabel_user SET status = 'offline' WHERE username = '$username'");

// Redirect to the login page
header("Location: laman_login.php");
?>
