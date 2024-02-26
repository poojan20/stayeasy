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
    <title>Admin panel-Carousel</title>
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
            <h3 class="mb-4 text-light">Carousel</h3>
            
            <!-- carousel  section -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">
                            Images
                        </h5>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#carousel-s">
                            <i class="bi bi-plus-square-fill"></i>
                        </button>
                    </div>

                    <div class="row" id="carousel-data">
                    </div>

                </div>
            </div>

            <!-- carousel-s-s Modal -->
            <div class="modal fade" id="carousel-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form id="carousel_s_form">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5">Add Image</h1>
                            </div>
                            <div class="modal-body">
                                
                                <div class="mb-3">
                                    <label class="form-label"><b>Picture</b></label>
                                    <input type="file" name="carousel_picture" id="carousel_picture" accept =".jpg , .png , .jpeg , .webp" class="form-control shadow-none" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="carousel_picture.value=''" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
<script src = "scripts/carousel.js"></script>

</body>
</html>
