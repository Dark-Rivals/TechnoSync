<!DOCTYPE html>
<html>
<head>
  <title>Welcome Onboard</title>
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
      height: 60px;
      width: 60px;
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
    $stmt = $conn->prepare("SELECT photo_path,name FROM mentorlogin WHERE id = ?");
    $stmt->bind_param("i", $mentorID);
    $stmt->execute();

    // Get the result of the query
    $result = $stmt->get_result();

    // Check if the query returned a result
    if ($result->num_rows === 1) {
      // Fetch the mentor's profile picture path
      $row = $result->fetch_assoc();
      $photoPath = $row['photo_path'];
      $mentorName=$row['name'];
      // Display the mentor's profile picture
      echo '<img src="' . $photoPath . '" alt="User Profile Picture">';
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
    <h2>Welcome Onboard</h2>
    <!-- Rest of your website content goes here -->
  </div>
</body>
</html>

