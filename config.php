<?php
/*this file contains database configuration assuming you are running msql
using user "root" and "password" "'

*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'thedreamstore');


//try connecting to the db
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//CHECK CONNECTION
if($conn == false){
    dir('Error: Cannot connect');
}



?>
