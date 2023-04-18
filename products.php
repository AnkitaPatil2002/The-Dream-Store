<?php

//session_start();

//if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true){

   //  header("location: login.php");
//}
include('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Designs- The Dream Store</title>
    <link rel="stylesheet" href="college.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,300;0,500;0,700;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
</head>
<body>
    <div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="logoa.png" alt="logo image" width="125px">
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="college.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="reviews.html">Review</a></li>
                <li><a href="contact us 1.html">Contact</a></li>
                <li><a href="login.php">Account</a></li>
            </ul>
        </nav>
        <img src="cart.png" alt="cart image" width="30px" height="30px" >
        <img src="dresses/menu_icon.png" class="menu-icon" onclick="menutoggle()" >
        
    </div>
</div>
<div class="small-container">
        <div class="row row-2">
            <h2>All Designs</h2>
            <select>
                <option>Default Shorting</option>
                <option>Short by price</option>
                <option>Short by popularity</option>
                <option>Short by rating</option>
                <option>Short by sale</option>
            </select>
        </div>
<div class="row">
<?php
    $query= "SELECT * FROM products";
    $result = $conn->query($query);
if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()){
        $name = $row['name'];
        $qty = $row['qty'];
        $price = $row['price'];
        $image = $row['image'];
                
        ?>
    <div class="col-4">
                <img src="<?php echo $image; ?>" alt="vans" width="200px" height="300px">
                <h4><?php echo $name; ?></h4>
                <h6 class="card-title">Qty: <?php echo $qty; ?></h6>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs. <?php echo $price; ?></p>
                <div class="buy d-flex justify-content-between align-items-center">
                    <a href="cart.php?id=<?php echo $row['id']; ?>" class="btn btn-danger mt-3"><i class="
                    fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
<?php } } ?>
</div>
    <div class="page-btn">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>&#8594;</span>
    </div> 

</div>
<!---------------footer------------->
<div class="footer">
   <div class="container">
       <div class="row">
             <div class="footer-col-1">
                 <h3>The  Dream store<h3>
                 <p>visit our website for Designer Dresses.</p>
                 <div class="app-logo">
                      <img src="dresses/play-store.png" alt="" >
                      <img src="dresses/app_store.png" alt="">
                 </div>
             </div>
             <div class="footer-col-2">
                 <img src="logoa.png" width="125px">
                 <p>Our purpose is to provide you worthy clothes,Your Dream dresses which can give a Boom to your personality.</p>
             </div>
             <div class="footer-col-3">
                 <h3>Useful Links<h3>
                 <ul>
                   <li>Coupons</li>
                   <li>Blog Post</li>
                   <li>Return Policy</li>
                   <li>Join Affiliate</li>
                 </ul>
             </div>
            <div class="footer-col-3">
                 <h3>Follow us<h3>
                 <ul>
                   <li>Facebook</li>
                   <li>Twitter</li>
                   <li>Instagram</li>
                   <li>Youtube</li>
                 </ul>
             </div>
          </div>
              <hr>
        <p class="Copyright">Copyright 2021 - thedreamstore</p>
       </div>
</div> 
<!--------------------js for toggle------------------------>
    <script>
       var MenuItems = document.getElementById("MenuItems");
       MenuItems.style.maxHeight = "0px";
       function menutoggle(){
            if(MenuItems.style.maxHeight == "0px"){
                    MenuItems.style.maxHeight == "200px";}
            else{
                   MenuItems.style.maxHeight == "0px";
               }
       }
   </script>
     
</body>
</html>