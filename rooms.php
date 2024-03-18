<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="s.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stay easy - Room</title>
    
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
    <?php 
        require('inc/header.php');

        $checkin_default ="";
        $checkout_default="";
        $adult_default="";
        $children_default="";
        
        if(isset($_GET['check_availability']))
        {
            $frm_data = filteration($_GET);

            $checkin_default =$frm_data['checkin'];
            $checkout_default=$frm_data['checkout'];
            $adult_default=$frm_data['adult'];
            $children_default=$frm_data['children'];

        }
    ?>
    
    <div class="my-5 px-4">
       <h1 class="text-center raleway-font text-white">Rooms</h1>
        <div class = "h-line"></div>
    </div>


<div class="container-fluid">
    <div class="row">

    <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 ps-4">
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white rounded shadow">
            <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class = "mt-2">Filters</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropown">
                        
                    <!-- check availablity-->
                    <div class="border bg-light p-3 rounded mb-3">
                            <h5 class = "d-flex align-items-center justify-content-between mb-3" style ="font-size:18px;">
                                <span>Check Avaibility</span>
                                <button id="chk_avail_btn" onclick="chk_avail_clear()" class=" btn btn-sm text d-none">Reset</button>
                            </h5>
                             <label  class="form-label">Check-in</label>
                             <input type="date" class="form-control shadow-none mb-3" value="<?php echo $checkin_default ?>" id="checkin" onchange="chk_avail_filter()">
                             <label  class="form-label">Check-out</label>
                             <input type="date" class="form-control shadow-none" value="<?php echo $checkout_default ?>" id="checkout" onchange="chk_avail_filter()">
                    </div>
                       
                    <!-- Facilities -->
                    <div class="border bg-light p-3 rounded mb-3">
                        <h5 class = "d-flex align-items-center justify-content-between mb-3" style ="font-size:18px;">
                            <span>Facilities</span>
                            <button id="facilities_btn" onclick="facilities_clear()" class=" btn btn-sm text d-none">Reset</button>
                        </h5>    
                        <?php
                            $facilities_q = selectAll('facilities');
                            while($row = mysqli_fetch_assoc($facilities_q))
                            {
                                echo <<<facilities
                                    <div class = "mb-2">
                                        <input type="checkbox" onclick="fetch_rooms()" name="facilities" value= "$row[id]" class="form-check-input shadow-none mb-3 me-1" id="$row[id]" >
                                        <label  class="form-check-label" for="$row[id]">$row[name]</label>
                                    </div>
                                facilities;
                            }
                        
                        ?>
                            
                        
                    </div>
                    
                    <!-- Guests -->
                    <div class="border bg-light p-3 rounded mb-3">
                        <h5 class = "d-flex align-items-center justify-content-between mb-3" style ="font-size:18px;">
                                <span>Guests</span>
                                <button id="guests_btn" onclick="guests_clear()" class=" btn btn-sm text d-none">Reset</button>
                        </h5>
                        <div class="d-flex">
                            <div class = "me-3">
                                <label class = "form-lable">Adults</label>
                                <input type="number" min="1" id="adults" oninput="guests_filter()" class="form-control shadow-none" value="<?php echo $adult_default ?>">
                            </div>
                            <div>
                                <label class = "form-lable">Children</label>
                                <input type="number" min="1" id="children" oninput="guests_filter()" class="form-control shadow-none" value="<?php echo $children_default ?>">
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </nav>
    </div>
    
        <div class="col-lg-9 col-md-12 px-4" id="room-data">

        </div>

    </div>
</div>
    
    <script>

        let room_data = document.getElementById('room-data');
        
        let checkin = document.getElementById('checkin');
        let checkout = document.getElementById('checkout');
        let chk_avail_btn = document.getElementById('chk_avail_btn');
        
        let adults = document.getElementById('adults');
        let children = document.getElementById('children');
        let guests_btn = document.getElementById('guests_btn');
        let facilities_btn = document.getElementById('facilities_btn');



        
        function fetch_rooms()
        {
            let chk_avail = JSON.stringify({
            checkin: checkin.value,
            checkout:checkout.value
            });

            let guests = JSON.stringify({
                adults:adults.value,
                children:children.value
            });

            let facility_list = {"facilities":[]};

            let get_facilities = document.querySelectorAll('[name="facilities"]:checked');
           
            if(get_facilities.length>0)
            {
                get_facilities.forEach((facility)=>
                {
                    facility_list.facilities.push(facility.value);
                });
                facilities_btn.classList.remove('d-none');
            }
            else
            {
                facilities_btn.classList.add('d-none');
            }
            facility_list = JSON.stringify(facility_list);





            let xhr = new XMLHttpRequest();
            xhr.open("GET","ajax/rooms.php?fetch_rooms&chk_avail="+chk_avail+"&guests="+guests+"&facility_list="+facility_list,true);

            xhr.onprogress = function()
            {
                room_data.innerHTML = `<div class="spinner-border text-info mb-3 d-block mx-auto" id ="loader" role="status">
                <span class="visually-hidden">Loading...</span>
                </div>`;
            }
 
            xhr.onload = function()
            {
                 room_data.innerHTML = this.responseText;                
            }
            xhr.send();
        }
        
        function chk_avail_filter()
        {
            if(checkin.value !='' && checkout.value != '')
            {
                fetch_rooms();
                chk_avail_btn.classList.remove('d-none');
            }
        }

        function chk_avail_clear()
        {
            checkin.value ='';
            checkout.value = '';
            chk_avail_btn.classList.add('d-none');
            fetch_rooms();
        }

        function guests_filter()
        {
            if(adults.value>0 || children.value>0)
            {
                fetch_rooms();
                guests_btn.classList.remove('d-none');
            }
        }

        function guests_clear()
        {
            adults.value='';
            children.value='';
            guests_btn.classList.add('d-none');
            fetch_rooms();
        }

        function facilities_clear()
        {
            let get_facilities = document.querySelectorAll('[name="facilities"]:checked');
            
            get_facilities.forEach((facility)=>
            {
                facility.checked=false;
            });
            facilities_btn.classList.add('d-none');
            fetch_rooms();
        }
        

        window.onload = function()
        {
            fetch_rooms();
        }

    </script>

    
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