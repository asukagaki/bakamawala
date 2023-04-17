<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BBaccess Dashboard</title>
        <link rel="icon" href="../css/image/newlogo.png">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="stylec.css">
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
                    <i class="bx bxs-store"></i>
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
            <h1>Categories</h1>
        </div>
        <div class="img-container">
        <div class="row mt-3">
              <div class="column">
                <img src="../css/image/12.jpg" alt="cheese" >
                <p class="text-container">
                            The Peanut
                        </p>
                <div class= "col-md-12 text-center">               
                <a href="#">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
              </div>
              
              <div class="column">
                <img src="../css/image/13.jpg" alt="choco" >
                <p class="text-container">
                            The Peanut
                        </p>
                <div class= "col-md-12 text-center">               
                <a href="#">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
              </div>
              <div class="column">
                <img src="../css/image/14.jpg" alt="redvelvet" >
                <h4>Red Velvet</h4>
                <div class= "col-md-12 text-center">               
                <a href="#">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
              </div>
              <div class="column">
                <img src="../css/image/15.jpg" alt="fruit" >
                <h4>Fruit Cake</h4>
                <div class= "col-md-12 text-center">               
                <a href="#">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
              </div>
              <div class="col-md-12 text-center">
                <a href="#" class="btnp btnp-outline-dark"> See More</a>
              </div>
          <!--bREADS-->
          <div class="column">
                  <img src="../css/image/12.jpg" alt="banana" >
                  <h4>Banana Bread</h4>
                  <div class= "col-md-12 text-center">               
                <a href="#">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
                </div>
                <div class="column">
                  <img src="../css/image/13.jpg" alt="cinnamon" >
                  <h4>Cinnamon</h4>
                  <div class= "col-md-12 text-center">               
                <a href="#">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
                </div>
                <div class="column">
                  <img src="../css/image/14.jpg" alt="croissant" >
                  <h4>Croissant</h4>
                  <div class= "col-md-12 text-center">               
                <a href="#">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
                </div>
                <div class="column">
                  <img src="../css/image/15.jpg" alt="frenchbread" >
                  <h4>French Bread</h4>
                  <div class= "col-md-12 text-center">               
                <a href="#">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
                </div>
                <div class="col-md-12 text-center">
                  <a href="#" class="btnp btnp-outline-dark"> See More</a>
                </div>
                <!--dRINKS-->
                  <div class="column">
                    <img src="../css/image/15.jpg" alt="hotchoco" >
                    <h4>Hot Chocolate</h4>
                    <div class= "col-md-12 text-center">               
                <a href="#">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
                  </div>
                  <div class="column">
                    <img src="../css/image/15.jpg" alt="icedcoffee" >
                    <h4>Iced Coffee</h4>
                    <div class= "col-md-12 text-center">               
                <a href="#">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
                  </div>
                  <div class="column">
                    <img src="../css/image/15.jpg" alt="matcha" >
                    <h4>Matcha</h4>
                    <div class= "col-md-12 text-center">               
                <a href="#">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
                  </div>
                  <div class="column">
                    <img src="../css/image/15.jpg" alt="espresso" >
                    <h4>Espresso</h4>
                    <div class= "col-md-12 text-center">               
                <a href="#">
                <button type="button" class="btna btn-outline-warning btn-sm">Buy Now</button></a>
                </div>
                  </div>
                  <div class="col-md-12 text-center">
                    <a href="#" class="btnp btnp-outline-dark"> See More</a>
                  </div>
                </div>
        </div>
        
    </div>

 <script>
    let btn = document.querySelector('#btn');
    let sidebar = document.querySelector('.sidebar');

    btn.onclick = function () {
        sidebar.classList.toggle('active');
    };
</script>
</html>
