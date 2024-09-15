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
      max-width: 600px;
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
    select {
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
      margin-right: 10px;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>

  <div class="container">
    <h2>Blood Donation Form</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" min="1" required>

      <label for="bloodType">Blood Type:</label>
      <select id="bloodType" name="bloodType" required>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
      </select>

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="Enter 10-digit phone number" required>

      <label for="address">Address:</label>
      <textarea id="address" name="address" rows="4" required></textarea>

      <button type="submit" name="submit">Donate Blood</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
        // Redirect to receipt page
        header("Location: receipt.php?name=$name&email=$email&age=$age&bloodType=$bloodType&phone=$phone&address=$address");
        exit();
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      // Close connection
      $conn->close();
    }
    ?>
  </div>

</body>

</html>
