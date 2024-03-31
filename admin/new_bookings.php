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
    <title>Admin panel- New Bookings</title>
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
            <h3 class="mb-4 text-light">New Bookings</h3>
            
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="text-end mb-4">
                       <input type="text" oninput="get_bookings(this.value)" class="form-control shadow-none w-25 ms-auto" placeholder="Type to search...">
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover border" style="min-width:1200px;">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">User Details</th>
                                    <th scope="col">Room Details</th>
                                    <th scope="col">Bookings Details</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="table-data"></tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Assign Room number Modal -->
<div class="modal fade" id="assign-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="assign_room_form">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Assign Room</h1>
                </div>
                <div class="modal-body">
                    <div class="col-md-6 mb-3">
                        <label class="form-label"><b>Room Number</b></label>
                        <input type="text" name="room_no"  class="form-control shadow-none" required>
                    </div>
                    <span class="badge rounded-pill text-bg-dark mb-3 text-wrap lh-base">
                        Note : Assign Room Number only when user has been arrived! 
                    </span>
                    <input type="hidden" name = "booking_id">
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn shadow-none">Assign</button>
                </div>
            </div>
        </form>
    </div>
</div>


<?php require("inc/scripts.php"); ?>
<script src="scripts/new_bookings.js"></script>

</body>
</html>
