<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="borrrower.css" />
  </head>
  <body>
    <header>
      <div class="hamburger" onclick="toggleMenu()">
        <div class="menu-icon"></div>
        <div class="menu-icon"></div>
        <div class="menu-icon"></div>
      </div>
      <nav>
        <ul>
          <li><a href="#" onclick="toggleDashboard()">Dashboard</a></li>
          <li><a href="#" onclick="showHomePage()">Home</a></li>
          <li><a href="#" onclick="contact()">Contact Us</a></li>
        </ul>
      </nav>
    </header>
    <div class="container" id="homePage">

      <div class="userType" id="userType">
        <nav>
        <a href="lender.php">Change to Lender</a>
        </nav>
      </div>
      <div class="profile">
        <center>
          <img class="image" src="images/userprofile.png" width="120" height="150">
        </center>
        <p><strong>Name:  <?php include 'fetch_name.php'; ?></strong> <span id="name"></span></p>
          <p><strong>Email ID: <?php include 'fetch_email.php'; ?></strong> <span id="email"></span></p>
          <p>
            <strong>Address: <?php include 'fetch_address.php'; ?></strong>
            <span id="address"></span>
          </p>
          <p>
            <strong>Business: <?php include 'fetch_business.php'; ?></strong>
            <span id="business"></span>
          </p>
          <p>
            <strong>Annual Income: <?php include 'fetch_income.php'; ?></strong> <span id="income"></span>
          </p>
          <p><strong>Name of Collateral: <?php include 'fetch_collateral.php'; ?></strong> <span id="collateralName"></span></p>
          <p><strong>Market Value of Collateral: <?php include 'fetch_collateralVal.php'; ?></strong> <span id="collateralValue"></span></p>
          <p><strong>Contact: <?php include 'fetch_contact.php'; ?></strong> <span id="contact"></span></p>
        </div>
      </div>
    </div>
    <div class="dashboard-panel" id="dashboard" >
      <div class="dashboard-content">
        <div class="closeDashboard" onclick="closeDashboard()">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            width="24"
            height="24"
            color="white"
            fill="none"
          >
            <path
              d="M19.0005 4.99988L5.00045 18.9999M5.00045 4.99988L19.0005 18.9999"
              stroke="currentColor"
              stroke-width="1.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </div>
        <h1>Dashboard</h1>
        <nav>
          <p><a href="#" onclick="Edit()">Edit Profile</a></p>
          <p><a href="#" onclick="LendersList()">Lenders List</a></p>
          <p><a href="#" onclick="Application()">Application Status</a></p>
          <p><a href="#" onclick="Review()">User Review</a></p>
          <p><a href="#" onclick="FAQ()">FAQs</a></p>
        </nav>
        <div class="logout" onclick="logout()">Logout</div>
      </div>
      
    </div>

    <script src="borrower.js"></script>
  </body>
</html>
