<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="s.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stay easy - Home</title>
    
    <?php require('inc/links.php')?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Bootstrap Icons css link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


<style>
    
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
     

    .availability-form{
        margin-top: -50px;
        z-index: 2;
        position: relative;
    }
    .btn{
        color: black;
        background-color: #FFFFFF;
        border :  2px solid black;
    }
    .btn:hover{
        background-color: #111e2e;
        color: white;
    }
    .btn_book{
        color: black;
        background-color: lightblue;
        border :  1px solid lightblue;
        padding : 3px 6px;
        transition: background-color 0.3s ease;
    }
    .btn_book:hover{
        background-color: #0096FF;
        color: white;
        
    }
    .btn2{
        color: white;
        background-color: #0D1117;
        border :  2px solid white;
        padding : 5px 10px
        
    }
    .btn2:hover{
        color: black;
        background-color: white;
        border-width : 5;
        
    }
    .h2-font{
        font-family: "Raleway", sans-serif;
        font-optical-sizing: auto;
        font-weight: 300;
        font-style: normal;
    }

    
    @media screen and (max-width:575px){
        .availability-form{
        margin-top: 25px;
        padding: 0 35px;    
        }
    } 
    
   

</style>
</head>
<body style="background-color:#0D1117;">


    <?php require('inc/header.php');?>

    <!--Carousel-->

<div class="container-fluid mt-4"> 
        <!-- Swiper -->
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
        
        <?php
            $res = selectAll('carousel');

            while($row = mysqli_fetch_assoc($res))
            {
                $path = CAROUSEL_IMG_PATH;
                echo <<<data
                    
                <div class="swiper-slide">
                    <img src="$path$row[image]" class ="w-100 d-block" />
                </div>                 
                data;
            }
        ?>
        </div>   
    </div>
 </div>

    <!-- Check Availability Form -->

    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form action="rooms.php">
                    <div class="row align-items-end">
                        <div class = "col-lg-3 mb-3">
                            <label  class="form-label" style ="font-weight: 500;">Check-in</label>
                            <input type="date" class="form-control shadow-none" name="checkin" required>
                        </div>
                        <div class = "col-lg-3 mb-3">
                            <label  class="form-label" style ="font-weight: 500;">Check-out</label>
                            <input type="date" class="form-control shadow-none" name="checkout" required>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label  class="form-label" style ="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none" name="adult">
                                <?php

                                    $guests_q = mysqli_query($con,"SELECT MAX(adult) AS `max_adult`,MAX(children) AS `max_children` 
                                    FROM `rooms` WHERE `status`='1' AND `removed`='0'");
                                    $guests_res = mysqli_fetch_assoc($guests_q);

                                    for($i=1; $i<=$guests_res['max_adult']; $i++)
                                    {
                                        echo "<option value=$i>$i</option>";
                                    }
                                ?>
                            
                            </select>   
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label  class="form-label" style ="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none" name="children">
                                <?php
                                    for($i=1; $i<=$guests_res['max_children']; $i++)
                                    {
                                        echo "<option value=$i>$i</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <input type="hidden" name="check_availability">
                            <div class="col-lg-1 mb-lg-3 mt-2">
                                <button type = "submit" class= "btn  shadow-none custom-bg">Submit</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Rooms -->
    <h2 class = "mt-5 pt-5 mb-4 text-center " ><font face = "Raleway" color = "white" size = 50>Rooms</font></h2>
    <div class="container">
        <div class="row">

        <?php 
            $room_res = select("SELECT * FROM `rooms` WHERE `status`=? AND `removed`=? ORDER BY `id` DESC LIMIT 3",[1,0],'ii');

            while($room_data = mysqli_fetch_assoc($room_res))
            {
                //get features of room

                $fea_q = mysqli_query($con,"SELECT f.name FROM `features` f 
                        INNER JOIN `room_features` rfea ON f.id = rfea.features_id 
                        WHERE rfea.room_id = '$room_data[id]'");

                $features_data = "";
                while($fea_row = mysqli_fetch_assoc($fea_q))
                {
                    $features_data.="<span class='badge rounded-pill text-bg-dark me-1 mb-1 text-wrap lh-base'>
                                    $fea_row[name] 
                                    </span>";
                    }
                
                //get facilities of room
                $fac_q = mysqli_query($con,"SELECT f.name FROM `facilities` f 
                                    INNER JOIN `room_facilities` rfac ON f.id = rfac.facilities_id 
                                    WHERE rfac.room_id = '$room_data[id]';");

                $facilities_data = "";
                while($fac_row = mysqli_fetch_assoc($fac_q))
                {
                    $facilities_data.="<span class='badge rounded-pill text-bg-dark me-1 mb-1 text-wrap lh-base'>
                                    $fac_row[name] 
                                    </span>";
                }

                //get thumbnail of image

                $room_thumb = ROOMS_IMG_PATH."thumbnail.jpg";
                $thumb_q = mysqli_query($con,"SELECT * FROM `room_images` 
                            WHERE `room_id` = '$room_data[id]' 
                            AND `thumb`='1' ");

                if(mysqli_num_rows($thumb_q)>0)
                {
                    $thumb_res = mysqli_fetch_assoc($thumb_q);
                    $room_thumb = ROOMS_IMG_PATH.$thumb_res['image'];
                }

                $book_btn = "";

                if(!$settings_r['shutdown'])
                {
                    $login = 0;
                    if(isset($_SESSION['login']) && $_SESSION['login'] == true)
                    {
                        $login = 1;
                    }
                    $book_btn="<button onclick='checkLoginToBook($login,$room_data[id])' class='btn_book btn_book-sm custom-bg rounded-2 text-decoration-none'>Book Now</button>";
                }

                $rating_q = "SELECT AVG(rating) AS `avg_rating` FROM `rating_review`
                             WHERE `room_id`='$room_data[id]' ORDER BY `sr_no` DESC LIMIT 20";  

                $rating_res = mysqli_query($con,$rating_q);

                $rating_data = "";
                $rating_fetch = mysqli_fetch_assoc($rating_res);

                if($rating_fetch['avg_rating']!=NULL)
                {
                    $rating_data=" <div class ='rating mb-4'>
                                    <h6 class ='mb-1'>Rating</h6>
                                    <span class = 'badge rounded-pill'>";

                    for($i = 0; $i<$rating_fetch['avg_rating']; $i++)
                    {
                        $rating_data .= "<i class='bi bi-star-fill text-warning'></i>"; 
                    }
                    $rating_data .= "</span>
                    </div>";
                }

                //print room card
                echo <<<data

                <div class ="col-lg-4 col-md-6 my-3">
            
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                            <img src="$room_thumb" class="card-img-top" alt="image not available">
                        
                            <div class="card-body">
                                <h5>$room_data[name] </h5>
                                <h6 class="mb-4">₹$room_data[price]</h6>
                                <div class="features mb-4">
                                    <h6 class ="mb-1">Features</h6>
                                    $features_data
                                </div>
                                <div class="facilities mb-4">
                                    <h6 class ="mb-1">Facilities</h6>
                                    $facilities_data
                                </div>
                                <div class="guests mb-4">
                                    <h6 class ="mb-1">Guests</h6>
                                    <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                                        $room_data[adult] Adults
                                    </span>
                                    <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                                        $room_data[children] Children
                                    </span>
                                    
                                </div>
                                $rating_data
                                <div class ="d-flex justify-content-evenly">
                                $book_btn
                                <a href="room_details.php?id=$room_data[id]" class="btn btn-sm custom-bg rounded-2 text-decoration-none">More Details</a>
                                </div>
                                
                            </div>
                        </div>
                </div>


                data;
            }

        ?>

            <div class="col-lg-12 text-center mt-5">
                <a href="rooms.php" class="btn2 btn2-sm b rounded-2  text-decoration-none">More Rooms >>></a>
            </div>
        </div>
    </div>

    <!-- Facilities -->
    <h2 class = "mt-5 pt-5 mb-4 text-center " ><font face = "Raleway" color = "white" size = 50>Facilities</font></h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <?php
                $res = mysqli_query($con,"SELECT * FROM `facilities`  ORDER BY `id` DESC LIMIT 5 ");
                $path = FACILITIES_IMG_PATH;

                while($row = mysqli_fetch_assoc($res))
                {
                    echo <<<data
                    <div class ="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                        <img src="$path$row[icon]" width="60px">
                        <h5 class = "mt-3">$row[name]</h5> 
                    </div>
                    data;
                }

            ?>
            
            <div class="col-lg-12 text-center mt-5">
                <a href="facilities.php" class="btn2 btn2-sm  rounded-2  text-decoration-none">More facilities >>></a>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <h2 class="mt-5 pt-5 mb-4 text-center"><font face = "Raleway" color = "white" size = 50>Reviews</font></h2>
    <div class="container">
        <!-- Swiper --> 
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <?php
                   $review_q = "SELECT rr.*,uc.name AS uname,uc.profile, r.name AS rname FROM `rating_review` rr
                                INNER JOIN `user_cred` uc ON rr.user_id = uc.id
                                INNER JOIN `rooms` r ON rr.room_id = r.id
                                ORDER BY sr_no DESC LIMIT 6";

                   $review_res = mysqli_query($con,$review_q);
                   $img_path = USERS_IMG_PATH;

                    if(mysqli_num_rows($review_res)==0)
                    {
                        echo 'No Review yet!';
                    }
                    else
                    {
                        while($row = mysqli_fetch_assoc($review_res))
                        {
                            $stars = "<i class='bi bi-star-fill text-warning'></i>";
                            for($i=1; $i<$row['rating']; $i++)
                            {
                                $stars .=" <i class='bi bi-star-fill text-warning'></i> ";
                            }
                            echo<<<slides
                            <div class="swiper-slide bg-white p-4">
                                <div class="profile d-flex align-items-center mb-3">
                                    <img src="$img_path$row[profile]" class="rounded-circle" loading="lazy" width="30px"
                                    <h6 class="m-0 ms-2"> &nbsp;$row[uname]</h6>
                                </div>
                                <p>$row[review]</p>
                                <div class="rating">
                                    $stars
                                </div>
                            </div>
                            slides;
                        }
                    }

                ?>
                
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="col-lg-12 text-center mt-5">
            <a href="about.php" class="btn2 btn2-sm b rounded-2 text-decoration-none">Know More >></a>
        </div>
    </div>


    <!-- Reach us -->
    
    <?php 

        $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
        $values = [1];
        $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
        
    ?>

    <h2 class = "mt-5 pt-5 mb-4 text-center " ><font face = "Raleway" color = "white" size = 50>Reach Us</font></h2>     
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded ">
                <iframe class="w-100 rounded " height="320px" src="<?php echo $contact_r['iframe'] ?>"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call us</h5>
                    <a href="tel: +<?php echo $contact_r['pn1'] ?>" class ="d-inline-block  text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+<?php echo $contact_r['pn1'] ?>
                    </a>
                    <br>
                    <?php 
                    if($contact_r['pn2']!='')
                        {
                            echo <<<data
                            <a href="tel:+$contact_r[pn2]" class ="d-inline-block  text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill"></i>+$contact_r[pn2]
                            </a>
                            data;
                        }
                    ?>
                    
                </div>
        
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <?php 
                        if($contact_r['tw']!='')
                        {
                            echo <<<data
                            <a href="$contact_r[tw]" class ="d-inline-block mb-3 ">
                                <span class ="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-twitter-x me-1"></i>Twitter-X
                            </span>
                            </a><br>
                            data;
                        }
                    ?>
                   
                     <a href="<?php echo $contact_r['insta'] ?>" class ="d-inline-block mb-3">
                        <span class ="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i>Instagram
                        </span>
                    </a><br>
                    <a href="<?php echo $contact_r['fb'] ?>" class ="d-inline-block">
                        <span class ="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i>Facebook
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php');?>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <!-- Initialize Swiper -->
  <script>
            var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
            delay: 3500, 
            disableOnInteractoin: false,
            }
            });
            var swiper = new Swiper(".swiper-testimonials", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "3",
                loop: true,
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },

            // breakpoints: {
            //     320:{
            //         slidesPerView: 1,
            //     },
            //     640:{
            //         slidesPerView: 1,
            //     },
            //     768:{
            //         slidesPerView: 2,
            //     },
            //     1024:{
            //         slidesPerView: 3,
            //     },
            // }
            });
    </script>

    



</body>
</html>
<!-- 
    lg stands for large devices [for large screen devices]
    me stands for margin
    sticky top is for to keep that nav bar always on top
    lh stands for line height
    we kept number type for phone no (for additional country code characters like + or -)
    font-family: 'Merienda', cursive;
            font-family: 'Poppins', sans-serif;
    rgb(40,44,52);
    fw stands for font width
-->