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
    <title>Admin panel- Rooms</title>
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
                       <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room">
                            <i class="bi bi-plus-square"></i>
                        </button>
                    </div>
                    
                    <div class="table-responsive-lg" style = "height : 450px; overflow-y : scroll;">
                        <table class="table table-hover border text-center">
                            <thead class = "table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Area</th>
                                <th scope="col">Gustes</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                                <tbody id = "room-data">
                                    
                                </tbody>
                        </table>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>

<!-- Add Room Modal -->
<div class="modal fade" id="add-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form id="add_room_form" autocomplete="off">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add Room</h1>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><b>Name</b></label>
                            <input type="text" name="name"  class="form-control shadow-none" required>
                        </div>          
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><b>Area</b></label>
                            <input type="number" min = "1" name="area"  class="form-control shadow-none" required>
                        </div>               
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><b>Price</b></label>
                            <input type="number" min = "1"  name="price"  class="form-control shadow-none" required>
                        </div>                
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><b>Quantity</b></label>
                            <input type="number" min = "1" name="quantity"  class="form-control shadow-none" required>
                        </div>              
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><b>Adult (Max.)</b></label>
                            <input type="number" min = "1" name="adult"  class="form-control shadow-none" required>
                        </div>             
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><b>Children (Max.)</b></label>
                            <input type="number" min = "1" name="children"  class="form-control shadow-none" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label fw-bold"><b>Features</b></label>
                            <div class="row">
                                <?php 
                                    $res = selectAll('features');
                                    while($opt = mysqli_fetch_assoc($res))
                                    {
                                        echo "
                                            <div class ='col-md-3 mb-1'>
                                                <label>
                                                    <input type ='checkbox' name = 'features' value = '$opt[id]' class = 'form-check-input shadow-none'>
                                                    $opt[name]
                                                </label>
                                            </div>
                                        ";
                                    }
                                 ?>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label fw-bold"><b>Facilities</b></label>
                            <div class="row">
                                <?php 
                                    $res = selectAll('facilities');
                                    while($opt = mysqli_fetch_assoc($res))
                                    {
                                        echo "
                                            <div class ='col-md-3 mb-1'>
                                                <label>
                                                    <input type ='checkbox' name = 'facilities' value = '$opt[id]' class = 'form-check-input shadow-none'>
                                                    $opt[name]
                                                </label>
                                            </div>
                                        ";
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-12 m-3">
                            <label class="form-label"><b>Description</b></label>
                            <textarea name="desc" rows="4" class = "form-control shadow-none" required></textarea>
                        </div>

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

<!-- Edit Room Modal -->
<div class="modal fade" id="edit-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form id="edit_room_form" autocomplete="off">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Edit Room</h1>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><b>Name</b></label>
                            <input type="text" name="name"  class="form-control shadow-none" required>
                        </div>          
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><b>Area</b></label>
                            <input type="number" min = "1" name="area"  class="form-control shadow-none" required>
                        </div>               
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><b>Price</b></label>
                            <input type="number" min = "1"  name="price"  class="form-control shadow-none" required>
                        </div>                
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><b>Quantity</b></label>
                            <input type="number" min = "1" name="quantity"  class="form-control shadow-none" required>
                        </div>              
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><b>Adult (Max.)</b></label>
                            <input type="number" min = "1" name="adult"  class="form-control shadow-none" required>
                        </div>             
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><b>Children (Max.)</b></label>
                            <input type="number" min = "1" name="children"  class="form-control shadow-none" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label fw-bold"><b>Features</b></label>
                            <div class="row">
                                <?php 
                                    $res = selectAll('features');
                                    while($opt = mysqli_fetch_assoc($res))
                                    {
                                        echo "
                                            <div class ='col-md-3 mb-1'>
                                                <label>
                                                    <input type ='checkbox' name = 'features' value = '$opt[id]' class = 'form-check-input shadow-none'>
                                                    $opt[name]
                                                </label>
                                            </div>
                                        ";
                                    }
                                 ?>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label fw-bold"><b>Facilities</b></label>
                            <div class="row">
                                <?php 
                                    $res = selectAll('facilities');
                                    while($opt = mysqli_fetch_assoc($res))
                                    {
                                        echo "
                                            <div class ='col-md-3 mb-1'>
                                                <label>
                                                    <input type ='checkbox' name = 'facilities' value = '$opt[id]' class = 'form-check-input shadow-none'>
                                                    $opt[name]
                                                </label>
                                            </div>
                                        ";
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-12 m-3">
                            <label class="form-label"><b>Description</b></label>
                            <textarea name="desc" rows="4" class = "form-control shadow-none" required></textarea>
                        </div>
                        <input type="hidden" name="room_id">
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

<!--Manage room images Modal -->
<div class="modal fade" id="room-images" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" >Room Name</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="image-alert"></div>
        <div class="border-bottom border-3 pb-3 mb-3 ">
            <form id="add_image_form">
                <label class="form-label"><b>Add Image</b></label>
                <input type="file" name="image"  accept=".jpg, .png, .webp, .jpeg" class="form-control shadow-none mb-3" required>
                <button type="submit" class="btn shadow-none">Add</button>
                <input type="hidden" name = "room_id">
            </form>
        </div>

        <div class="table-responsive-lg" style = "height : 350px; overflow-y : scroll;">
                    <table class="table table-hover border text-center">
                        <thead class = "table-dark">
                            <tr class="sticky-top">
                                <th scope="col" width="60%">image</th>
                                <th scope="col">Thumb</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody id = "room-image-data">
                            
                        </tbody>
                    </table>
        </div>                           

      </div>
    </div>
  </div>
</div>







<?php require("inc/scripts.php"); ?>

<script src="scripts/rooms.js"></script>

</body>
</html>

