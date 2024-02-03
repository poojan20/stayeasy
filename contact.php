<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="s.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stay easy - Contact</title>
    
    <?php require('inc/links.php')?>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Bootstrap Icons css link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body style="background-color:#0D1117;">
    <?php require('inc/header.php');?>
    
    <div class="my-5 px-4">
    <h1 class="text-center raleway-font text-white h-line">Contact Us</h1>
    <div class="h-line">
        <p class="text-center mt-3 text-white">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis provident iste id nesciunt temporibus quidem voluptas!
        </p>
    </div>
</div>



    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4 " height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59286.78879159111!2d72.15490609999999!3d21.763833650000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5081abb84e2f%3A0xf676d64c6e13716c!2sBhavnagar%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1705747537362!5m2!1sen!2sin"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/6F2oWi6x5MMZqsMfA" class="text-decoration-none d-inline-block text-dark mb-2" target="_blank">
                    <i class="bi bi-geo-alt"></i>
                    xyz,Bhavnagar,Gujarat
                    </a>
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel :+919586138313" class ="d-inline-block  text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+919586138313
                    </a>
                    <br>
                    <a href="tel :+919586138313" class ="d-inline-block  text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+919486138313
                    </a>
                    <h5 class="mt-4 ">Email</h5>
                    <a href="mailto:pdvadhel8@gmail.com" class = "text-decoration-none d-inline-block text-dark mb-2" target="_blank">
                    <i class="bi bi-envelope-paper-fill"></i> pdvadhel8@gmail.com
                    </a><br>
                    <a href="mailto:trivedipoojan92@gmail.com" class = "text-decoration-none d-inline-block text-dark mb-2" target="_blank">
                    <i class="bi bi-envelope-paper-fill"></i> trivedipoojan92@gmail.com
                    </a>
                    <h5 class = "mt-4">Follow us</h5>
                    <a href="#" class ="d-inline-block mb-3 text-decoration-none text-dark fs-5 me-2">
                        <i class="bi bi-twitter-x me-1"></i>
                    </a>
                     <a href="#" class ="d-inline-block mb-3 text-decoration-none text-dark fs-5 me-2">
                           <i class="bi bi-instagram me-1"></i>
                     </a>
                    <a href="#" class ="d-inline-block text-decoration-none text-dark fs-5">
                        <i class="bi bi-facebook me-1"></i>
                    </a>    
                </div>
            </div>

            <div class="col-lg-6 col-md-6  px-4">
                <div class="bg-white rounded shadow p-4 ">
                   <form>
                        <h5>Send a Message</h5>
                        <div class="mt-3">
                            <label  class="form-label" style = "font-weight:500">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                    
                        <div class="mt-3">
                                <label  class="form-label" style = "font-weight:500">Email</label>
                                <input type="email" class="form-control shadow-none">
                        </div>

                        <div class="mt-3">
                            <label  class="form-label" style = "font-weight:500">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label  class="form-label" style = "font-weight:500">Message</label>
                            
                            <textarea rows="10" class="form-control shadow-none "style = "resize :none;"></textarea>
                        </div>
                        <button type = "submit" class="btn text-white custom-bg  mt-3">
                            Send
                        </button>
                   </form>
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