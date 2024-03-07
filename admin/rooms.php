<?php
    require("inc/essentials.php");
    require("inc/db_config.php");
    adminLogin();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="dashboard_logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel- User queries</title>
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
            <h3 class="mb-4 text-light">Rooms</h3>
            
            
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    
                    <div class="text-end mb-4">
                       
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-rooms">
                            <i class="bi bi-plus-square"></i>
                        </button>
                    </div>
                    
                    <div class="table-responsive-lg" style = "height : 450px; overflow-y : scroll;">
                        <table class="table table-hover border">
                            <thead class = "table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Area</th>
                                <th scope="col"></th>

                            </tr>
                            </thead>
                                <tbody id = "features-data">
                                    
                                </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- Facilities -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">
                            Facilities
                        </h5>
                       
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#facility-s">
                            <i class="bi bi-plus-square"></i>
                        </button>
                    </div>
                    
                    <div class="table-responsive-md" style = "height : 350px; overflow-y : scroll;">
                        <table class="table table-hover border">
                            <thead class = "table-dark">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Name</th>
                                <th scope="col" width = "40%">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                                <tbody id = "facilities-data">
                                    
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>

<!-- Feature Modal -->
<div class="modal fade" id="feature-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="feature_s_form">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add Feature</h1>
                </div>
                <div class="modal-body">
                    <div class="col-md-6 mb-3">
                        <label class="form-label"><b>Name</b></label>
                        <input type="text" name="feature_name"  class="form-control shadow-none" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn shadow-none">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Facility Modal -->

<div class="modal fade" id="facility-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="facility_s_form">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add Facility member</h1>
                </div>
                <div class="modal-body">
                    <div class="col-md-6 mb-3">
                        <label class="form-label"><b>Name</b></label>
                        <input type="text" name="facility_name"  class="form-control shadow-none" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Icon</b></label>
                        <input type="file" name="facility_icon"  accept=".svg" class="form-control shadow-none" required>
                    </div>
                    <div class="mb-3">
                             <label class="form-label">Description</label>
                             <textarea name = "facility_desc" class="form-control shadow-none"  rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn shadow-none">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>





<?php require("inc/scripts.php"); ?>
<script src="scripts/features_facilities.js"></script>


</body>
</html>

