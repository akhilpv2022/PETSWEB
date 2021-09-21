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
    <title>index</title>
    <link rel="stylesheet" href="purchase.css" type="text/css">
</head>
<body>
    <h1><u>Sales</u></h1>
	</hr>
<table class="center" border="2">
  <tr>
    <td>PID</td>
    <td>CATEGORY</td>
	<td>BREED</td>
	<td>AGE</td>
    <td>COLOR</td>
	<td>HEIGHT</td>
	<td>WEIGHT</td>
    <td>ACTIVITIES</td>
	<td>FOOD</td>
	<td>LOCATION</td>
	<td>PRICE</td>
	<td>IMAGES</td>
    <td>ACTION</td>
  </tr>

<?php

$records = mysqli_query($db,"select * from tbltest"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['fname']; ?></td>
	 <td><?php echo $data['breed']; ?></td>
    <td><?php echo $data['age']; ?></td>
	 <td><?php echo $data['color']; ?></td>
    <td><?php echo $data['height']; ?></td>
	 <td><?php echo $data['weight']; ?></td>
    <td><?php echo $data['activities']; ?></td>
	 <td><?php echo $data['food']; ?></td>
    <td><?php echo $data['location']; ?></td>
	 <td><?php echo $data['price']; ?></td>
    <td><img src="<?php echo $data['images']; ?>" width="100" height="100"></td>
<script>
function deleteRow(r) {
  var i = r.parentNode.parentNode.rowIndex;
  document.getElementById("tbltest").deleteRow(i);
}
</script>
	
	<td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>

</table>
<hr/>
<?php mysqli_close($db);  // close connection ?>

</body>
</html>