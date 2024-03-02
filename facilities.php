<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="s.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stay easy - Facilities</title>
    
    <?php require('inc/links.php')?>
    <style>
        .pop:hover{
                border-top-color: orange !important; 
                transform: scale(1.03);
                transition : 0.3s;
        }
        
        ::-webkit-scrollbar {
                    width: 10px;
                }
                
                /* Track */
        ::-webkit-scrollbar-track {
                    background: #0D1117; 
                }
                /* Handle */
        ::-webkit-scrollbar-thumb {
                    background: #888; 
                }
                
                /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
                    background: #555; 
                }
     
        
   </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Bootstrap Icons css link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body style="background-color:#0D1117;">
    <?php require('inc/header.php');?>
    
    <div class="my-5 px-4">
    <h1 class="text-center raleway-font text-white">Our Facilities</h1>
    <div class="h-line width-50 mt-2">
        <p class="text-center mt-2 text-white "><br>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis provident iste id nesciunt temporibus quidem voluptas!
        </p>
    </div>
</div><br><br>



    <div class="container">
        <div class="row">
            <?php
                $res = selectAll('facilities');
                $path = FACILITIES_IMG_PATH;

                while($row = mysqli_fetch_assoc($res))
                {
                    echo <<<data
                    <div class="col-lg-4 col-md-6 mb-5 px-4">
                        <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                            <div class="d-flex align-items-center mb-2">
                                <img src="$path$row[icon]" width="40px">
                                <h5 class="m-0 ms-3">$row[name]</h5>
                            </div>
                        
                            <p>$row[description]</p>
                        </div>
                    </div>
                    data;
                }

                ?>

        </div>
    </div>
            
    

    
    <?php require('inc/footer.php');?>
</body>
</html>
<!-- 
    !important for css overright
    ms for margin start
    lg stands for large devices [for large screen devices]
    me stands for margin
    sticky top is for to keep that nav bar always on top
    lh stands for line height
    we kept number type for phone no (for additional country code characters like + or -)
    font-family: 'Merienda', cursive;
            font-family: 'Poppins', sans-serif;
    rgb(40,44,52);
    fw stands for font width-->