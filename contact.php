<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="s.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stay easy - Contact</title>
    
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
  .btn:hover{
        background-color: #111e2e;
        text-color: white;
    }

    
.custom-alert{
    position: fixed;
    top: 80px;
    right: 25px;
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
    <h1 class="text-center raleway-font text-white">Contact Us</h1>
    <div class="h-line width-50 mt-2"></div>
        <p class="text-center mt-3 text-white">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis provident iste id nesciunt temporibus quidem voluptas!
        </p>
    </div>
</div>


    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4 " height="320px" src="<?php  echo $contact_r['iframe'] ?>"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="<?php  echo $contact_r['gmap'] ?>" class="text-decoration-none d-inline-block text-dark mb-2" target="_blank">
                    <i class="bi bi-geo-alt"></i><?php  echo $contact_r['address'] ?>
                    xyz,Bhavnagar,Gujarat
                    </a>
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel :+<?php  echo $contact_r['pn1'] ?>" class ="d-inline-block  text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+<?php  echo $contact_r['pn1'] ?>
                    </a>
                    <br>
                    <?php
                        if($contact_r['pn2']!='')
                        {
                            echo <<<data
                            <a href="tel :+$contact_r[pn2]" class ="d-inline-block  text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill"></i>+$contact_r[pn2]
                            </a>
                            data;
                        }
                    ?>
                   
                    <h5 class="mt-4 ">Email</h5>
                    <a href="<?php  echo $contact_r['email'] ?>" class = "text-decoration-none d-inline-block text-dark mb-2" target="_blank">
                    <i class="bi bi-envelope-paper-fill"></i> <?php  echo $contact_r['email'] ?>
                    </a><br>
                    <a href="mailto:trivedipoojan92@gmail.com" class = "text-decoration-none d-inline-block text-dark mb-2" target="_blank">
                    <i class="bi bi-envelope-paper-fill"></i> trivedipoojan92@gmail.com
                    </a>
                    <h5 class = "mt-4">Follow us</h5>
                    <?php
                        if($contact_r['tw']!='')
                        {
                            echo <<<data
                            <a href="$contact_r[tw]" class ="d-inline-block mb-3 text-decoration-none text-dark fs-5 me-2">
                                <i class="bi bi-twitter-x me-1"></i>
                            </a>
                            data;
                        }
                    ?>       
                     <a href="<?php  echo $contact_r['insta'] ?>" class ="d-inline-block mb-3 text-decoration-none text-dark fs-5 me-2">
                           <i class="bi bi-instagram me-1"></i>
                     </a>
                    <a href="<?php  echo $contact_r['fb'] ?>" class ="d-inline-block text-decoration-none text-dark fs-5">
                        <i class="bi bi-facebook me-1"></i>
                    </a>    
                </div>
            </div>

            <div class="col-lg-6 col-md-6  px-4">
                <div class="bg-white rounded shadow p-4 ">
                   <form method = "POST">
                        <h5>Send a Message</h5>
                        <div class="mt-3">
                            <label  class="form-label" style = "font-weight:500">Name</label>
                            <input name="name" required type = "text"  class="form-control shadow-none">
                        </div>
                    
                        <div class="mt-3">
                                <label  class="form-label" style = "font-weight:500">Email</label>
                                <input name="email" required  type="email" class="form-control shadow-none">
                        </div>

                        <div class="mt-3">
                            <label  class="form-label" style = "font-weight:500">Subject</label>
                            <input name="subject" required  type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label  class="form-label" style = "font-weight:500">Message</label>
                            
                            <textarea name="message" required  rows="5" class="form-control shadow-none "style = "resize :none;"></textarea>
                        </div>
                        <button  name ="send" type ="submit"class="btn btn-dark shadow-none mt-3">
                            Send
                        </button>
                   </form>
                </div>
            </div>
        </div>
    </div>
    
    <?php 
        if(isset($_POST['send']))
        {
            $frm_data = filteration($_POST);

            $q = "INSERT INTO `user_queries`( `name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
            // $q = "INSERT INTO user_queries( name, email, subject, message) VALUES (?,?,?,?)";
            $values = [$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];       
            $res = insert($q,$values,'ssss');
            if($res==1)
            {
                alert('success','Message sent');
            }
            else
            {
                alert('error','Message Not sent , Try again later');
            }
        }
    ?>
    
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
    fw stands for font width-->
