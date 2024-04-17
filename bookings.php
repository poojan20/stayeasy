<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="s.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stay easy -Booking</title>
    
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
    <!-- <body style="background-color:white;"> -->
    <?php 
            require('inc/header.php');

             if(!(isset($_SESSION['login']) && $_SESSION['login'] == true))
             {
                 redirect('index.php');
             }
    ?>

 
<div class="container">
    <div class="row">

        <div class="col-12 my-5 px-4">
            <h2 class="raleway-font text-light">Bookings</h2>
            <div style = "font-size: 14px;">
                <a href="index.php" class="text-secondary text-decoration-none">Home</a>
                <span class="text-secondary"> > </span>
                <a href="#" class="text-secondary text-decoration-none">Bookings</a>

            </div>
        </div>

    <?php

        $query ="SELECT bo.*,bd.* FROM `booking_order` bo
                INNER JOIN `booking_details` bd ON bo.booking_id = bd.booking_id
                WHERE ((bo.booking_status = 'booked')
                OR (bo.booking_status='cancelled')
                OR (bo.booking_status='payment failed')) 
                AND (bo.user_id=?)
                ORDER BY bo.booking_id DESC";

        $result = select($query,[$_SESSION['uId']],'i');

        
        while($data = mysqli_fetch_assoc($result))
        {
            $date = date("d-m-Y",strtotime($data['datentime']));
            $checkin = date("d-m-Y",strtotime($data['check_in']));
            $checkout = date("d-m-Y",strtotime($data['check_out']));
                
            $status_bg = "";
            $btn="";

            if($data['booking_status']=='booked')
            {
                $status_bg="bg-success";

                if($data['arrival']==1)
                {
                    
                    $btn="<a href='generate_pdf.php?gen_pdf&id=$data[booking_id]' class=' btn btn-dark btn-sm fw-bold  shadow-none'>
                           Download Pdf  
                        </a>";
                        

                        if($data['rate_review']==0)
                        {
                            $btn.="
                            <button type='button' onclick='review_room($data[booking_id],$data[room_id])' data-bs-toggle='modal' data-bs-target='#reviewModal' class=' btn btn-dark btn-sm ms-2 fw-bold shadow-none'>
                            Rate & Review </button>";
                        }
                }
                else
                {
                    $btn="
                        <button onclick='cancel_booking($data[booking_id])' type='button' class=' btn btn-warning btn-sm  fw-bold shadow-none'>
                            Cancel </button>";
                }
            }
            else if($data['booking_status']=='cancelled')
            {
                $status_bg="bg-danger";

                if($data['refund']==0)
                {
                    $btn = "<span class ='badge bg-primary'>Refund in Progress!</span>";
                }
                else
                {
                    $btn="<a href='generate_pdf.php?gen_pdf&id=$data[booking_id]' class=' btn btn-dark btn-sm fw-bold shadow-none'>
                        Download Pdf  
                    </a>";
                }
            }
            else
            {
                $status_bg="bg-warning";
                $btn="<a href='generate_pdf.php?gen_pdf&id=$data[booking_id]' class=' btn btn-dark btn-sm fw-bold  shadow-none'>
                        Download Pdf  
                    </a>";
            }

            echo<<<bookings
                <div class='col-md-4 px-4 mb-4'>
                    <div class='bg-white p-3 rounded shadow-none'>
                        <h5 class='fw-bold'>$data[room_name]</h5>
                        <p>₹$data[price] per night</p>
                        <p>
                            <b>Check in:</b> $checkin <br>
                            <b>Check out:</b> $checkout
                        </p>
                        <p>
                            <b>Amount:</b> $data[price] <br>
                            <b>Order ID:</b> $data[order_id] <br>
                            <b>Date:</b>$date
                        </p> 
                        <p>
                            <span class='badge $status_bg'>$data[booking_status]</span>
                        </p>
                        $btn
                  </div>
                </div>
            bookings;
        }       
    ?>

    </div>
</div>

<!-- Review modal -->
<div class="modal fade" id="reviewModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="review-form">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5 d-flex align-items-center">
                    <i class="bi bi-chat-right-text me-2 fs-2 "> </i>Rate & Review
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="mb-3">
                    <label  class="form-label">Rating</label>
                    <select class="form-select shadow-none" name="rating">
                        <option value="5">Excellent</option>    
                        <option value="4">Good</option>
                        <option value="3">Okay</option>
                        <option value="2">Poor</option>
                        <option value="1">Bad</option>  
                    </select>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Review</label>
                    <textarea type="Text" name="review" rows="3" required class="form-control shadow-none"></textarea>
                </div>

                <input type="hidden" name="booking_id">
                <input type="hidden" name="room_id">

                <div class = "text-end"> 
                    <button type = "submit"class="btn btn-dark btn-sm shadow-none">
                        Submit
                    </button>
                    
                </div>
                </div>
            </form>
        </div>
    </div>
</div>





<?php

        if(isset($_GET['cancel_status']))
        {
            alert('success','Booking Cancelled');
        }
        else if(isset($_GET['review_status']))
        {
            alert('success','Thank You for rating & review!');
        }

?>

    
    <?php require('inc/footer.php');?>
<script>

    function cancel_booking(id)
    {
        if(confirm('Are you want to cancel?'))
        {
            
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/cancel_bookings.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


            xhr.onload = function() 
            {
                if(this.responseText==1)
                {
                    window.location.href = "bookings.php?cancel_status=true";
                }
                else
                {
                    alert('error','Cancellation Failed!')
                }
            }

            xhr.send('cancel_booking&id='+id);
        }
    }

    let review_form = document.getElementById('review-form');

    function review_room(bid,rid)
    {
        review_form.elements['booking_id'].value = bid;
        review_form.elements['room_id'].value = rid;
    }

    review_form.addEventListener('submit',function(e)
    {
        e.preventDefault();

        let data = new FormData();

        data.append('review_form','');
        data.append('rating',review_form.elements['rating'].value);
        data.append('review',review_form.elements['review'].value);
        data.append('booking_id',review_form.elements['booking_id'].value);
        data.append('room_id',review_form.elements['room_id'].value);

        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/review_room.php",true);

        xhr.onload = function()
        {

            if(this.responseText == 1)
            {
                window.location.href = 'bookings.php?review_status=true';   
            }
            else
            {
                var myModal = document.getElementById('reviewModal');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                alert('error',"Rating & Review Failed!");
    
            }
        }
        xhr.send(data);
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
    fw stands for font width-->