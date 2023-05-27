<?php
session_start(); // Start the session

// Include the connection file
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the submitted credentials
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Prepare the query to fetch mentor login data
  $stmt = $conn->prepare("SELECT * FROM mentorlogin WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();

  // Get the result of the query
  $result = $stmt->get_result();
  
  if ($result->num_rows === 1) {
    // Fetch the mentor login data
    $row = $result->fetch_assoc();

    // Verify the password
    if ($password === $row['password']) {
      // Successful login
      $_SESSION['mentorId'] = $row['id']; 
      header("Location: mentor_home.php");
      exit();
    } else {
      // Invalid password
      echo "Invalid password!";
    }
  } else {
    // Invalid email
    echo "Invalid email!";
  }

  // Close the prepared statement
  $stmt->close();
}

// Close the connection
$conn->close();
?>