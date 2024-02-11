<?php
    require('inc/db_config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="s.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <style>
        div.login-form{
            position: absolute;
            top:50%;
            left: 50%;
            transform:translate(-50%,-50%);
            width:400px;
        }
     </style> 
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-dark">
    
    <div class="login-form text-center rounded shadow bg-white overflow-hidden">
       <form method = "POST">
            <h4 class ="bg-dark text-white py-3"><font color = "white">Admin Login Panel</font></h4>
            <div class = "p-4">
                <div class="mb-3"><!--required does not let you keep a field empty-->
                     <input name="admin_name" required  type="text" class="form-control shadow-none text-center" placeholder = "Admin name">
                </div>
                <div class="mb-3">
                    <input name = "admin_password" required type="password" class="form-control shadow-none text-center" placeholder="Password">
                </div>
            </div>
            <button name ="login" type="submit" class="btn  text-black bg-light shadow-none mb-4">
                Login
            </button>
        </form>
    </div>
    <?php
        
        if(isset($_POST['login']))
        {
            print_r($_POST);
        }
        
    
    ?>

<?php require('inc/scripts.php'); ?>
</body>
</html>