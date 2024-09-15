<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <style>
        body {
            background-image: url('https://wallpapercave.com/wp/wp4323467.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
            position: relative;
            bottom: 8px;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .logout {
            position: absolute;
            top: 1;
            right: 10px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="./Data_donation.php" target="_self">Donation_Data</a>
    <a href="./Data_appointments.php" target="_self">Appointments_Data</a>
    <a href="./Data_contactMe.php" target="_self">ContactMe_Data</a>
    <a href="./user_profile.php" target="_self">My Profile</a>
    <a class="logout" href="./logout.php" target="_self">Logout</a>
</div>

</body>
</html>
