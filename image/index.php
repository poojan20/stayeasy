<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stay easy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- Bootstrap Icons css link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


<style>
    *{
        font-family: 'Poppins', sans-serif;
    }
    .h-font{
        font-family: 'Merienda', cursive;
    }
    .h2-font{
        font-family: "Raleway", sans-serif;
        font-optical-sizing: auto;
        font-weight: 300;
        font-style: normal;
    }
    .custom-bg{
        background-color:#0D1117;
    }
    .custom-bg:hover{
        background-color:#111e2e;
    }
    .availability-form{
        margin-top: -50px;
        z-index: 2;
        position: relative;
    }
    .btn{
        color: black;
        background-color: #FFFFFF;
        border :  1px solid black;
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

    
    @media screen and (max-width:575px){
        .availability-form{
        margin-top: 25px;
        padding: 0 35px;    
        }
    } 
    
   

</style>
</head>
<body style="background-color:#0D1117;">


    <!--Navbar from bootstrap5-->
    <nav class="navbar navbar-expand-lg navbar-light px-lg-3 py-lg-2 shadow-sm sticky-top bg-body-tertiary ">
    <div class="container-fluid">
        <a class="navbar-brand me-3" href="index.php"><font size = 5><strong>StayEasy</strong></font></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link  me-2" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Facilities</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">About</a>
            </li>
        </ul>
        <div class="d-flex" >
           
            <!-- Button trigger modal / for notification -->
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                Register
            </button>
        </div>
        </div>
    </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                    <div class="modal-header">
                    <h1 class="modal-title fs-5 d-flex align-items-center">
                    <i class="bi bi-person-circle me-2 fs-3 "></i>User Login
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="mb-3">
                    <label  class="form-label">Email address</label>
                    <input type="email" class="form-control shadow-none">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control shadow-none">
                    <div id="emailHelp" class="form-text">Enter your password associated with given E-mail</div>
                </div>
                <div class = "d-flex align-items-center justify-content-between ">
                    <button type = "submit"class="btn btn-dark shadow-none">
                        LOGIN
                    </button>
                    <a href="javascript: void(0)" class ="text-secondary text-decoration-none">Forget Password?</a>
                    
                </div>
                </div>
             </form>
        </div>
    </div>
</div>
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>
                    <div class="modal-header">
                    <h1 class="modal-title fs-5 d-flex align-items-center">
                    <i class="bi bi-person-vcard me-2 fs-3"></i>User Registration
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <span class="badge rounded-pill text-bg-dark mb-3 text-wrap lh-base">
                    Note : Your details must match with your ID Proof that will be required while check-in.
                </span>
                <div class="container-fluid">
                    <div class = "row">

                        <div class="col-md-6 mb-3">
                        <label  class="form-label">Name</label>
                        <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 mb-3">
                        <label  class="form-label">Email</label>
                        <input type="email" class="form-control shadow-none">
                        </div>

                        <div class="col-md-6 mb-3">
                        <label  class="form-label">Contact Number</label>
                        <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 mb-3">
                        <label  class="form-label">Picture</label>
                        <input type="file" class="form-control shadow-none">
                        </div>
                        
                        <div class="col-md-12 mb-3">
                             <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                             <textarea class="form-control shadow-none"  rows="1"></textarea>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                        <label  class="form-label">Pincode</label>
                        <input type="number" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 mb-3">
                        <label  class="form-label">Date of birth</label>
                        <input type="date" class="form-control shadow-none">
                        </div>

                        <div class="col-md-6 mb-3">
                        <label  class="form-label">Password</label>
                        <input type="passsword" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 mb-3">
                        <label  class="form-label">Confirm Password </label>
                        <input type="password" class="form-control shadow-none">
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="text-center my-1">
                <button type = "submit"class="btn btn-dark shadow-none">
                        REGISTER
                    </button>
                </div>
                <!-- <div class="mb-3">
                    <label  class="form-label">Email address</label>
                    <input type="email" class="form-control shadow-none">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control shadow-none">
                    <div id="emailHelp" class="form-text">Enter your password associated with given E-mail</div>
                </div>
                <div class = "d-flex align-items-center justify-content-between ">
                    <button type = "submit"class="btn btn-dark shadow-none">
                        LOGIN
                    </button>
                    <a href="javascript: void(0)" class ="text-secondary text-decoration-none">Forget Password?</a>
                    
                </div> -->
                </div>
             </form>
        </div>
    </div>
</div>


<!--Carousel-->

<div class="container-fluid mt-4"> 
    <!-- Swiper -->
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
    <div class="swiper-slide">
        <img src="/img/Stayeasy/stayeasy/image/carousel/1.jpeg" class ="w-100 d-block" />
    </div>

      <div class="swiper-slide">
        <img src="/img/Stayeasy/stayeasy/image/carousel/2.jpeg" class ="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="/img/Stayeasy/stayeasy/image/carousel/3.jpeg" class ="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="/img/Stayeasy/stayeasy/image/carousel/4.png" class ="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="/img/Stayeasy/stayeasy/image/carousel/5.jpeg"  class ="w-100 d-block"/>
    </div>
    <div class="swiper-slide">
        <img src="/img/Stayeasy/stayeasy/image/carousel/6.png" class ="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="/img/Stayeasy/stayeasy/image/carousel/7.png" class ="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="/img/Stayeasy/stayeasy/image/carousel/8.png" class ="w-100 d-block" />
      </div>
    </div>
    
  </div>
</div>

<!-- Check Availability Form -->

<div class="container availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Check Booking Availability</h5>
            <form>
                <div class="row align-items-end">
                    <div class = "col-lg-3 mb-3">
                        <label  class="form-label" style ="font-width: 500;">Check-in</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class = "col-lg-3 mb-3">
                        <label  class="form-label" style ="font-width: 500;">Check-out</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label  class="form-label" style ="font-width: 500;">Adult</label>
                        <select class="form-select shadow-none">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>   
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label  class="form-label" style ="font-width: 500;">Children</label>
                        <select class="form-select shadow-none">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
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
         <!-- Room1-card -->
        <div class ="col-lg-4 col-md-6 my-3">
           
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                <img src="\img\stayeasy\stayeasy\image\rooms\1.jpg" class="card-img-top" alt="image not available">
               
                <div class="card-body">
                    <h5>Simple Room Name </h5>
                    <h6 class="mb-4">₹5000 per night</h6>
                    <div class="features mb-4">
                        <h6 class ="mb-1">Features</h6>
                        <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                            2 Rooms 
                        </span>
                        <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                            2 Bathroom
                        </span>
                        <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                            1 Balcony 
                        </span>
                        <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                            3 Sofa
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class ="mb-1">Facilities</h6>
                        <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                            Wifi
                        </span>
                        <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                           Television
                        </span>
                        <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                            AC
                        </span>
                        <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                            Room heater
                        </span>
                    </div>
                    <div class ="rating mb-4">
                        <h6 class ="mb-1">Rating</h6>
                        <span class = "badge rounded-pill">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        </span>
                        
                    </div>
                    <div class ="d-flex justify-content-evenly">
                    <a href="#" class="btn_book btn_book-sm custom-bg rounded-2 text-decoration-none">Book Now</a>
                    <a href="#" class="btn btn-sm custom-bg rounded-2 text-decoration-none">More Details</a>
                    </div>
                    
                </div>

            </div>

        </div>
        <!-- Room2-card -->
        <div class ="col-lg-4 col-md-6 my-3">
           
           <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                   <img src="\img\stayeasy\stayeasy\image\rooms\1.jpg" class="card-img-top" alt="image not available">
                  
                   <div class="card-body">
                       <h5>Simple Room Name </h5>
                       <h6 class="mb-4">₹5000 per night</h6>
                       <div class="features mb-4">
                           <h6 class ="mb-1">Features</h6>
                           <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                               2 Rooms 
                           </span>
                           <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                               2 Bathroom
                           </span>
                           <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                               1 Balcony 
                           </span>
                           <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                               3 Sofa
                           </span>
                       </div>
                       <div class="facilities mb-4">
                           <h6 class ="mb-1">Facilities</h6>
                           <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                               Wifi
                           </span>
                           <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                              Television
                           </span>
                           <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                               AC
                           </span>
                           <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                               Room heater
                           </span>
                       </div>
                       <div class ="rating mb-4">
                           <h6 class ="mb-1">Rating</h6>
                           <span class = "badge rounded-pill">
                           <i class="bi bi-star-fill text-warning"></i>
                           <i class="bi bi-star-fill text-warning"></i>
                           <i class="bi bi-star-fill text-warning"></i>
                           <i class="bi bi-star-fill text-warning"></i>
                           <i class="bi bi-star-fill text-warning"></i>
                           </span>
                           
                       </div>
                       <div class ="d-flex justify-content-evenly">
                       <a href="#" class="btn_book btn_book-sm custom-bg rounded-2 text-decoration-none">Book Now</a>
                       <a href="#" class="btn btn-sm custom-bg rounded-2 text-decoration-none">More Details</a>
                       </div>
                       
                   </div>
   
               </div>
   
           </div>
            <!-- Room3-card -->
           <div class ="col-lg-4 col-md-6 my-3">
           
           <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                   <img src="\img\stayeasy\stayeasy\image\rooms\1.jpg" class="card-img-top" alt="image not available">
                  
                   <div class="card-body">
                       <h5>Simple Room Name </h5>
                       <h6 class="mb-4">₹5000 per night</h6>
                       <div class="features mb-4">
                           <h6 class ="mb-1">Features</h6>
                           <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                               2 Rooms 
                           </span>
                           <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                               2 Bathroom
                           </span>
                           <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                               1 Balcony 
                           </span>
                           <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                               3 Sofa
                           </span>
                       </div>
                       <div class="facilities mb-4">
                           <h6 class ="mb-1">Facilities</h6>
                           <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                               Wifi
                           </span>
                           <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                              Television
                           </span>
                           <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                               AC
                           </span>
                           <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                               Room heater
                           </span>
                       </div>
                       <div class ="rating mb-4">
                           <h6 class ="mb-1">Rating</h6>
                           <span class = "badge rounded-pill">
                           <i class="bi bi-star-fill text-warning"></i>
                           <i class="bi bi-star-fill text-warning"></i>
                           <i class="bi bi-star-fill text-warning"></i>
                           <i class="bi bi-star-fill text-warning"></i>
                           <i class="bi bi-star-fill text-warning"></i>
                           </span>
                           
                       </div>
                       <div class ="d-flex justify-content-evenly">
                       <a href="#" class="btn_book btn_book-sm custom-bg rounded-2 text-decoration-none">Book Now</a>
                       <a href="#" class="btn btn-sm custom-bg rounded-2 text-decoration-none">More Details</a>
                       </div>
                       
                   </div>
   
               </div>
   
           </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn2 btn2-sm b rounded-2  text-decoration-none">More Rooms >>></a>
        </div>
    </div>
</div>

<br><br><br><br><br><br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
       delay: 2500, 
       disableOnInteractoin: false,
      }
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