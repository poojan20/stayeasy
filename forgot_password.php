<?php
// Database connection setup (replace with your actual database connection code)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stayeasy";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the phone number is provided
    if (!empty($_POST['phone'])) {
        $phone = $_POST['phone'];

        // Perform a database query to check if the phone number exists
        $stmt = $conn->prepare("SELECT * FROM user_cred WHERE phonenum = :phone");
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // If user exists, proceed with the password reset process
        if ($user) {
            // Redirect the user to the password reset page with phone number as a query parameter
            header("Location: reset_password.php?phone=" . urlencode($phone));
            exit();
        } else {
            // Phone number not found in the database
            echo '<script>alert("Phone number not found. Please enter a valid phone number.");</script>';
        }
    } else {
        // Phone number not provided
        echo '<script>alert("Please enter your phone number.");</script>';
    }
}
?>