<?php
include("config.php");
if(isset($_POST['submit'])){
$name = $_POST['name'];
$number = $_POST['number'];
$houseno = $_POST['houseno'];
$area = $_POST['area'];
$pin = $_POST['pin'];
$city = $_POST['city'];
$state = $_POST['state'];
$payment = $_POST['payment'];

$res = mysqli_query($conn,"INSERT INTO order VALUES('','$name','$number','$houseno','$area','$pin','$city','$state','$payment')");
if($res){
    echo "Data inserted successfully....!";
}
else{
    echo "Failed";
}
}    
?>