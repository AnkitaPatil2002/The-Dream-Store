
<!doctype html>
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
                <li><a href="college.php">Home</a></li>
                <li><a href="product.html">Products</a></li>
                <li><a href="reviews.html">About</a></li>
                <li><a href="contact us.html">Contact</a></li>
                <li><a href="login.php">Account</a></li>
            </ul>
        </nav>
        <img src="cart.png" alt="cart image" width="30px" height="30px" >
        <img src="dresses/menu_icon.png" class="menu-icon" onclick="menutoggle()" >
        
    </div>
</div>
<!------------accountpage------------------------------>
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="image.webp" alt="">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>
                    <form action="db2.php" method="post" id="LoginForm">
                        <input type="text" placeholder="Username" name="username">
                        <input type="password" placeholder="Password" name="password">
                        <button type="submit" class="btn">Login</button>
                        <a href="">Forgot password</a>
                    </form>
                    <form action="db1.php" method="post" id="RegistrationForm">
                        <input type="text" placeholder="Username" name="username">
                        <input type="Email" placeholder="Email" >
                        <input type="password" placeholder="Password" name="password">
                        <button type="submit" class="btn">Register</button>
                        <a href="adminlogin.php">Admin</a>
                        
                    </form>
                    
                </div>
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
    <script>
       var MenuItems = document.getElementById("MenuItems");
       MenuItems.style.maxHeight = "0px";
       function menutoggle(){
            if(MenuItems.style.maxHeight == "0px"){
                    MenuItems.style.maxHeight = "200px";}
            else{
                   MenuItems.style.maxHeight ="0px";
               }
       }
   </script>
    
<!--------------------js for toggle--------->
   <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegistrationForm = document.getElementById("RegistrationForm");
        var Indicator = document.getElementById("Indicator");

            function register(){
                RegistrationForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)";
            }   
            function login(){
                RegistrationForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)";
            }   
  </script>


</body>
</html>