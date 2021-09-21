<?php

include "dbConn.php"; // Using database connection file here

$pid = $_GET['pid']; // get id through query string

$del = mysqli_query($db,"delete from ret where pid = '$pid'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:adminreturn.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>