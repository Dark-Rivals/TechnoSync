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
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$qualification = $_POST['qualification'];
$status = $_POST['status'];
$year_of_study = $_POST['year_of_study'];
$topics = implode(', ', $_POST['topics']);
$experience = $_POST['experience'];

// Upload and store photo with a unique filename
$photo_filename = generateUniqueFilename($_FILES['photo']['name']);
$photo_path = 'uploads/' . $photo_filename;
move_uploaded_file($_FILES['photo']['tmp_name'], $photo_path);

// Upload and store ID proof with a unique filename
$id_proof_filename = generateUniqueFilename($_FILES['id_proof']['name']);
$id_proof_path = 'uploads/' . $id_proof_filename;
move_uploaded_file($_FILES['id_proof']['tmp_name'], $id_proof_path);

// Upload and store certifications with a unique filename
$certifications_filename = generateUniqueFilename($_FILES['certifications']['name']);
$certifications_path = 'uploads/' . $certifications_filename;
move_uploaded_file($_FILES['certifications']['tmp_name'], $certifications_path);

// Insert data into the database
$sql = "INSERT INTO mentorlogin (name, email, password, qualification, status, year_of_study, topics, experience, photo_path, id_proof_path, certifications_path)
        VALUES ('$name', '$email', '$password', '$qualification', '$status', '$year_of_study', '$topics', '$experience', '$photo_path', '$id_proof_path', '$certifications_path')";

if ($conn->query($sql) === TRUE) {
  echo "Signup successful!";
} else {
  echo "Error";
}


// Close the database connection
$conn->close();
?>
