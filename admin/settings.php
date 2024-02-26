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
        #dashboard-menu {
            position: fixed;
            height: 100%;
            z-index: 11;
        }

        .custom-alert {
            position: fixed;
            top: 60px;
            right: 25px;
        }

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
    </style>
</head>
<body class="bg-dark">

<?php require("inc/header.php");?>

<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h3 class="mb-4 text-light">Settings</h3>
            
            <!-- General Settings section -->
            <div class="card border-0 shadow-sm mb-4">
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
                    <p class="card-text" id="site_title"></p>
                    <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                    <p class="card-text" id="site_about"></p>
                </div>
            </div>

            <!-- General Settings Modal -->
            <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form id="general_s_form">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5">General Settings</h1>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label"><b>Site Title</b></label>
                                    <input type="text" name="siteTitleElement" id="site_title_inp" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><b>About Us</b></label>
                                    <textarea name="siteAboutElement" id="site_about_inp" class="form-control shadow-none"  rows="5" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="siteTitleElement.value = general_data.siteTitleElement, siteAboutElement.value = general_data.siteAboutElement" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn shadow-none">Save</button>
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
                                <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                            </form>
                        </div>
                    </div>
                    <p class="card-text">
                        No customer will be allowed to book hotel room,when shutdown mode is turned on.
                    </p>
                </div>
            </div>

            <!--Contact Details section--->
            <div class="card border-0 shadow-sm mb-4 mt-4">
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
                                <p class="card-text" id="address"></p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                <p class="card-text" id="gmap"></p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                <p class="card-text mb-2">
                                    <i class="bi bi-telephone-fill"></i>
                                    <span id="pn1"></span>
                                </p>
                                <p class="card-text">
                                    <i class="bi bi-telephone-fill"></i>
                                    <span id="pn2"></span>
                                </p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                <p class="card-text" id="email"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                <p class="card-text mb-2">
                                    <i class="bi bi-facebook me-1 "></i>
                                    <span id="fb"></span>
                                </p>
                                <p class="card-text mb-2">
                                    <i class="bi bi-instagram me-1 "></i>
                                    <span id="insta"></span>
                                </p>
                                <p class="card-text ">
                                    <i class="bi bi-twitter-x"></i>
                                    <span id="tw"></span>
                                </p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                                <iframe id="iframe" loading="lazy" class="border p-2 w-100"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Settings Modal -->
            <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <form id="contacts_s_form">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5">ContactsG Settings</h1>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label"><b>Address</b></label>
                                                <input type="text" name="address" id="address_inp" class="form-control shadow-none" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label"><b>Google Map Link</b></label>
                                                <input type = "text" name="gmap" id="gmap_inp" class="form-control shadow-none"  rows="5" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label"><b>Phone Numbers (with country code)</b></label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                    <input type="number" name="pn1" id="pn1_inp" class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label"><b>Phone Numbers (with country code)</b></label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                    <input type="number" name="pn2" id="pn2_inp" class="form-control shadow-none">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label"><b>Email</b></label>
                                                    <input type = "email" name = "email"id="email_inp" class="form-control shadow-none"  rows="5" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label"><b>Social Links</b></label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-facebook "></i></span>
                                                    <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" required>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                                                    <input type="text" name="insta" id="insta_inp" class="form-control shadow-none" required>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-twitter-x"></i></span>
                                                    <input type="tw" name="pn2" id="tw_inp" class="form-control shadow-none">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label"><b>iFrame</b></label>
                                                <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="contacts_inp(contacts_data)" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn shadow-none">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Management Team section -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">
                            Management team
                        </h5>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#team-s">
                            <i class="bi bi-plus-square-fill"></i>
                        </button>
                    </div>

                    <div class="row" id="team-data">
                    </div>

                </div>
            </div>

            <!-- Management Team Modal -->
            <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form id="team_s_form">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5">Add team member</h1>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label"><b>Name</b></label>
                                    <input type="text" name="member_name" id="member_name_inp" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><b>Picture</b></label>
                                    <input type="file" name="member_picture" id="member_picture_inp" accept =".jpg , .png , .jpeg , .webp" class="form-control shadow-none" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn shadow-none">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require("inc/scripts.php"); ?>
<script src = "scripts/settings.js"></script>

</body>
</html>
