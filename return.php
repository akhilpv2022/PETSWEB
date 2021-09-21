<?php
include "header.php";
?>
<DOCTYPE html>
    <HTML lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>return</title>
    <link rel="stylesheet" href="ret.css" type="text/css">
</head>
<body>

<?php

include "dbConn.php"; // Using database connection file here

if(isset($_POST["submit"]))
{
	$check = mysqli_query($db,"insert into ret(pid,category,orderdate,name,location,mob,reason) values('$_POST[pid]','$_POST[category]','$_POST[orderdate]','$_POST[name]','$_POST[location]','$_POST[mob]','$_POST[reason]')");  // executing insert query
		
    if($check)
    {
    	echo '<script type="text/javascript"> alert("Our Delivery Agent will Connect You Soon!"); </script>';  // alert message
    }
}
?>

<h1><u>Return Your Pet Safely</u></h1></br>
<form method="post" enctype="multipart/form-data">
  <table class="center" border="2">
    <tr>
      <td>Pid</td>
      <td><input type="text" name="pid" placeholder="" Required></td>
    </tr>
	 <tr>
      <td>Category</td>
      <td><input type="text" name="category" placeholder="" Required></td>
    </tr>
	 <tr>
      <td>Order-Date</td>
      <td><input type="text" name="orderdate" placeholder="" Required></td>
    </tr> <tr>
      <td>Name</td>
      <td><input type="text" name="name" placeholder="" Required></td>
    </tr>
	 <tr>
      <td>Address</td>
      <td><input type="text" name="location" placeholder="" Required></td>
    </tr>
	 <tr>
      <td>Contact</td>
      <td><input type="text" name="mob" placeholder="" Required></td>
    </tr>
	 <tr>
      <td>Reason</td>
      <td><textarea id="reason" name="reason" placeholder="" rows="4" cols="50" Required></textarea></td>
    </tr>
	 <tr>
      <td colspan="2"><input type="submit" name="submit" value="Upload"></td>			
    </tr>
  </table>
</form>

<hr/>




<?php mysqli_close($db);  // close connection ?>

</body>
</html>