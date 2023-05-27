<?php
session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
header("Location: homepage.html"); // Replace "index.html" with the actual URL of your HTML home page
exit();
?>
