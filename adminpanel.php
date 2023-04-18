<?php 
include("config.php");
session_start();
if($_SESSION['user']== ""){
    header("location:adminlogin.php");
}
$error ="";
if(isset($_POST['submit'])){
$p_qty = $_POST['p_qty'];
$p_price = $_POST['p_price'];
$p_tex = $_POST['p_tex'];
$p_name = $_POST['p_name'];
$uploadfile = $_FILES['uploadfile']['name'];
$tmpname  = $_FILES['uploadfile']['tmp_name'];
$folder ="dresses/".$uploadfile;
move_uploaded_file($tmpname,$folder);

if($p_qty!="" && $p_price!="" && $p_tex!="" && $p_name!="" && $folder!="" )
{
$q = "INSERT INTO products VALUES('','$p_qty','$p_price','$p_tex','$p_name','$folder')";
$conn->query($q);
$error .="<div class='alert alert-success'>Data Insert !!</div>";                                                           
}
else{
    $error .="<div class='alert alert-danger'>All fileds are required..</div>";
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminpanel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
</head>
<body style="background-color: #003153">
<nav class="navbar navbar-expand-md navbar-dark shadow" style="background-color: #1c2841">
<a class="navbar-brand" href="#">Admin Panel</a>
<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggle-icon"></span>
</button>
<div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a href="#" class="nav-link">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a href="dashboard.php" class="nav-link">Dashboard</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="adminlogout.php" class="nav-link">Logout</a>
        </li>
    </ul>
</div>
</nav>
<div class="container mt-5 w-50 p-5 rounded shadow-lg" style="background-color: #1c2841">
    <span class="text-danger"><?php echo $error; ?></span>
    <form action="" method="post" class="text-white" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-md-6">
                <label>Product Name</label>
                <input type="text" name="p_name" class="form-control
                form-control-sm">
            </div>
            <div class="form-group col-md-6">
                <label>Product price Rs.</label>
                <input type="text" name="p_price" class="form-control
                form-control-sm">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label>Product Quantity</label>
                <input type="text" name="p_qty" class="form-control
                form-control-sm">
            </div>
            <div class="form-group col-md-6">
                <label>Product Tex %</label>
                <input type="text" name="p_tex" class="form-control
                form-control-sm">
            </div>
        </div>
           <label for="customFile">Product Image</label>
        <div class="custom-file mb-3">
            <input type="file" name="uploadfile" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <button type="submit" name="submit" class="btn btn-sm text-white shadow" style="background-color: #003153">Add Item
    </button>   
    </form>
</div>
<script>
    //add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
</script>
</body>
</html>