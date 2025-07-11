<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Page</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: 'Times and New Roman', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #a2b3f4;
      margin: 0;
      padding: 50px;
      display: flex;
      flex-direction: column; 
      justify-content: center;
      align-items: center; 
      min-height: 100vh;
    }

    img {
      display: block;
      height: 50px;
      width: 50px;
      margin-left: auto;
      margin-right: auto;
    }

    p {
      font-size: 24px; 
      margin-top: 10px; 
      text-align: center;
      color: #333; 
    }

    .grid-container {
      display: grid;
      grid-template-columns: 1fr 1fr; 
      grid-template-rows: 60vh 50vh; 
      gap: 20px;
      width: 100%;
      max-width: 900px; 
    }

    .box {
      background-color: rgba(174, 193, 220, 0.644);
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(176, 176, 215, 0.1);
      padding: 20px;
      width: 95%;
      display: flex;
      align-items: flex-start;
      justify-content: center;
      box-sizing: border-box;
    }

    .box2 {
      overflow-y: auto;
      height: 60vh; 
    }
    .box4 {
      overflow-y: auto;
      height: 30vh; 
    }

    .form-wrapper {
      width: 100%;
      max-height: 100%;
      overflow-y: auto; 
      padding-right: 10px;
      box-sizing: border-box;
    }

    .form-content {
      width: 100%;
    }

    .form-content h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
      font-size: 24px;
      font-style:calc()
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .input-group {
      display: flex;
      flex-direction: column;
    }

    label {
      font-size: 14px;
      margin-bottom: 5px;
      color: #555;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="date"],
    input[type="color"],
    select {
      padding: 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="checkbox"] {
      width: auto;
    }

    .terms {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 13px;
      margin-top: 10px;
    }

    button {
      background-color: #44678d;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 5px;
      font-size: 14px;
      cursor: pointer;
      transition: ease;
    }

    button:hover {
      background-color: #0056b3;
    }

    .form-wrapper::-webkit-scrollbar {
      width: 5px;
    }

    .form-wrapper::-webkit-scrollbar-thumb {
      background-color: #ccc;
      border-radius: 5px;
    }
    .table-container {
      margin-top: 20px;
      width: 100%;
      max-width: 900px;
      height: 350px; 
      overflow-y: auto;
      overflow-x: auto; 
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #f4f4f4;
    }

    td {
      background-color: #f9f9f9;
    } 
    .logo-text {
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      margin-top: 10px;

    }

  </style>
</head>
<body>

    <img src="img.png.png" alt="aiub">
    <div class="logo-text">Air Quality Index</div>

    <div class="grid-container">
      <div class="box box1">
        
        <div class="table-container">
          <div class="form-content">
            <h2>User Data Table</h2>
              <table id="userInfoTable">
            <thead>
              <tr>
                <th>City</th>
                <th>AQI</th>
           
              </tr>
            </thead>
            <tbody>
              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>

              <tr><td></td><td></td></tr>


              
            </tbody>
          </table>
        </div>
      </div>
      </div>
  
  <div class="box box2">
    <div class="form-wrapper">
      <div class="form-content">
        <h2>Registration</h2>
        <form id="registrationForm" action="process.php" method="POST">
          <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter Username">
          </div>
          <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="(**-*****-*@student.aiub.edu)">
          </div>
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password"  placeholder="Password">
          </div>
          <div class="input-group">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" placeholder="Confirm Password">
          </div>
          <div class="input-group">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob">
          </div>
          <div class="input-group">
            <label for="input_color">Select color</label>
            <input type="color" id="input_color" name="color" value="#ff0000">
          </div>
          <div class="input-group">
            <label for="location">Location</label>
            <input type="text" id="location" name="location" placeholder="Location">
          </div>
          <div class="input-group">
            <label for="zip">Zip Code</label>
            <input type="text" id="zip" name="zip" placeholder="Zip Code">
          </div>
          <div class="input-group">
            <label for="city">City</label>
            <select name="city" id="city" name="city" required>
              <option value="">Select City</option>
              <option value="Dhaka">Dhaka</option>
              <option value="Chittagong">Chittagong</option>
              <option value="Khulna">Khulna</option>
              <option value="Sylhet">Sylhet</option>
              <option value="Rajshahi">Rajshahi</option>
              <option value="Rangpur">Rangpur</option>
              <option value="Barishal">Barishal</option>
            </select>
          </div>
          <div class="terms">
            <input type="checkbox" id="terms" name="terms">
            <label for="terms">I agree to the Terms and Conditions</label>
          </div>
          <button type="submit">Submit & Register</button>
        </form>
      </div>
    </div>
  </div>
  <div class="box box3">
    <div class="box box3">
  <div class="form-wrapper">
    <div class="form-content">
      <h2>Login</h2>
      <form id="loginForm" action="require.php" method="POST">
        <div class="input-group">
          <label for="loginEmail">Email</label>
          <input type="email" id="loginEmail" name="email" placeholder="Enter Email" required>
        </div>
        <div class="input-group">
          <label for="loginPassword">Password</label>
          <input type="password" id="loginPassword" name="password" placeholder="Enter Password" required>
        </div>
        <button type="submit" name="login_button" value="submit
        
        
        ">Login</button>
      </form>
      <div id="loginMessage" style="color: green; margin-top: 10px; display: none;">Registrar Successful</div>
    </div>
  </div>
</div>
  </div>
  <div class="box box4">
    <?php
    $color = $_COOKIE['color'];
    echo "<body style='background-color:$color;'></body>";
    // Check if the form was submitted and cities are selected
    if (isset($_POST['Cities']) && is_array($_POST['Cities'])) {
        $selectedCities = $_POST['Cities'];
 
        // Connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'AQI');
 
        // Check the connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
 
        // Create a SQL query to fetch AQI for selected cities
        $cityList = "";
        foreach ($selectedCities as $city) {
            $city = mysqli_real_escape_string($conn, $city); // prevent SQL injection
            $cityList .= "'" . $city . "',";
        }
 
        // Remove the last comma
        $cityList = rtrim($cityList, ',');
 
        // Final SQL query
        $sql = "SELECT Country, City, AQI FROM info WHERE City IN ($cityList)";
 
        // Run the query
        $result = mysqli_query($conn, $sql);
 
        // Check if we got any results
        if (mysqli_num_rows($result) > 0) {
            echo "<h2>Selected Cities and Their AQI</h2>";
            echo "<table border='1' cellpadding='8'>";
            echo "<tr><th>Country</th><th>City</th><th>AQI</th></tr>";
 
            // Loop through the results and display them in a table
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" .htmlspecialchars($row['Country'])."</td>";
                echo "<td>" . htmlspecialchars($row['City']) . "</td>";
                echo "<td>" . htmlspecialchars($row['AQI']) . "</td>";
                echo "</tr>";
            }
 
            echo "</table>";
        } else {
            echo "No AQI data found for selected cities.";
        }
 
        // Close the database connection
        mysqli_close($conn);
    } else {
        echo "No cities were selected.";
    }
  //  header("refresh:3; url:index.html");
?>
  </div>
</div>

<script>

  function handleLogin(event) {
    event.preventDefault();

    const email = document.getElementById('loginEmail').value.trim();
    const password = document.getElementById('loginPassword').value.trim();


    if (email === '' || password === '') {
      alert('Please enter both email and password.');
      return false;
    }


    const messageEl = document.getElementById('loginMessage');
    messageEl.style.display = 'block';


    setTimeout(() => {
      messageEl.style.display = 'none';
      window.location.href = 'index.html'; 
    }, 2000);

    return false; 
  }
document.getElementById("registrationForm").addEventListener("submit", function(e) {
    const username = document.getElementById("username").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    const confirmPassword = document.getElementById("confirmPassword").value.trim();
    const dob = document.getElementById("dob").value.trim();
    const location = document.getElementById("location").value.trim();
    const zip = document.getElementById("zip").value.trim();
    const city = document.getElementById("city").value;
    const termsChecked = document.getElementById("terms").checked;

    if (username === "" || email === "" || password === "" || confirmPassword === "" || dob === "" || location === "" || zip === "" || city === "" || !termsChecked) {
        alert("Please fill in all fields and agree to the terms.");
        e.preventDefault(); 
        return;
    }

    const emailPattern = /^\d{2}-\d{5}-\d@student\.aiub\.edu$/;
    if (!emailPattern.test(email)) {
        alert("Invalid email format.");
        e.preventDefault();
        return;
    }

    const passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/;
    if (!passwordPattern.test(password)) {
        alert("Invalid password format.");
        e.preventDefault();
        return;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        e.preventDefault();
        return;
    }

    if (!/^\d{5}$/.test(zip)) {
        alert("Zip Code must be 5 digits.");
        e.preventDefault();
        return;
    }
    
});


  </script>

</body>
</html>