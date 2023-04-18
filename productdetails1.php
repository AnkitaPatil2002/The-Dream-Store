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
</head>
<body>
    <div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="logoa.png" alt="logo image" width="125px">
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="">Home</a></li>
                <li><a href="">Products</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Account</a></li>
            </ul>
        </nav>
        <img src="cart.png" alt="cart image" width="30px" height="30px" >
        <img src="dresses/menu_icon.png" class="menu-icon" onclick="menutoggle()" >
        
    </div>
</div>
<!-----------------single product detail page--------------------->
<div class="small-contrainer single-product">
    <div class="row">
    <form action="designs.php" method="post">
        <div class="col-2">
            <img src="dresses/category-2.jpg" width="100%" alt="">
        </div>
        <div class="col-2">
            <p>Home/ Gown</p>
            <h1>Designer printed gown</h1>
            <h4>1500.00rs</h4>
           <!-- <form action="designs.php" method="post">-->
            <select name="product_size">
                <option>Select Size</option>
                <option value="large">LARGE</option>
                <option value="medium">MEDIUM</option>
                <option value="small">SMALL</option>
            </select>
            <input type="number" name="product_qty" value="1">
            <input type="hidden" name="product_name" value="Gown"> 
            <input type="hidden" name="product_price" value="rs.900.00">
            <input type="hidden" name="product_image" value="dresses/category-2.jpg">

            <a href="designs.php" name="btn" class="btn">Add To Cart</a>
            <h3>Product Details</h3>
            <p>Give new look to your personality by the adorable designer,customize Gown.</p>
        </div></form>
    </div>
</div>


<div class="small-container">
        
        <div class="row">
            <div class="col-4">
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
            </div>
        <div class="col-4">
                <img src="dresses/category-2.jpg" alt="" width="200px" height="300px">
                <h4>Anarkali suit</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.1300.00</p>
        </div>
        <div class="col-4">
                <img src="dresses/category-3.jpg" alt="" width="200px" height="300px">
                <h4>Partywear Designer Gown</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>Rs.1300.00</p>
        </div>
        <div class="col-4">
                <img src="dresses/category-4.jpg" alt="" width="357px" height="300px">
                <h4>Designer Jump Suit</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.1300.00</p>
        </div>
    </div>
    
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