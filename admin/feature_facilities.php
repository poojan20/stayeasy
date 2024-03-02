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
            <h3 class="mb-4 text-light">Feature & Facilities</h3>
            
            
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">
                            Features
                        </h5>
                       
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#feature-s">
                            <i class="bi bi-plus-square"></i>
                        </button>
                    </div>
                    
                    <div class="table-responsive-md" style = "height : 350px; overflow-y : scroll;">
                        <table class="table table-hover border">
                            <thead class = "table-dark">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
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

<script>
        let feature_s_form = document.getElementById('feature_s_form');
        let facility_s_form = document.getElementById('facility_s_form');

        
        feature_s_form.addEventListener('submit',function(e)
        {
            e.preventDefault();
            add_feature();
        });

        function  add_feature()
        {
            let data = new FormData();
            data.append('name',feature_s_form.elements['feature_name'].value);
            data.append('add_feature','');

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/features_facilities.php",true);

            xhr.onload = function()
            {
                var myModal = document.getElementById('feature-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if(this.responseText == 1)
                {
                    alert('success','New Feature added');
                    feature_s_form.elements['feature_name'].value = '';
                    get_features();
                }
                else
                {
                    alert('error','Server Down');
                }
            }
            xhr.send(data);
        }

        function get_features()
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/features_facilities.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

            xhr.onload = function()
            {
                document.getElementById('features-data').innerHTML = this.responseText;
            }
            xhr.send('get_features');
        }

        function rem_feature(val)
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/features_facilities.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

            xhr.onload = function()
            {
                if(this.responseText=1)
                {
                    alert('success','Feature Removed');
                    get_features();
                }
                else if(this.responseText == 'room added')
                {
                    alert('error','Feature is added in room');
                }
                else
                {
                    alert('error','Server Down');
                }
            }
            xhr.send('rem_feature='+val);
        }

        facility_s_form.addEventListener('submit',function(e)
        {
            e.preventDefault();
            add_facility();
        });

        function  add_facility()
        {
            let data = new FormData();
            data.append('name',facility_s_form.elements['facility_name'].value);
            data.append('icon',facility_s_form.elements['facility_icon'].files[0]);
            data.append('desc',facility_s_form.elements['facility_desc'].value);

            data.append('add_facility','');

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/features_facilities.php",true);

            xhr.onload = function()
            {
                var myModal = document.getElementById('facility-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if(this.responseText == 'inv_img')
                {
                    alert('error','Only svg image are allowed!');
                }
                else if(this.responseText == 'inv_size')
                {
                    alert('error','Image should be less than 1mb');
                }
                else if(this.responseText == 'upd_failed')
                {
                    alert('error','Server Down');
                }
                else
                {
                    alert('success','New Facility added');
                    facility_s_form.reset();
                    get_facilities();
                }
            }
            xhr.send(data);
        }

        function get_facilities()
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/features_facilities.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

            xhr.onload = function()
            {
                document.getElementById('facilities-data').innerHTML = this.responseText;
            }
            xhr.send('get_facilities');
        }

        function rem_facility(val)
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/features_facilities.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

            xhr.onload = function()
            {
                if(this.responseText=1)
                {
                    alert('success','Facility Removed');
                    get_facilities();
                }
                else if(this.responseText == 'room added')
                {
                    alert('error','Facility is added in room');
                }
                else
                {
                    alert('error','Server Down');
                }
            }
            xhr.send('rem_facility='+val);
        }

        window.onload = function()
        {
            get_features();
            get_facilities();
        }




</script>

</body>
</html>

