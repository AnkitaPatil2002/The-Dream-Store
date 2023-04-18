<?php include("config.php");
$message = "";
if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id']) && !empty($_GET['id'])){
    $query = "DELETE FROM products WHERE id = '".$_GET['id']."'";
    $conn->query($query);
    header("location:dashboard.php");
    exit();
}
if(isset($_POST['submit']) && isset($_POST['id'])){
    $name = $_POST['name'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $tex = $_POST['tex'];
    $query = "UPDATE products SET name = '".$name."',qty = '".$qty."',price = '".$price."', Tex = '".$tex."'
            WHERE id = '".$_POST['id']."'";
    $query = $conn->query($query);
    if($query){
        $message = "<div class='alert alert-success'>Update Data
                Successfully !!</div>";
    }else{
        $message = "<div class='alert alert-danger'>Update Data
        Successfully !!</div>";
    }
}
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
    <style type="text/css">
        table.table td .add{
            display: none;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark shadow" style="background-color: #1c2841">
<a class="navbar-brand" href="#">Admin Panel</a>
<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggle-icon"></span>
</button>
<div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a href="adminpanel.php" class="nav-link">Home <span class="sr-only">(current)</span></a>
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
<div class="container mt-5">
    <h6><?php echo $message; ?></h6>
    <div class="row">
        <a href="adminpanel.php" class="badge bg-primary text-white ml-auto p-2 mr-5">Add item</a>
        <table class="table text-center mt-1 table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Tex</th>
                    <th class="text-center">Action</th>
                    <th colspan="3">Status</th>
                </tr>
            </thead>
        <?php
           $query = "SELECT * FROM products";
           $result = $conn->query($query);
           if($result->num_rows > 0){
               while ($rows = $result->fetch_assoc()) {
                       $id = $rows['id'];
                       $name = $rows['name'];
                       $qty = $rows['qty'];
                       $tex = $rows['Tex'];
                       $price = $rows['price'];
                       $image = $rows['image'];
        ?>
    <tbody>
        <tr>
            <form action="" method="post" enctpe="multipart/form-data">
                <td><img src="<?php echo $image; ?>" name=""  class=""  style="width: 100px;"></td>
                <td><input type="text" class="form-control form-control-sm" name="id" value="<?php echo $id;?>"disabled></td>
                <td><input type="text" class="form-control form-control-sm" name="name" value="<?php echo $name;?>"disabled></td>
                <td><input type="text" class="form-control form-control-sm" name="qty" value="<?php echo $qty;?>"disabled></td>
                <td><input type="text" class="form-control form-control-sm" name="price" value="<?php echo $price;?>"disabled></td>
                <td><input type="text" class="form-control form-control-sm" name="tex" value="<?php echo $tex;?>"disabled></td>
                <td>
                    <div class="btn-group">
                        <button type="submit" name="submit" class="add btn" title="save" data-toggle="tooltip"><a href="id=<?php
                        echo $id ?>"><i class="material-icons
                        text-warning">&#xE03B;</i></a></button>
            </form>
                        <a class="edit btn" title="Edit" data-toggle="tooltip"><i class="material-icons text-warning">
                        &#xE254;</i></a>
                        <a href="?action=delete&id=<?php echo $id; ?>"class=
                        "delete" title="Delete" data-toggle="tooltip" on
                        click="return confirm('Are You Sure to Delete this 
                        data')"><i class="btn material-icons text-danger">&#xE872;</i></a>
                    </div>
                </td>
                <?php if ($rows['status'] == 0) { ?>
                <td><a href="?action=deactive&id=<?php echo $id; ?>" class="
                text-danger" title="Click to Active" data-toggle="tooltip"><i
                class='fas'>&#xf0ab;</i></a></td>

                <?php }else{ ?>
                <td><a href="?action=active&id=<?php echo $id; ?>" class="text-success" 
                title="Click to Deactive" data-toggle="tooltip"><i class='fas'>&#xf0aa;</i></a>
                <?php }?>
                </td>
        </tr>
    </tbody>               
    <?php }} ?>
    </table>
        </div>
    </div>
          <script type="text/javascript">
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        var actions =$("table td:last-child").html();
        //alert(actions);
        //Append table with add row  form on add new button click
        $(document).on("click",".edit",function(){
        var input= $(this).parents("tr").find("input[type='text']");
            input.each(function(){
         $(this).removeAttr('disabled');       
            });
        $(this).parents("tr").find(".add, .edit").toggle();
        });
        });
  </script>
  </body>
  </html>