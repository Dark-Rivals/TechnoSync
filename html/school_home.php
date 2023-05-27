<!DOCTYPE html>
<html>
<head>
  <title>Welcome Onboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to bottom, #e4c6ef, #500a49);
      position: relative;
    }
    
    header {
      background-color:#500a49;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: #ffffff;
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
      background-color: #e4c6ef;
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

    
    .level-line {
      display: flex;
      align-items: flex-end;
    }
    
    .level-icon-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 10px;
    }
    
    .level-icon {
      width: 20px;
      height: 20px;
      background-color: #ffffff;
      border-radius: 50%;
    }
    
    .level-number {
      font-weight: bold;
      margin-top: 8px;
      text-align: center;
    }
    
    .level-connector {
      fill: none;
      stroke: #dadbef;
      stroke-width: 2px;
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

  <br><br><br>
  <h3><u> Your Progress</u></h3><br><br>

  <div class="level-line">
    <div class="level-icon-container">
      <div class="level-icon"></div>
      <span class="level-number">Level 1</span>
    </div>
    <svg width="30%" height="100%" viewBox="0 0 400 80">
      <path class="level-connector" d="M80 40 C160 0 320 0 400 40" />
    </svg>
    <div class="level-icon-container">
      <div class="level-icon"></div>
      <span class="level-number">Level 2</span>
    </div>
    <svg width="30%" height="100%" viewBox="0 0 400 80">
      <path class="level-connector" d="M80 40 C160 80 320 80 400 40" />
    </svg>
    <div class="level-icon-container">
      <div class="level-icon"></div>
      <span class="level-number">Level 3</span>
    </div>
    <svg width="30%" height="100%" viewBox="0 0 400 80">
      <path class="level-connector" d="M80 40 C160 0 320 0 400 40" />
    </svg>
    <div class="level-icon-container">
      <div class="level-icon"></div>
      <span class="level-number">Level 4</span>
    </div>
    <svg width="30%" height="100%" viewBox="0 0 400 80">
        <path class="level-connector" d="M80 40 C160 0 320 0 400 40" />
      </svg>
      <div class="level-icon-container">
        <div class="level-icon"></div>
        <span class="level-number">Level 5</span>
      </div>
  </div>
<br><br><br><br><br><br>
</body>
</html>