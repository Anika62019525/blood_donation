<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            width: 380px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-image: url('https://s3.envato.com/files/166316029/4.png');
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
            color: yellow;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: white;
            font-weight: 1000;
            
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
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

        .success-message {
            color: green;
            margin-top: 8px;
        }

        .error-message {
            color: red;
            margin-top: 8px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Admin_Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" name="login">Login</button>

    <?php
    // Start session (if not already started)
    session_start();

    // Check if the user is already logged in
    if (isset($_SESSION['user_id'])) {
        // If already logged in, redirect to the profile page
        header("Location: Data.php");
        exit();
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "login";

        $conn = new mysqli($servername, $username, '', $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p class='error-message'>Invalid email format.</p>";
            exit();
        }

        $stmt = $conn->prepare("SELECT * FROM users_signup WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $stored_password = $user['password'];

            // Verify password using password_verify()
            if ($stored_password == $password) {
                // Set session variables
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];

                // Redirect to profile page
                header("Location: Data.php");
                exit();
            } else {
                echo "<p class='error-message'>Invalid email or password.</p>";
            }
        } else {
            echo "<p class='error-message'>User not found.</p>";
        }

        $stmt->close();
        $conn->close();
    }
?>
    </form>
</div>

</body>
</html>
