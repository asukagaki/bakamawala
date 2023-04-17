<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_first_name'])){
   header('location:login_form.php');
}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BBaccess Dashboard</title>
        <link rel="icon" href="../css/image/newlogo.png">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="style1.css">
    </head>
<body>
    <div class="sidebar">
        <div class="top">
            <div class="logo">
                <img src="../css/image/newlogo.png" class="BBlogo">
                <b><span>BBacces</span></b>
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <hr class="mb-3">
        <div class="user">
            <img src="../css/image/585e4beacb11b227491c3399.png" alt="me" class="user-img">
            <div>
                <p class="bold">
				<span><?php echo $_SESSION['user_first_name']?></span></p>
                <p>User</p>
				
            </div>
        </div>
        <ul>
            <li>
                <a href="#container">
                    <i class="bx bxs-dashboard"></i>
                    <span class="nav-item">Sales</span>
                </a>
                <span class="tooltip">Sales</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-home"></i>
                    <span class="nav-item">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-cart"></i>
                    <span class="nav-item">Shop</span>
                </a>
                <span class="tooltip">Shop</span>
            </li>
            <li>
                <a href="#gallery">
                    <i class="bx bxs-shopping-bags"></i>
                    <span class="nav-item">Categories</span>
                </a>
                <span class="tooltip">Categories</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-bulb"></i>
                    <span class="nav-item">About</span>
                </a>
                <span class="tooltip">About</span>
            </li>
            <li>
                <a href="logout.php">
                    <i class="bx bxs-log-out"></i>
                    <span class="nav-item" id="logout">Logout</span>
                </a>
            <span class="tooltip">Logout</span>
            </li></ul>
    </div>



    <div class="main-content">
        <div class="container">
            <h1>BB access Dashboard</h1>
        </div>
        
    </div>

    
</body>  

<script>
    let btn = document.querySelector('#btn');
    let sidebar = document.querySelector('.sidebar');

    btn.onclick = function () {
        sidebar.classList.toggle('active');
    };
</script>
<footer class="footer">
    <p>BBacces Shop &copy 2011</p>
    <div class="footer-col">
        <ul>
        <li><a href="">FAQ</li>
        <li><a href="#">Info</li>
        <li><a href="#">Ways to Order</li>
        <li><a href="#">Customize Shirt</li>
        </ul>
        
    </div>

</footer>
</html>