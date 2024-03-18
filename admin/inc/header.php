
<div class="container-fluid bg-light text-dark p-3 d-flex align-items-center justify-content-between sticky-top">
    <h3 class= "mb-0 h-font"><b>StayEasy</b></h3>
    <a href="logout.php" class="btn btn-dark btn-sm shadow-none">Log out</a>
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
                        <button class=" text-black px-3 w-100 shadow-none text-start border-0 d-flex align-items-center justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#bookingLinks">
                            <span>Bookings</span>
                            <span><i class="bi bi-caret-down-fill"></i></span>
                        </button>
                        <div class="collapse show px-3 mb-1 small" id="bookingLinks">
                        <ul class="nav nav-pills flex-column rounded border-secondary">
                            <li class="nav-item">
                                <a class="nav-link text-black" href="new_bookings.php">New Bookings</a>
                            </li>                           
                        </ul>
                        </div>
                    </li>

                    <li class="nav-item active"> 
                        <a class="nav-link text-black" href="users.php">Users</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-black" href="user_queries.php">User Queries</a>
                    </li> 
                    <li class="nav-item active"> 
                        <a class="nav-link text-black" href="rooms.php">Rooms</a>
                    </li> 
                    <li class="nav-item active">
                        <a class="nav-link text-black" href="feature_facilities.php">Feature & Facilities</a>
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