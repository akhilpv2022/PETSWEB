<?php
include "aheader.php";
include "dbConn.php";
include 'config.php';
?>
<DOCTYPE html>
    <HTML lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Pet Returned</title>
    <link rel="stylesheet" href="purchase.css" type="text/css">
</head>
<body>
    <h1><u>Users</u></h1>
	</hr>
<table class="center" border="1">
  <tr>
    <td>ID</td>
    <td>USERNAME</td>
	<td>EMAIL</td>
	<td>PASSWORD</td>
    <td>CONTACT</td>


  </tr>

<?php

$records = mysqli_query($conn,"select * from users"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['username']; ?></td>
	 <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['password']; ?></td>
	 <td><?php echo $data['contact']; ?></td>
  
   

	
  </tr>	
<?php
}
?>

</table>
<hr/>
<?php mysqli_close($db);  // close connection ?>

</body>
</html>