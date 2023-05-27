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
      background-color:#3a6dba;
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
      background-color: #f2f2b9;
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
        text-align: center;
      padding: 20px;
    }
    
    h2 {
      margin-bottom: 20px;
    }

    .hidden-link {
      text-decoration: none;
      color: inherit;
    }
    
    .hidden-link:hover {
      text-decoration: underline;
    }

    a{
        font-weight: bold ;
    }

  </style>
</head>
<body bgcolor="#0f52ba">
<header>
  <div id="logo">
    <img src="logo.png" alt="Logo">
    <div id="website-name">Skill Share</div>
  </div>
  <div id="user-profile">
    
     <span>Username</span>
     <br>
    <a href="logout.php">Logout</a>
  </div>
</header>


  <nav>
    <ul>
      <li><a class="hidden-link" href="#"> Home</a></li>
      <li><a class="hidden-link" href="mentor_profile.php"> Profile</a></li>
      <li><a class="hidden-link" href="#"> Notifications</a></li>
      <li><a class="hidden-link" href="#"> Contact Us</a></li>
    </ul>
  </nav>

  <div class="content">
    <br><br><br>
    <h1>Welcome Onboard</h1>
  </div>
</body>
</html>