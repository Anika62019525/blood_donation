<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Donation Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background-image: url(/blood-donation-charity-website-tempalte/assets/images/gallery/backgroundnew.jpg);
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      background-color: rgb(241, 125, 125);
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input,
    select,
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #4caf50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color: #45a049;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th,
    td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #4caf50;
      color: white;
    }
  </style>
</head>

<body>

  <?php
  // Database connection parameters
  $servername = "localhost"; // Change this if your database is hosted elsewhere
  $username = "root"; // Change this to your database username
  $password = ""; // Change this to your database password
  $dbname = "login"; // Change this to your database name

  // Create connection
  $conn = new mysqli($servername, $username, '', $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $bloodType = $_POST['bloodType'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO donations (name, email, age, blood_type, phone, address)
            VALUES ('$name', '$email', '$age', '$bloodType', '$phone', '$address')";

    if ($conn->query($sql) === TRUE) {
      echo "<p>Thank you for your donation!</p>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  // Fetch and display existing donations
  $sql = "SELECT * FROM donations";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<div class='container'>";
    echo "<h2>Existing Donations</h2>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th><th>Age</th><th>Blood Type</th><th>Phone</th><th>Address</th></tr>";
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["email"] . "</td>";
      echo "<td>" . $row["age"] . "</td>";
      echo "<td>" . $row["blood_type"] . "</td>";
      echo "<td>" . $row["phone"] . "</td>";
      echo "<td>" . $row["address"] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
  } else {
    echo "<div class='container'><p>No donations yet.</p></div>";
  }

  // Close connection
  $conn->close();
  ?>

  
</body>

</html>
