<!DOCTYPE html>
<html>
<head>
  <title>Mentor Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    header {
      background-color: #f2f2f2;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    #logo {
      display: flex;
      align-items: center;
    }
    
    #logo img {
      height: 40px;
      margin-right: 10px;
    }
    
    #website-name {
      font-weight: bold;
      font-size: 18px;
    }
    
    #user-profile {
      display: flex;
      align-items: center;
    }
    
    #user-profile img {
      height: 30px;
      width: 30px;
      border-radius: 50%;
      margin-right: 10px;
    }
    #image
    {
      height: 30px;
      width: 30px;
      border-radius: 50%;
      margin-right: 10px;
    }
    
    nav {
      background-color: #333;
      color: #fff;
      padding: 10px;
      display: flex;
      justify-content: space-between;
    }
    
    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }
    
    nav ul li {
      margin-right: 10px;
    }
    
    .content {
      padding: 20px;
    }
    
    h2 {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
<header>
  <div id="logo">
    <img src="logo.png" alt="Logo">
    <div id="website-name">Website Name</div>
  </div>
  <div id="user-profile">
    <?php
    session_start(); // Start the session
    include "connection.php";
    // Retrieve the mentor's ID from the session
    $mentorID = $_SESSION['mentorId'];
    
    // Prepare the query to fetch the mentor's profile picture path
    $stmt = $conn->prepare("SELECT photo_path FROM mentorlogin WHERE id = ?");
    $stmt->bind_param("i", $mentorID);
    $stmt->execute();

    // Get the result of the query
    $result = $stmt->get_result();

    // Check if the query returned a result
    if ($result->num_rows === 1) {
      // Fetch the mentor's profile picture path
      $row = $result->fetch_assoc();
      $photoPath = $row['photo_path'];

      // Display the mentor's profile picture
      echo '<img src="' . $photoPath . '" alt="User Profile Picture">';
    }

    $sql = "SELECT name, email, qualification, status, year_of_study, experience FROM mentorlogin WHERE id = ?"; 
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $mentorID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $mentorName = $row["name"];
      $mentorEmail = $row["email"];
      $mentorQualification = $row["qualification"];
      $mentorStatus = $row["status"];
      $mentorYearOfStudy = $row["year_of_study"];
      $mentorExperience = $row["experience"];
    }

    $conn->close();
    ?>
    <span><?php echo $mentorName; ?></span>
    <a href="logout.php">Logout</a> <!-- Add the logout link/button -->
  </div>
</header>


  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="mentor_profile.php">Profile</a></li>
      <li><a href="#">Notifications</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
  </nav>

  <div class="content">
    <h2>Welcome, Mentor!</h2>
  </div>
  <div id="image">
    <?php
     echo '<img src="' . $photoPath . '" alt="User Profile Picture">' ;?>
  </div>
  
    <div class="profile-summary">
      <h3>Profile Summary</h3>
      <p>Name: <?php echo $mentorName; ?></p>
      <p>Email: <?php echo $mentorEmail; ?></p>
      <p>Qualification: <?php echo $mentorQualification; ?></p>
      <p>Status: <?php echo $mentorStatus; ?></p>
      <p>Year of Study: <?php echo $mentorYearOfStudy; ?></p>
      <p>Experience: <?php echo $mentorExperience; ?></p>
    </div>

    <div class="course-list">
      <!-- Course list content here -->
    </div>
  </div>
</body>
</html>
