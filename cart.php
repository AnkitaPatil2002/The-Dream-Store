<?php
include('config.php');
$id = $_GET['id'];
$query = "SELECT * FROM products where id = '".$id."'";
$result = $conn->query($query);
if($result->num_rows > 0)
{
          $row = $result->fetch_assoc();
          $name= $row['name'];
          $qty = $row['qty'];
          $price = $row['price'];
          $image = $row['image'];
          $tex = $row['Tex'];
}
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
<!---------------cart item details-->
<div class="small-container cart-page">
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Qty</th>
        <th>price</th>
        <th>Text Rate%</th>
        <th>GST Rate</th>
        <th>Total</th>
    </tr></thead>
    <tbody><tr>
        <td>
            <input type="text" class="form-control form-control-sm text-center" value="<?php echo $name; ?>" disabled>
        </td>
        <td>
            <input type="number" class="form-control form-control-sm w-50
            text-center" min="1" id="qty" value="<?php echo $qty; ?>" >
        </td>
        <td>
            <input type="text" class="form-control form-control-sm w-50
            text-center" value="<?php echo $price; ?>" id="price" disabled>
        </td>
        <td>
            <input type="text" class="form-control form-control-sm w-50
            text-center" value="<?php echo $tex; ?>" id="tex" disabled>
        </td>
        <td>
            <input type="text" class="form-control form-control-sm w-75
            text-center" id="gst" disabled>
        </td>
        <td>
            <input type="text" class="form-control form-control-sm w-100
            text-center" name="total" id="total" disabled>
        </td>
        <!---<td>
           <div class="cart-info">
                <img src="" alt="vans">
                <div>
                    <input type="text" value=""disabled>
                    <input type="number" value="" id="price" disabled>
                    <br>
                    <a href="">Remove</a>
                </div>
            </div>
        </td>
        <td><input type="number" min="1" id="qty" value="<qty ?>"></td>
        <td><input type="text" value=" ?>" id="price" disabled></td>-->
    </tr></tbody>
    <!---<tr>
        <td>
            <div class="cart-info">
                <img src="dresses/category-2.jpg" alt="">
                <div>
                    <p > Pink Designer Gown</p>
                    <small>Price: Rs1300.00</small>
                    <br>
                    <a href="">Remove</a>
                </div>
            </div>
        </td>
        <td><input type="number" value="1"></td>
        <td>Rs.1300.00</td>
    </tr>
    <tr>
        <td>
            <div class="cart-info">
                <img src="dresses/category-2.jpg" alt="">
                <div>
                    <p> Pink Designer Gown</p>
                    <small>Price: Rs1300.00</small>
                    <br>
                    <a href="">Remove</a>
                </div>
            </div>
        </td>
        <td><input type="number" value="1"></td>
        <td>Rs.1300.00</td>
    </tr>---->

</table>
<h4 class="mr-5 float-right text-success">Total:-Rs <span id="demo" class="mr-5
text-success"></span></h4>

<!---<div class="total-price">
    <table>
        <tr>
            <td>subtotal</td>
            <td><input type="text" name="total" id="total" disabled></td>
        </tr>
        <tr>
            <td>Tax</td>
            <td><input type="text" value=" id="tex" disabled></td>
        </tr>
        <tr>
            <td>GST</td>
            <td><input type="text" id="gst" disabled></td>
        </tr>
        <tr>
            <td>Total</td>
            <td><span id="demo" class="mr-5
            text-success"></span></td>
        </tr>
        
    </table>
</div>------>
<div class="row">
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
                    <a class="btn btn-warning mt-3"><i class="
                    fas fa-shopping-cart"></i>Checkout</a>
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
   <script>
       $(document).ready(function(){
                  var price = $('#price').val();
                  var tex =$('#tex').val();
                  var qty =$('#qty').val();
                  var gst =$('#gst').val();
                  var add = qty * price;
                  $('#price').val(add);
                  var val = price * tex /100;
                  $('#gst').val(val);
                  var total= parseInt(add) + parseInt(val);
                  $('#total').val(total);
                  $('#demo').html(total);

            $('#qty').change(function(){
                var qty =$(this).val();
                var add = qty * price;
                $('#price').val(add);
                var val = $('#price').val() * tex /100;
                $('#gst').val(val);
                var total = parseInt(add) + parseInt(val);
                $('#total').val(total);
                $('#demo').html('<span class-container text-success>' + total + '</span>');

            });
       });
   </script>
</body>
</html>