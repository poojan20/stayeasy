<?php
require('inc/links.php');
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

// Check if the phone number is provided in the query parameters
if (isset($_GET['phone'])) {
    $phone = $_GET['phone'];
} else {
    // Phone number not provided, handle error (e.g., redirect to homepage)
    header("Location: index.php");
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the password
    $password = $_POST['password'];

    // Hash the password before storing it in the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Update the user's password in the database
    $stmt = $conn->prepare("UPDATE user_cred SET password = :password WHERE phonenum = :phone");
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->bindParam(':phone', $phone);
    $stmt->execute();

    // Redirect the user to a success page or login page
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        div.login-form{
            position: absolute;
            top:50%;
            left: 50%;
            transform:translate(-50%,-50%);
            width:400px;
        }
        
        body{
        background-image: url("/stayeasy/admin/wallpaperflare.com_wallpaper (17).jpg");
        
        
        }
     </style> 
</head>
<body>
<div class="login-form text-center rounded shadow bg-white overflow-hidden">
       <form method = "POST">
            <h4 class ="bg-dark text-white py-3"><font color = "white">Reset Password</font></h4>
            <div class = "p-4">
                <div class="mb-2">
                    <input name = "password" id = "password" required type="password" class="form-control shadow-none text-center" placeholder="New Password">
                </div>
            </div>
            <button name ="login" type = "submit" class="btn btn-dark shadow-none mb-4 " value = "Reset Password">
                Submit
            </button>
        </form>
    </div> 

    <!-- <h1>Reset Password</h1> -->
    <!-- <div class="login-form text-center rounded shadow bg-white overflow-hidden">
    <form method="post" action="">
        <label for="password">New Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Reset Password">
    </form>
    </div> -->




    
</body>
</html>