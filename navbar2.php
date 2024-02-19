<link rel="stylesheet" href="nav.css?v=2">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>


<nav>
    <div class="navbar">
        <i class='bx bx-menu'></i>
        <div class="logo"><img src="logo2.png" alt=""></div>
        <div class="nav-links">
            <div class="sidebar-logo">
                <i class='bx bx-x'></i>
            </div>
            <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="aboutUs.php">About Us</a></li>
                <li>
                    <a href="#">Our Services</a>
                    <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                    <ul class="htmlCss-sub-menu sub-menu">
                        <li><a href="food.php">Food Donation</a></li>
                        <li><a href="education.php">Book Donation</a></li>
                        <li><a href="#">Disaster Fund</a></li>
                    </ul>
                </li>
                <li><a href="signUp.php?source=navbar">Be A Volunteer</a></li>

                <li><a href="contactUs.php">Contact Us</a></li>
                <?php if(isset($_SESSION['email'])){ ?>
                <li id="login">
                    <a href="logout.php">Logout</a>
                </li>
                <?php }else{?>
                <li id="login">
                    <a href="login.php">Login</a>
                </li>
                <?php }?>


            </ul>
        </div>
        <div class="search-box">
            <i class='bx bx-search'></i>
            <div class="input-box">
                <input type="text" placeholder="Search...">
            </div>
        </div>
    </div>
    <script src="navbar.js"></script>
</nav>