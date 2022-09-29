<?php

$server ="local host";
$username ="root";
$password ="root";
$db       ="harry";

//create a connection
$conn = mysqli_connect($server 
$username
$password
$db   );

//check connection
if(!$conn) {
    die("connection failed:" .mysqli_connect_error());
}
echo "connected successfully!";

?>