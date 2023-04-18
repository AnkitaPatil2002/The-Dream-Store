<?php include("config.php");
session_start();
   $message ='';
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['user'] = $username;
    $query = "SELECT * FROM  admin_data WHERE username = '$username'";
    $query = "SELECT * FROM  admin_data WHERE password = '$password'";
    $result =$conn->query($query);
    if($result->num_rows >0) {
        header("location:adminpanel.php");
    }else{
        $message .= "Login Faild...";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Designs- The Dream Store</title>
    <link rel="stylesheet" href="adminlogin.css">
</head>
<!------------accountpage------------------------------>
<body>
<div class="sox">
    <div class="sriangle"></div>
       <h2 class="seader">Log in</h2>
                    <form class="contain" action="" method="post" >
                    <h2 style="margin-left: 15px; color: red; font-family: Arial"><?php echo $message;
                       ?></h2>
                        <p><input type="text" placeholder="Username" name="username"></p>
                        <p><input type="password" placeholder="Password" name="password"></p>
                        <p><input type="submit" name="submit" class="btn" value="Login"></p>
                    </form>
</div>
</body>
</html>