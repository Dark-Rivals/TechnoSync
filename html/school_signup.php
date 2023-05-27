<?php
// Include the database connection file
require_once 'connection.php';

// Function to generate a unique filename
function generateUniqueFilename($filename)
{
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $random_string = bin2hex(random_bytes(8));
    $timestamp = time();
    $unique_filename = $timestamp . '_' . $random_string . '.' . $extension;
    return $unique_filename;
}

// Retrieve form data
$school_name = $_POST['school_name'];
$city = $_POST['city'];
$district = $_POST['district'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$max_grade = $_POST['max_grade'];
$no_of_students = $_POST['no_of_students'];
$authority_name = $_POST['authority_name'];
$contact_number = $_POST['contact_number'];
$school_email = $_POST['school_email'];
$password = $_POST['password'];
$location_link = $_POST['location_link'];

// Upload and store Authority ID Card with a unique filename
$authority_id_filename = generateUniqueFilename($_FILES['authority_id']['name']);
$authority_id_path = 'uploads/' . $authority_id_filename;
move_uploaded_file($_FILES['authority_id']['tmp_name'], $authority_id_path);

// Insert data into the database
$sql = "INSERT INTO schoollogin (school_name, city, district, state, pincode, max_grade, no_of_students, authority_name, contact_number, school_email, location_link, authority_id_path,password)
        VALUES ('$school_name', '$city', '$district', '$state', '$pincode', '$max_grade', '$no_of_students', '$authority_name', '$contact_number', '$school_email', '$location_link', '$authority_id_path','$password')";

if ($conn->query($sql) === TRUE) {
  header("Location: school_login.html");
} else {
  echo "Error: ";
}

// Close the database connection
$conn->close();
?>
