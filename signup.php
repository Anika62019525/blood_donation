<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }

        .container {
            width: 400px;
           
            background-image: url('https://cdn.wallpapersafari.com/47/95/E7Pflb.png');
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #FFFFFF;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: yellow;
            font-weight: 1000;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color:#FFB6C1 ;
            
        }

        button[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
            margin-top: 8px;
        }

        .success-message {
            color: green;
            margin-top: 8px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Admin_Sign_Up</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="admin_code">Admin Code:</label>
            <input type="password" id="admin_code" name="admin_code" required>

            <button type="submit" name="signup">Sign Up</button>

            <?php
            // Database connection parameters
            $servername = "localhost"; // Change this if your database is hosted elsewhere
            $username = "root"; // Change this to your database username
            $password = ""; // Change this to your database password
            $dbname = "login"; // Change this to your database name

            // Create connection
            $conn = new mysqli($servername, $username,'', $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Check if the form is submitted
           // Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])) {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $admin_code = $_POST['admin_code'];

    // Define the admin code
    $correct_admin_code = "Aniket"; // Change this to your actual admin code

    // Check if the provided admin code matches the correct admin code
    if ($admin_code == $correct_admin_code) {
        // Proceed with sign-up process
        // Hash the password for security (optional but recommended)
       
        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO users_signup (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);
        // Execute the statement
        if ($stmt->execute()) {
            echo "<p>Sign up successful. You can now <a href='./login.php'>login</a>.</p>";
        } else {
            echo "Error: " . $stmt->error;
        }
        // Close statement
        $stmt->close();
    } else {
        echo "<p class='error-message'>Error: Only admins are allowed to sign up.</p>";
    }
}

            ?>
        </form>
    </div>

</body>

</html>
