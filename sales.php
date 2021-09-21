<?php
include "header.php";
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>sell</title>
    <link rel="stylesheet" href="sales.css" type="text/css">
</head>
<body>

<?php

include "dbConn.php"; // Using database connection file here

if(isset($_POST["submit"]))
{
    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable
	
    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
    $dst = "./all_images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "all_images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
	
    $check = mysqli_query($db,"insert into tbltest(fname,breed,age,color,height,weight,activities,food,location,price,images) values('$_POST[fname]','$_POST[breed]','$_POST[age]','$_POST[color]','$_POST[height]','$_POST[weight]','$_POST[activities]','$_POST[food]','$_POST[location]','$_POST[price]','$dst_db')");  // executing insert query
		
    if($check)
    {
    	echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
    }
    else
    {
    	echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
    }
}
?>

<h1>Lets Sale Out Here</h1><br>

<form method="post" enctype="multipart/form-data">
  <table class="center" border="2">
    <tr>
      <td>Category</td>
      <td><input type="text" name="fname" placeholder="" Required></td>
    </tr>
	 <tr>
      <td>Breed</td>
      <td><input type="text" name="breed" placeholder="" Required></td>
    </tr>
	 <tr>
      <td>Age</td>
      <td><input type="text" name="age" placeholder="" Required></td>
    </tr> <tr>
      <td>Color</td>
      <td><input type="text" name="color" placeholder="" Required></td>
    </tr>
	 <tr>
      <td>Height</td>
      <td><input type="text" name="height" placeholder="" Required></td>
    </tr>
	 <tr>
      <td>Weight</td>
      <td><input type="text" name="weight" placeholder="" Required></td>
    </tr>
	 <tr>
      <td>Activities</td>
      <td><input type="text" name="activities" placeholder="" Required></td>
    </tr>
	 <tr>
      <td>Food</td>
      <td><input type="text" name="food" placeholder="" Required></td>
    </tr>
	 <tr>
      <td>Location</td>
      <td><input type="text" name="location" placeholder="" Required></td>
    </tr>
	 <tr>
      <td>Price</td>
      <td><input type="text" name="price" placeholder="" Required></td>
    </tr>
    <tr>
      <td>Select Image</td>
      <td><input type="file" name="image" Required></td>
    </tr>
    <tr>
      <td colspan="2"><BUTTON  name="submit" value="Upload"></td>			
    </tr>
  </table>
</form>

<hr/>




<?php mysqli_close($db);  // close connection ?>

</body>
</html>