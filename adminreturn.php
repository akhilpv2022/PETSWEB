<?php
include "aheader.php";
include "dbConn.php";
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
    <h1><u>Pets Returned</u></h1>
	</hr>
<table class="center" border="2">
  <tr>
    <td>PID</td>
    <td>CATEGORY</td>
	<td>ORDER DATE</td>
	<td>NAME</td>
    <td>ADDRESS</td>
	<td>CONTACT</td>
	<td>REASON</td>
<td>ACTION</td>
  </tr>

<?php

$records = mysqli_query($db,"select * from ret"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['pid']; ?></td>
    <td><?php echo $data['category']; ?></td>
	 <td><?php echo $data['orderdate']; ?></td>
    <td><?php echo $data['name']; ?></td>
	 <td><?php echo $data['location']; ?></td>
    <td><?php echo $data['mob']; ?></td>
	 <td><?php echo $data['reason']; ?></td>
  
   

	<td><a href="deleteret.php?pid=<?php echo $data['pid']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>

</table>
<hr/>
<?php mysqli_close($db);  // close connection ?>

</body>
</html>