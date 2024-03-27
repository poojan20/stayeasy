<?php
    require('inc/essentials.php');
    require('inc/db_config.php');
   
    session_start();
    session_regenerate_id(true);//for security so sessions cannot be hacked
        if((isset( $_SESSION['adminLogin'] ) && $_SESSION['adminLogin']==true))
        {
            redirect('dashboard.php');
        }
   
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
        
        body{
        background-image: url("/stayeasy/admin/login_background.jpg");
        
        
        }
     </style> 
    <?php require('inc/links.php'); ?>
</head>
<body>
    
    <div class="login-form text-center rounded shadow bg-white overflow-hidden">
       <form method = "POST">
            <h4 class ="bg-dark text-white py-3"><font color = "white">Admin Login Panel</font></h4>
            <div class = "p-4">
                <div class="mb-3"><!--required does not let you keep a field empty-->
                     <input name="admin_name" required  type="text" class="form-control shadow-none text-center" placeholder = "Admin name">
                </div>
                <div class="mb-2">
                    <input name = "admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
                </div>
            </div>
            <button name ="login" type = "submit"class="btn btn-dark shadow-none mb-4 ">
                Login
            </button>
        </form>
    </div>
    <?php
        
        if(isset($_POST['login']))
        {
            $frm_data=filteration($_POST);//we are calling the filter function in the db_config to filter data
            //Example :
            //Input data :<>\\'?admin
            //Filterd data :admin

            //backtick ` is used for the name of the table
            $query = "SELECT * FROM `admin_cred` WHERE `admin_name` =? AND `admin_pass` =?";
            $values = [$frm_data['admin_name'],$frm_data['admin_pass']];
          
            // $datatypes="ss";
            $res = select($query,$values,"ss");
            // -> for object
            if($res->num_rows==1)//which means id and password is correct(it checks database and returns 1 if data exists)
            {
                $row = mysqli_fetch_assoc($res);
                $_SESSION['adminLogin'] = true;
                $_SESSION['adminId'] = $row['sr_no'];
                redirect('dashboard.php');
            }
            else
            {
                alert('error','Login Failed- Invalid credentials!');
            }
        }
        
    
    ?>

<?php require('inc/scripts.php'); ?>
</body>
</html>