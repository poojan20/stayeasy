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


<div class="container-fluid"> 
    <!-- Swiper -->
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
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
-->