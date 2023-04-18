<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true){

     header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The dream store | website design</title>
    <link rel="stylesheet" href="college.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,300;0,500;0,700;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <div class="header">
    <div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="logoa.png" alt="logo image" width="125px">
        </div>
        <nav>
            <ul id="MenuItems">
                <li><?php echo "Welcome ". $_SESSION['username'] ?></li>
                <li><a href="college.php">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="reviews.html">About</a></li>
                <li><a href="contact us 1.html">Contact</a></li>
                <li><a href="login.php">Account</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>

        </nav>
        <a href="cart.html"><img src="cart.png" alt="cart image" width="30px" height="30px" ></a>
        <img src="dresses/menu_icon.png" class="menu-icon" onclick="menutoggle()" >
        
    </div>

    <div class="row">

        <div class="col-2">
            <h1>Give New Look To <br>Your Personality!</h1>
            <p>Fashion is part of the daily air and it changes all the time,<br>
                with all the events.You can even<br> see the approaching of a revolution in clothes.
                You can see and feel everything in clothes. </p>
                <a href="" class="btn">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
            <img src="image.webp" alt="laptop image">

        </div>
    </div>
</div>
</div>
<!------------ featured categories --------------->
<div class="categories">
    <div class="small-container">
    <div class="row">
        <a href="productdetails3.html"><div class="col-3">
            <img src="dresses/category-4.jpg" width="357px" height="511px"  alt="">
        </div></a>
        <div class="col-3">
            <img src="dresses/category-5.jpg" width="357px" height="511px" alt="">
        </div>
        <div class="col-3">
            <img src="dresses/category-3.jpg" width="357px" height="511px" alt="">
        </div>
        
    </div>
    </div>
</div>
<!------------ featured products --------------->
<div class="small-container">
        <h2 class="title">Featured Designs</h2>
        
        <div class="row">
            <div class="col-4">
                <a href="productdetails.php">
                <img src="dresses/category-1.jpg" alt="" width="200px" height="300px">
                <h4>Women Printed Gown</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.1300.00</p>
            </a>
            </div>
        <div class="col-4">
                <a href="productdetails1.php">
                <img src="dresses/category-2.jpg" alt="" width="200px" height="300px">
                <h4>Anarkali suit</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.1300.00</p></a>
        </div>
        <div class="col-4">
            <a href="productdetails2.html">
                <img src="dresses/category-3.jpg" alt="" width="200px" height="300px">
                <h4>Partywear Designer Gown</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>Rs.1300.00</p></a>
        </div>
        <div class="col-4">
                <a href="productdetails3.html"><img src="dresses/category-4.jpg" alt="" width="357px" height="300px">
                <h4>Designer Jump Suit</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.1300.00</p></a>
        </div>
    
    <h2 class="title">Latest Designs</h2>
    <div class="row">
        <div class="col-4">
            <a href="productdetails5.html">
            <img src="dresses/category.6.jpg" alt="" width="200px" height="300px">
            <h4>Women Printed Gown</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.1300.00</p></a>
        </div>
    <div class="col-4">
        <a href="productdetails6.html">
            <img src="dresses/category-7.jpg" alt="" width="200px" height="300px">
            <h4>Anarkali suit</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.1300.00</p></a>
    </div>
    <div class="col-4">
        <a href="productdetails7.html">
            <img src="dresses/category-8.jpg" alt="" width="200px" height="300px">
            <h4>Partywear Designer Gown</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>Rs.1300.00</p></a>
    </div>
    <div class="col-4">
        <a href="productdetails8.html">
            <img src="dresses/category-9.jpg" alt="" width="357px" height="300px">
            <h4>Designer Jump Suit</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.1300.00</p></a>
    </div>
    <div class="row">
        <div class="col-4">
            <a href="productdetails9.html">
            <img src="dresses/category-10.jpg" alt="" width="200px" height="300px">
            <h4>Women Printed Gown</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.1300.00</p></a>
        </div>
    <div class="col-4">
        <a href="productdetails10.html">
            <img src="dresses/category-11.jpg" alt="" width="200px" height="300px">
            <h4>Anarkali suit</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.1300.00</p></a>
    </div>
    <div class="col-4">
        <a href="productdetails11.html">
            <img src="dresses/category-12.jpg" alt="" width="200px" height="300px">
            <h4>Partywear Designer Gown</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>Rs.1300.00</p></a>
    </div>
    <div class="col-4">
        <a href="productdetails12.html">
            <img src="dresses/category-13.jpg" alt="" width="357px" height="300px">
            <h4>Designer Jump Suit</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.1300.00</p></a>
    </div>
</div>
</div>
<!-----------offer------------->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="dresses/category-3.jpg" class="offer-image" alt="">
            </div>
            <div class="col-2">
                <p>Exclusively Avaiable on TheDreamStore</p>
                <h1>Designer dress</h1>
                <small>Best designer and in Exclusive range available now on The Dream Store Give your personality a new look.</small>
                <a href="productdetails2.html" class="btn">Buy Now &#8594</a>
            </div>
        </div>
    </div>
</div>
<!---------------testimonial-->
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>The Dream store is a small bussiness creating fashion uder low rates
                    available in villages cities by safe and secure packaging and can make your 
                    dreams true by designing your dream Dresses.
                </p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="dresses/image-1.jpg" alt="" >
                <h3>Sean Parker</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>The Dream store is a small bussiness creating fashion uder low rates
                    available in villages cities by safe and secure packaging and can make your 
                    dreams true by designing your dream Dresses.
                </p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="dresses/image-2.jpg" alt="" >
                <h3>Mike Parker</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>The Dream store is a small bussiness creating fashion uder low rates
                    available in villages cities by safe and secure packaging and can make your 
                    dreams true by designing your dream Dresses.
                </p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="dresses/image-3.jpg" alt="" >
                <h3>Sean Parker</h3>
            </div>
        </div>
    </div>
</div>
<!----------brands---------->
<div class="brands">
      <div class="small-container>
           <div class="row>
                <div class="col-5">
                     <img src="dresses/download.jpg" width="150px">
                 </div>
                <div class="col-5">
                     <img src="dresses/oppo.png" width="150px">
                 </div>
                 <div class="col-5">
                     <img src="dresses/coca_cola.png" width="150px">
                 </div>
                 <div class="col-5">
                     <img src="dresses/paypal.png" width="150px">
                 </div>
                 <div class="col-5">
                     <img src="dresses/philips.png" width="150px">

                 </div>
                 
          </div> 
 </div>  
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
                    MenuItems.style.maxHeight = "200px";}
            else{
                   MenuItems.style.maxHeight = "0px";
               }
       }
   </script>
     
</body>
</html>