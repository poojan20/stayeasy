<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="s.png">
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
<link rel="stylesheet" href="\img\stayeasy\stayeasy\css\common.css">

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
<!-- Facilities -->
<h2 class = "mt-5 pt-5 mb-4 text-center " ><font face = "Raleway" color = "white" size = 50>Facilitiess</font></h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class ="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
               <img src="\img\stayeasy\stayeasy\image\features\wifi.svg" width="80px">
               <h5 class = "mt-3">Wifi</h5> 
            </div>
            <div class ="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
               <img src="\img\stayeasy\stayeasy\image\features\wifi.svg" width="80px">
               <h5 class = "mt-3">Wifi</h5> 
            </div>
            <div class ="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
               <img src="\img\stayeasy\stayeasy\image\features\wifi.svg" width="80px">
               <h5 class = "mt-3">Wifi</h5> 
            </div>
            <div class ="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
               <img src="\img\stayeasy\stayeasy\image\features\wifi.svg" width="80px">
               <h5 class = "mt-3">Wifi</h5> 
            </div>
            <div class ="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
               <img src="\img\stayeasy\stayeasy\image\features\wifi.svg" width="80px">
               <h5 class = "mt-3">Wifi</h5> 
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn2 btn2-sm  rounded-2  text-decoration-none">More facilities >>></a>
            </div>
        </div>
    </div>

<!-- Testimonials -->

    <h2 class = "mt-5 pt-5 mb-4 text-center " ><font face = "Raleway" color = "white" size = 50>Testimonials</font></h2>

    <div class="container">
         <!-- Swiper -->
  <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
            <img src="\img\Stayeasy\stayeasy\image\features\wifi.svg" width="30px">
            <h6 class = "m-0 ms-2">Random user 1</h6>
        </div>
        <p>Poojan pranav</p>
        <div class="rating">
        <h6 class ="mb-1">Rating</h6>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
        </div>
    </div>
    <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
            <img src="\img\Stayeasy\stayeasy\image\features\wifi.svg" width="30px">
            <h6 class = "m-0 ms-2">Random user 2</h6>
        </div>
        <p>Poojan pranav</p>
        <div class="rating">
        <h6 class ="mb-1">Rating</h6>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
        </div>
    </div>
    <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
            <img src="\img\Stayeasy\stayeasy\image\features\wifi.svg" width="30px">
            <h6 class = "m-0 ms-2">Random user 3</h6>
        </div>
        <p>Poojan pranav</p>
        <div class="rating">
        <h6 class ="mb-1">Rating</h6>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
        </div>
    </div>
    
    <div class="swiper-pagination"></div>
</div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn2 btn2-sm b rounded-2  text-decoration-none">Know More >>></a>
        </div>
    
    </div>

    <!-- Reach us -->

    <h2 class = "mt-5 pt-5 mb-4 text-center " ><font face = "Raleway" color = "white" size = 50>Reach Us</font></h2>
        
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded ">
                <iframe class="w-100 rounded " height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59286.78879159111!2d72.15490609999999!3d21.763833650000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5081abb84e2f%3A0xf676d64c6e13716c!2sBhavnagar%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1705747537362!5m2!1sen!2sin"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call us</h5>
                    <a href="tel :+919586138313" class ="d-inline-block  text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+919586138313
                    </a>
                    <br>
                    <a href="tel :+919586138313" class ="d-inline-block  text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+919486138313
                    </a>
                </div>
        
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <a href="#" class ="d-inline-block mb-3 ">
                        <span class ="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-twitter-x me-1"></i>Twitter-X
                        </span>
                    </a><br>
                     <a href="#" class ="d-inline-block mb-3">
                        <span class ="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i>Instagram
                        </span>
                    </a><br>
                    <a href="#" class ="d-inline-block">
                        <span class ="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i>Facebook
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid bg-white mt-5">
        <div class = "row">
            <div class = "col-lg-4 p-4">
                <h3 class="h2-font fw-bold fs-3 mb-2">StayEasy</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia aliquam 
                    accusamus porro illum! Sequi alias inventore deserunt ut nihil quidem id 
                    natus magni fuga quo, assumenda atque omnis enim adipisci.
                </p>
            </div>
            <div class = "col-lg-4 p-4">
                <h5 class = "mb-3">Links</h5>
                <a href="#" class ="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
                <a href="#" class ="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
                <a href="#" class ="d-inline-block mb-2 text-dark text-decoration-none">Facilities<br>
                <a href="#" class ="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
                <a href="#" class ="d-inline-block mb-2 text-dark text-decoration-none">About</a>
            </div>
            <div class = "col-lg-4 p-4">
                <h5 class="mb-3">Follow us</h5>
                <a href="#" class ="d-inline-block text-dark text-decoration-none mb-2 "><i class="bi bi-twitter-x me-1"></i>Twitter-X</a><br>
                <a href="#" class ="d-inline-block text-dark text-decoration-none mb-2 "><i class="bi bi-facebook me-1"></i>Facebook</a><br>
                <a href="#" class ="d-inline-block text-dark text-decoration-none  "><i class="bi bi-instagram me-1"></i>Instagram</a><br>
            </div>
        </div>
</div>
               

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
            slidesPerView: "auto",
            slidesPerView: "3",
            loop :true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320:{
                    slidesPerView: 1,
                },
                640:{
                    slidesPerView: 1,
                },
                768:{
                    slidesPerView: 2,
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