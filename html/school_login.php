<?php
session_start(); // Start the session

// Include the connection file
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the submitted credentials
  $school_email = $_POST["email"];
  $password = $_POST["password"];

  // Prepare the query to fetch school login data
  $stmt = $conn->prepare("SELECT * FROM schoollogin WHERE school_email = ?");
  $stmt->bind_param("s", $school_email);
  $stmt->execute();

  // Get the result of the query
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    // Fetch the school login data
    $row = $result->fetch_assoc();

    // Verify the password
    if ($password === $row['password']) {
      // Successful login
      $_SESSION['schoolId'] = $row['id']; // Store the school ID in the session variable
      header("Location: school_home.php"); // Replace "school_home.php" with the actual URL of the school home page
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
