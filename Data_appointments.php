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
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ee6b6b;
            overflow-x: auto;
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
            background-color: #4CAF50;
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
        } else {
            echo "<div class='container'><h2>Error: " . $sql . "<br>" . $conn->error . "</h2></div>";
        }
    }

    // Fetch and display existing appointments
    $sql = "SELECT * FROM appointments";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='container'>";
        echo "<h2>Existing Appointments</h2>";
        echo "<table>";
        echo "<tr><th>Full Name</th><th>Email</th><th>Phone</th><th>Age</th><th>Blood Type</th><th>Appointment Date</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["full_name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
            echo "<td>" . $row["blood_type"] . "</td>";
            echo "<td>" . $row["appointment_date"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    } else {
        echo "<div class='container'><p>No appointments yet.</p></div>";
    }

    // Close connection
    $conn->close();
    ?>


</body>

</html>
