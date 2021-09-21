<?php
include "dbConn.php";
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $insert=mysqli_query($db,"INSERT INTO 'login'('Username','Password') VALUES('$username','$password')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}
mysqli_close($db);