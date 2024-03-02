<style>
    a 
    {
        color: #000; /* Set the default text color */
        text-decoration: none; /* Remove the underline */
    }

    a:hover
    {
        color: #008000; /* Green color */
        font-weight: bold; /* Example styling */
    }

</style>


<div class="container-fluid bg-light text-dark p-3 d-flex align-items-center justify-content-between sticky-top">
    <h3 class= "mb-0 h-font"><b>StayEasy</b></h3>
    <a href="logout.php" class="btn btn-light btn-sm">Log Out</a>
</div>
<div class="col-lg-2  bg-light border-top border-3 border-color-secondary" id="dashboard-menu">
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark">
        <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class = "mt-2 text-dark"><b>Admin Panel</b></h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class = "a">
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropown">
                <ul class="nav nav-pills flex-column">
                   
                    <li class="nav-item active">
                        <a class="nav-link text-black" href="dashboard.php">Dashboard</a>
                    </li> 
                    <li class="nav-item active">
                        <a class="nav-link text-black" href="feature_facilities.php">Feature & Facilities</a>
                    </li> 
                    <li class="nav-item active">
                        <a class="nav-link text-black" href="user_queries.php">User Queries</a>
                    </li> 
                    <li class="nav-item active"> 
                        <a class="nav-link text-black" href="rooms.php">Rooms</a>
                    </li> 
                    <li class="nav-item active"> 
                        <a class="nav-link text-black" href="carousel.php">carousel</a>
                    </li> 
                    <li class="nav-item active"> 
                        <a class="nav-link text-black" href="settings.php">Settings</a>
                    </li>
                </ul>            
            </div>
        </div> 
        <div>            
    </nav>
</div>