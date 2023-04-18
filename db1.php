<?php
require_once "config.php";

$username = $password = "";
$username_err = $password_err  = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

   //CHECK IF USERNAME IS EMPTY
   if(empty(trim($_POST["username"]))){
	   $username_err = "Username cannot be blank";
   }
   else{
	   $sql = "SELECT id FROM user_data WHERE username = ?";
	   $stmt = mysqli_prepare($conn, $sql);
	   if($stmt){
           mysqli_stmt_bind_param($stmt, "s", $param_username);
           //set the value of param username

		   $param_username = trim($_POST['username']);
		   //Try to execute this statement
		   if(mysqli_stmt_execute($stmt)){
               mysqli_stmt_store_result($stmt);
               if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err ="This  username is already taken";
               }
               else{
                $username = trim($_POST['username']);
               }
           }
		else{
			echo "Something went wrong";
		}
	   }
    }

    mysqli_stmt_close($stmt);	

//check for password
if(empty(trim($_POST['password']))){
	$password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than five character";
}
else{
	$password = trim($_POST['password']);
}

//If there were no errors ,go ahead and insert into the database
if(empty($username_err) && empty($password_err)){
	$sql = " INSERT INTO user_data (username, password) VALUES (?, ?)";
	$stmt = mysqli_prepare($conn, $sql);
	if ($stmt){
		mysqli_stmt_bind_param($stmt, "ss" , $param_username, $param_password);

		//set this parameters
		$param_username = $username;
		$param_password = password_hash($password, PASSWORD_DEFAULT);

		//TRY TO EXECUTE THE QUERY
		if(mysqli_stmt_execute($stmt)){
			header("location: login.php");
		}
		else{
			echo "Something went wrong.... cannot redirect!";
		}
	}
	mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}




?>
