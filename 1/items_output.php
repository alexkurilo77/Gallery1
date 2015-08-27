<?php 

// echo "SELECT * FROM  'items' WHERE 1";
$query1=mysqli_query("SELECT * FROM 'items'");
while ($row = mysqli_fetch_array($query1)){
	echo $row['id'].' '.$row['name'];
}
?>