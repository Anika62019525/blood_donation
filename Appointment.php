<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Appointment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            background-image: url(/blood-donation-charity-website-tempalte/assets/images/Blood\ Donation\ Appointment.jpg);
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ee6b6b;
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
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection parameters
        $servername = "localhost"; // Change this if your database is hosted elsewhere
        $username = "root"; // Change this to your database username
        $password = ""; // Change this to your database password
        $dbname = "login"; // Change this to your database name

        // Create connection
        $conn = new mysqli($servername, $username,"", $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve form data
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $bloodType = $_POST['bloodType'];
        $appointmentDate = $_POST['appointmentDate'];

        // SQL query to insert data into the database
        $sql = "INSERT INTO appointments (full_name, email, phone, age, blood_type, appointment_date)
                VALUES ('$fullName', '$email', '$phone', '$age', '$bloodType', '$appointmentDate')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='container'><h2>Appointment booked successfully</h2></div>";
            header("Location: index.php");
        } else {
            echo "<div class='container'><h2>Error: " . $sql . "<br>" . $conn->error . "</h2></div>";
        }

        // Close connection
        $conn->close();
    }
    ?>

    <div class="container">
        <h2>Blood Book Appointment Form</h2>
        <form id="appointmentForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="1" required>

            <label for="bloodType">Blood Type:</label>
            <select id="bloodType" name="bloodType" required>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>

            <label for="appointmentDate">Preferred Appointment Date:</label>
            <input type="date" id="appointmentDate" name="appointmentDate" required>

            <button type="submit">Book Appointment</button>
        </form>

    </div>

</body>

</html>
