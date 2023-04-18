<?php
include ("config.php");


if(isset($_REQUEST["btn"])){
   $product_size = $_POST["product_size"];
   $product_qty = $_POST["product_qty"];
   $product_name = $_POST["product_name"];
   $product_price = $_POST["product_price"];
   $product_image= $_POST["product_image"];
}

if(mysqli_query($conn,"INSERT INTO designs (product_size,product_qty,product_name,product_price,product_image) VALUES ('$product_size','$product_qty','$product_name','$product_price','$product_image')"))
{
    echo "<script>alert('design successfully added to cart');</script>";
    header("location:cart.php ");
}
else{
    echo $con->error;
}


?>