<?php
$db=mysqli_connect("localhost","root","","petsonline");

if(!$db)
{
    die("connection failed:".mysqli_connect_error());
}
else{
    echo "connected to database";
}
?>