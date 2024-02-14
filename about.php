<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="s.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stay easy - Facilities</title>
    
    <?php require('inc/links.php')?>
    <style>
        .box{
                border-top-color: orange !important;
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
        <h1 class="h-font text-center"><font face ="Raleway" color ="white" >About Us</font></h1>
        <div class="h-line width-50 mt-2">
            <p class = "text-center mt-2"><br>
                <font color = "white">Lorem ipsum dolor</font><br>
            </p>
        </div>
    </div><br>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">  <!-- order 1 and 2 stands for the order in which they will appear in small devices-->
                <h3 class="mb-3"><font color="white">clorem ipsum dolor sit.</font></h3>
                <p>
                    <font color="white">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Neque perspiciatis atque id ad, quis corporis molestiae.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Neque perspiciatis atque id ad, quis corporis molestiae.
                    </font>
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-1 order-md-2">
                    <img src="\img\stayeasy\stayeasy\image\about\img_manager.jpg" alt="" class="w-100">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class= "col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded p-4 border-top border-4 text-center shadow box">
                    <img src="\img\stayeasy\stayeasy\image\about\img_hotel.png" alt="" width="70px">
                    <h4 class = "mt-4">100+ Rooms</h4>
                </div>
            </div>
            <div class= "col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded p-4 border-top border-4 text-center shadow box">
                    <img src="\img\stayeasy\stayeasy\image\about\img_customer.png" alt="" width="70px">
                    <h4 class = "mt-4">200+ Customers</h4>
                </div>
            </div>
            <div class= "col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded p-4 border-top border-4 text-center shadow box">
                    <img src="\img\stayeasy\stayeasy\image\about\img_rating.png" alt="" width="70px">
                    
                   <h4 class = "mt-4">1000+ Reviews</h4>
                </div>
            </div>
            <div class= "col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded p-4 border-top border-4 text-center shadow box">
                    <img src="\img\stayeasy\stayeasy\image\about\img_staff.png" alt="" width="70px">
                    
                   <h4 class = "mt-4">300+ Staff</h4>
                </div>
            </div>
         </div>
    </div>
   
    <h2 class="my-5  h-font text-center"><font color = "white">Management Team</font></h2>
   
   
   <div class="container px-4">
    <!-- from swiperjs -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">    
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="\img\stayeasy\stayeasy\image\about\img_staff1.jpg" alt="" class = "w-100">
                    <h5 class="mt-2">Random Name</h5>
            </div>

            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="\img\stayeasy\stayeasy\image\about\img_staff1.jpg" alt="" class = "w-100">
                    <h5 class="mt-2">Random Name</h5>
            </div>

            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="\img\stayeasy\stayeasy\image\about\img_staff1.jpg" alt="" class = "w-100">
                    <h5 class="mt-2">Random Name</h5>
            </div>

            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="\img\stayeasy\stayeasy\image\about\img_staff1.jpg" alt="" class = "w-100">
                    <h5 class="mt-2">Random Name</h5>
            </div>

            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="\img\stayeasy\stayeasy\image\about\img_staff1.jpg" alt="" class = "w-100">
                    <h5 class="mt-2">Random Name</h5>
            </div>
            
            
            
        </div>
  </div>
   </div>
   
    <?php require('inc/footer.php');?>
      <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
        <script> 
        var swiper = new Swiper(".mySwiper", {
        slidesPerView:4,
        spaceBetween:40,
        pagitaion:{
            el:".swiper-pagitaion",
        },
        breakpoints: {
                320:{
                    slidesPerView: 1,
                },
                640:{
                    slidesPerView: 1,
                },
                768:{
                    slidesPerView: 3,
                },
                1024:{
                    slidesPerView: 3,
                },
            }
        
        });
        </script>
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
    fw stands for font width
-->