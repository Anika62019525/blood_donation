<?php
// Start session (if not already started)
session_start();

// Check if the user is logged in and session variables are set
if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
    // Check if the photo_url session variable is set
    if(isset($_SESSION['photo_url'])) {
        // Clear the photo_url session variable to remove the image
        unset($_SESSION['photo_url']);
    }
}

// Redirect to the login page or any other appropriate page
header("Location: index.php"); // Replace 'index.php' with the appropriate page URL
exit;
?>
