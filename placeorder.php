
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
<!------------accountpage------------------------------>
<div class="account-page">
    <div class="container">
        <div class="row">
            <!---<div class="col-2">
                <img src="image.webp" alt="">
            </div>-->
            <div class="col-2">
                <div class="form-containery">
                    <div class="form-btn">
                        <span>OrderDetails</span>
                        <hr id="Indicator">
                    </div>
                    <form action="place.php" method="POST">
                        <input type="text" placeholder="Name" name="name">
                        <input type="mobile" placeholder="phonenumer" name="number">
                        <!--- echo "Adress"; ---->
                        <input type="text" placeholder="Houseno./building name" name="houseno">
                        <input type="text" placeholder="Area/colony" name="area">
                        <input type="text" placeholder="pincode" name="pin">
                        <input type="text" placeholder="city" name="city">
                        <select name="state" id="">
                            <option value="state">state</option>
                            <option value="AndhraPradesh">AndhraPradesh</option>
                            <option value="ArunachalPradesh">ArunachalPradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="HimachalPradesh">HimachalPradesh</option>
                            <option value="jharkhand">HimachalPradesh</option>
                            <option value="Karnatak">Karnatak</option>
                            <option value="Kerala">Kerala</option>
                            <option value="MadhyaPradesh">MadhyaPradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalay">Meghalay</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="TamilNadu">TamilNadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="UttarPradesh">UttarPradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="WestBengal">WestBengal</option>
                        </select>
                        <?php echo "payment method"; ?>
                            <select name="payment" id="">
                                    <option value="payment_Method">payment_Method</option>
                                    <option value="COD">COD</option>
                            </select>
                        <!-------name,phonenumer,adress-house no./building name/road name/area/colony/pincode,city,state,payment method,save address and continue-->
                        <button type="submit" name="submit" class="btn">PlaceOrder</button>
                        <h3>Order will be delivered in next 7 days</h3>
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
    



</body>
</html>