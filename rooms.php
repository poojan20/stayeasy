<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="s.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stay easy - Room
    </title>
    
    <?php require('inc/links.php')?>
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
    .btn{
        color: black;
        background-color: #FFFFFF;
        border :  2px solid black;
    }
    .btn:hover{
        background-color: #111e2e;
        color: white;
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
       <h1 class="text-center raleway-font text-white h-line">Rooms</h1>
    
    </div>


<div class="container">
    <div class="row">

        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
            <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class = "mt-2">Filters</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropown">
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class = "mb-3" style ="font-size:18px;">Check Avaibility</h5>
                             <label  class="form-label">Check-in</label>
                             <input type="date" class="form-control shadow-none mb-3">
                             <label  class="form-label">Check-out</label>
                             <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class = "mb-3" style ="font-size:18px;">Facilities</h5>
                            <div class = "mb-2">
                                <input type="checkbox" id="f1" class="form-check-input shadow-none mb-3 me-1">
                                <label  class="form-check-label" for="f1">Facility one</label>
                            </div>
                            <div class = "mb-2">
                                <input type="checkbox" id="f2" class="form-check-input shadow-none mb-3 me-1">
                                <label  class="form-check-label" for="f2">Facility two</label>
                            </div>
                            <div class = "mb-2">
                                <input type="checkbox" id="f3" class="form-check-input shadow-none mb-3 me-1">
                                <label  class="form-check-label" for="f3">Facility three</label>
                            </div>
                             
                            
                        </div>
                        
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class = "mb-3" style ="font-size:18px;">Guests</h5>
                            <div class="d-flex">
                                <div class = "me-3">
                                    <label class = "form-lable">Adults</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div>
                                    <label class = "form-lable">Children</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    
        <div class="col-lg-9 col-md-12 px-4">
            <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5">
                        <img src="/img/stayeasy/stayeasy/image/rooms/1.jpg" class="img-fluid rounded">
                    </div>
                   
                    <div class="col-md-5">
                        <h5 class = "mb-3">Simple Room Name</h5>
                        
                        <div class="features mb-3">
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
                        <div class="facilities mb-3">
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
                        <div class="guests mb-3">
                            <h6 class ="mb-1">Guests</h6>
                            <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                                2 Adults
                            </span>
                            <span class="badge rounded-pill text-bg-dark text-wrap lh-base">
                            2 Children
                            </span>
                         </div>
                        </div>
                    
                    
                        <div class="col-md-2 text-align-center">
                        <h6 class = "mb-4">₹200 per night</h6>
                        <a href="#" class="btn btn-sm w-100 bg-lightblue rounded-2 text-decoration-none mb-2">Book Now</a>
                        <a href="#" class="btn btn-sm custom-bg w-100 rounded-2 text-decoration-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>
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