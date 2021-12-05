<?php
$link = mysqli_connect("127.0.0.1:3307", "root", "", "rnz");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>