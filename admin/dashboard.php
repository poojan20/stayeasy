<?php
    require("inc/essentials.php");
    adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="dashboard_logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel-Dashboard</title>
    <?php require("inc/links.php"); ?>
</head>
<body class ="bg-dark">

<div class="container-fluid bg-light text-dark p-3 d-flex align-items-center justify-content-between">
    <h3 class= "mb-0">Admin Panel</h3>
    <a href="logout.php" class="btn btn-light btn-sm">Logout</a>
</div>




<?php require("inc/scripts.php"); ?>
</body>
</html>