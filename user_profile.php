<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        /* Your CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://png.pngtree.com/thumb_back/fw800/back_our/20190619/ourmid/pngtree-geometric-gradient-creative-blood-donation-poster-background-material-image_134137.jpg');
            background-size: cover; /* Cover the entire body with the background image */
            background-position: center; /* Center the background image */
        }

        .container {
            width: 380px;
            margin-left: 90px; /* Move the container 50 pixels from the left */
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-size: cover; /* Cover the entire container with the background image */
            background-position: center; /* Center the background image */
        }

        h2 {
    margin-bottom: 20px;
    text-align: center;
    color: #333; /* Change text color to a darker shade */
    font-size: 24px; /* Increase font size for heading */
    text-transform: uppercase; /* Convert text to uppercase */
}

p {
    margin-bottom: 10px;
    text-align: center;
    color: #666; /* Change text color to a slightly darker shade */
    font-size: 16px; /* Increase font size for paragraph */
    line-height: 1.5; /* Increase line height for better readability */
}

        .logout-btn {
            background-color: #f44336;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            margin-top: 20px;
            transition: background-color 0.3s ease; /* Smooth hover effect */
        }

        .logout-btn:hover {
            background-color: #d32f2f;
        }

        /* Additional styles for the uploaded image */
        #profile-img {
    width: 200px; /* Adjust the width as needed */
    height: 200px; /* Set the height to match the width for a square image */
    border-radius: 50%; /* Make the image round */
    display: block;
    margin: 0 auto; /* Center the image */
    margin-top: 20px; /* Add some space between the image and the button */
    object-fit: cover; /* Ensure the image covers the entire container */
    border: 4px solid #fff; /* Add a border with white color */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a shadow for depth */
}
    </style>
</head>
<body>

<div class="container">
    <h2>Admin-Profile</h2>
    <?php
    // Start session (if not already started)
    session_start();

    // Check if the user is logged in and session variables are set
    if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
        echo "<p>Welcome, " . htmlspecialchars($_SESSION['username']) . "!</p>";
        echo "<p>Your email: " . htmlspecialchars($_SESSION['email']) . "</p>";
        // Add more profile information here
    } else {
        echo "<p>You are not logged in.</p>";
        // You can redirect to the login page or handle this case as needed
    }
    ?>

    <!-- Display uploaded photo -->
    <?php
    if(isset($_SESSION['photo_url'])) {
        echo "<img src='" . htmlspecialchars($_SESSION['photo_url']) . "' id='profile-img' alt='Profile Photo'>";
    }
    ?>

    <!-- Hide the upload form if photo_url is set -->
    <?php
    if (!isset($_SESSION['photo_url'])) {
        echo "
        <form action='upload.php' method='post' enctype='multipart/form-data'>
            <p>Upload Photo:</p>
            <input type='file' name='image' id='fileToUpload' accept='image/*'>
            <button type='submit' class='logout-btn' name='upload'>Upload</button>
        </form>
        ";
    }
    ?>

    <form action="logout.php" method="post">
        <button type="submit" class="logout-btn" name="logout">Logout</button>
    </form>
</div>

</body>
</html>
