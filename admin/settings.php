<?php
    require("inc/essentials.php");
    adminLogin();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="dashboard_logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel-Settings</title>
    <?php require("inc/links.php"); ?>
    <style>
        #dashboard-menu
            {
                position: fixed;
                height : 100%;
                z-index : 11;
            }
            .custom-alert
            {
                position: fixed;
                top: 60px;
                right: 25px;
            }
    </style>
</head>
<body class ="bg-dark">

<?php require("inc/header.php");?>


<div class="container-fluid" id="main-content">
    <div class ="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h3 class="mb-4 text-light">Settings</h3>
            
            <!-- General Settings section -->
            <div class="card border-0 shadow-sm mb-4 " >
               <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">
                            General Settings
                        </h5>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                        <i class="bi bi-pencil-square"></i>
                        </button>
                      
                    </div>
                    <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                    <p class="card-text" id ="site_title"></p>
                    <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                    <p class="card-text" id ="site_about"></p>
                </div>
            </div>
              <!-- General Settings Modal -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id = "general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">General Settings</h1>
                                </div>
                                <div class="modal-body">
                                <div class="col-md-6 mb-3">
                                    <label  class="form-label"><b>Site Title</b></label>
                                    <input type="text" name = "siteTitleElement" id ="site_title_inp" class="form-control shadow-none" required>
                                 </div>
                                 <div class="mb-3">
                                    <label class="form-label"><b>About Us</b></label>
                                    <textarea name="siteAboutElement" id ="site_about_inp" class="form-control shadow-none"  rows="5" required></textarea>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick = "siteTitleElement.value = general_data.siteTitleElement, siteAboutElement.value = general_data.siteAboutElement" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit"  class="btn  shadow-none">Save</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>

            <!-- Shutdown section -->
            <div class="card border-0 shadow-sm">
               <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">
                            Shutdown Website
                        </h5>
                        <div class="form-check form-switch">
                            <form>
                                <input onchange = "upd_shutdown(this.value)"class="form-check-input" type="checkbox" id = "shutdown-toggle">
                            </form>
                        </div>
                    </div>
                    <p class="card-text">
                        No customer will be allowed to book hotel room,when shutdown mode is turned on.
                    </p>
                </div>
            </div>
            <!--Contact Details section--->
            <div class="card border-0 shadow-sm mb-4 mt-4" >
               <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">
                            Contacts Settings
                        </h5>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                        <i class="bi bi-pencil-square"></i>
                        </button>
                      
                    </div>
                    
                    <div class="row">
                        <div class="col lg-6">
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                <p class="card-text" id ="address"></p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                <p class="card-text" id ="gmap"></p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                <p class = "card-text mb-2" >
                                    <i class="bi bi-telephone-fill"></i>
                                    <span id ="pn1"></span>
                                </p>
                                <p class = "card-text">
                                    <i class="bi bi-telephone-fill"></i>
                                    <span id ="pn2"></span>
                                </p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                <p class="card-text" id ="email"></p>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                <p class = "card-text mb-2" >
                                    <i class="bi bi-facebook me-1"></i>
                                    <span id ="fb"></span>
                                    
                                </p>
                                <p class = "card-text">
                                    <i class="bi bi-instagram me-1"></i>
                                    <span id ="insta"></span>
                                </p>
                                <p class = "card-text">
                                    <i class="bi bi-twitter-x me-1"></i>
                                    <span id ="tw"></span>
                                </p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                                <iframe id = "iframe" loading = "lazy" class = "border p-2 w-100" ></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require("inc/scripts.php"); ?>
<script>

    let contacts_data;

    let general_s_form = document.getElementById('general_s_form'); // Corrected typo
    let site_title_inp = document.getElementById('site_title_inp');
    let site_about_inp = document.getElementById('site_about_inp');

    function get_general() 
    {
        // Get references to HTML elements
        let siteTitleElement = document.getElementById('site_title');
        let siteAboutElement = document.getElementById('site_about');
        let shutdown_toggle = document.getElementById('shutdown-toggle');

        // Create a new XMLHttpRequest object
        let xhr = new XMLHttpRequest();

        // Define the callback function to handle the response
        xhr.onload = function() 
        {
            // Check if the request was successful (status code 200)
            if (xhr.status === 200) 
            {
                // Parse the JSON response
                let general_data = JSON.parse(xhr.responseText);

                // Update the content of HTML elements with the received data
                siteTitleElement.textContent = general_data.site_title;
                siteAboutElement.textContent = general_data.site_about;

                site_title_inp.value = general_data.site_title;
                site_about_inp.value = general_data.site_about;

                if (general_data.shutdown == 0) 
                {
                    shutdown_toggle.checked = false;
                    shutdown_toggle.value = 0;
                } 
                else 
                {
                    shutdown_toggle.checked = true;
                    shutdown_toggle.value = 1;
                }
            } else 
            {
                // If the request was not successful, log the error
                console.error('Request failed. Status: ' + xhr.status);
            }
        };

        // Configure the request
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // Send the request with the specified data
        xhr.send('get_general');
    }

    // Adding event listener to form submission
    general_s_form.addEventListener('submit', function(e) 
    {
        e.preventDefault();
        upd_general(site_title_inp.value, site_about_inp.value);
    });


    function upd_general(site_title_val , site_about_val)
    {
        let xhr = new XMLHttpRequest();

        // Define the callback function to handle the response
        xhr.onload = function() 
        {
            var myModal = document.getElementById('general-s');
            var modal = bootstrap.Modal.getInstance(myModal); // Returns a Bootstrap modal instance
            modal.hide();//to hide the changes module
            
            if(this.responseText == 1)
            {
                alert('success','Changes Saved!');
                get_general();
            }
            else
            {
                alert('alert','No changes made');
            }
        };

        // Configure the request
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        xhr.send('siteTitleElement='+site_title_val + '&siteAboutElement=' + site_about_val + '&upd_general');
    }

    function upd_shutdown(val) 
    {
        let xhr = new XMLHttpRequest();

        // Define the callback function to handle the response
        xhr.onload = function() {
            if (this.responseText == 1 && val == 0) {
                alert('alert', 'Site has been shutdown');
            } else {
                alert('success', 'Shutdown mode off');
            }
            get_general();
        };

        // Configure the request
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.send('upd_shutdown=' + val);
    }

    function get_contacts() 
    {
        let contacts_p_id = ['address','gmap','pn1','pn2','email','fb','insta','tw']; 
        let iframe = document.getElementById('iframe');
        // Create a new XMLHttpRequest object
        let xhr = new XMLHttpRequest();

        // Define the callback function to handle the response
        xhr.onload = function() 
        {
            contacts_data = JSON.parse(this.responseText);
            contacts_data = Object.values(contacts_data);
			
			for(i=0; i<contacts_p_id.length; i++)
			{
					document.getElementById(contacts_p_id[i]).innerText = contacts_data[i+1];
			}
			iframe.src = contacts_data[9];

        };

        // Configure the request
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // Send the request with the specified data
        xhr.send('get_contacts');
    }                
    // Call the get_general function when the window finishes loading
    window.onload = function() 
    {
            get_general();
            get_contacts();
    };
    


</script>
</body>
</html>

 <!-- 70 line error -->