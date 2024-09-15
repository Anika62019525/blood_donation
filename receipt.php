<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            width: 100vw; /* Full width */
            height: 90vh; /* 90% of viewport height */
            overflow: hidden; /* Hide overflow */
        }

        .container {
    width: 600px; /* Fixed width */
    height: 90%; /* 90% of body's height */
    margin: 10px auto; /* 10px top margin, auto horizontal margins */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 
        0 0 0 3px #fff, /* Creating a 3px gap with white shadow */
        0 0 0 5px #000; /* Outer double line border */
    position: relative; /* Ensure positioning for absolute elements */
    overflow-y: auto; /* Enable vertical scroll if content exceeds height */
    background-size: cover; /* Adjust the background image size to cover the container */
    background-position: center; /* Center the background image */
    background-repeat: no-repeat; /* Ensure the background image doesn't repeat */
    background-color: rgba(255, 255, 255, 0.7); /* Set a transparent background color */
    background-color: #fdf5e6;
}

        h1,
        h2,
        h3,
        h4,
        h5 {
            text-align: center;
            margin: 0 0 10px; /* Adjusted margin */
        }

        h1 {
            color: #8B0000; /* Dark red */
            text-decoration: underline; /* Underline added */
        }

        h2 {
            color: #CD5C5C; /* Light coral */
            margin-left: 10px; /* Left margin */
        }

        .thankyou {
            text-align: center;
        }

        p {
            margin-bottom: 5px; /* Adjusted margin */
            text-align: left; /* Align to the left */
        }

        .receipt-info {
            margin-bottom: 20px; /* Adjusted margin */
            margin-left: 40px; /* Left margin */
        }

        .signatures {
            position: absolute;
            bottom: 20%; /* Adjusted top position */
            right: 10%; /* Right position */
            text-align: right;
            font-size: 14px;
            color:green;
            font-weight:900;
        }

        .signatures h6, .signatures h5, .signatures h4 {
            margin: 0; /* Reset margin */
            padding: 0;
        }
      
        .signatures p {
            margin: 0;
            padding: 0;
            font-size: 12px;
        }

        .btn-container {
            position: absolute;
            bottom: 20px;
            width: calc(100% - 40px); /* Adjusted for padding */
            display: flex;
            justify-content: space-between;
        }

        .btn {
    background-color: #8B0000; /* Dark red */
    color: white;
    padding: 8px 16px; /* Reduced padding */
    border: 2px solid #8B0000; /* Dark red border */
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px; /* Reduced font size */
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.print-btn {
    background-color: #DC143C; /* Crimson */
    border-color: #DC143C; /* Crimson border */
}

.btn:hover {
    background-color: #CD5C5C; /* Light coral */
}

.print-btn:hover {
    background-color: #FFA07A; /* Light salmon */
}

    </style>
</head>

<body>
    <div class="container">
        <h1>S.K Blood Donors</h1>
        <h2>Donor Receipt</h2> <!-- Corrected spelling -->
        <p class='thankyou'><strong>Thank you for donating blood!</strong></p>
        <?php
        // Retrieve submitted data
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
        $bloodType = $_GET['bloodType'];
        $phone = $_GET['phone'];
        $address = $_GET['address'];
        ?>
        <div class="receipt-info">
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Age:</strong> <?php echo $age; ?></p>
            <p><strong>Blood Type:</strong> <?php echo $bloodType; ?></p>
            <p><strong>Phone:</strong> <?php echo $phone; ?></p>
            <p><strong>Address:</strong> <?php echo $address; ?></p>
        </div>

        <!-- Signatures -->
        <div class="signatures">
           
            <h5>S.K Blood Donors</h5>
            <p>Jatrahibagh, Chatra (825401)</p>
            <h4>Jharkhand</h4>
        </div>

        <!-- Add any additional information you want to display -->
        <div class="btn-container">
            <a href="index.php" class="btn">Go Back to Index</a>
            <button onclick="window.print()" class="btn print-btn">Print Receipt</button>
        </div>
    </div>
</body>

</html>
