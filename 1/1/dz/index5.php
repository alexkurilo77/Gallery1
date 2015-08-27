<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alex_Kurilo_контрольная_от_2015-05-21</title>
</head>
<body>

  <h3 >Задание N 35 б</h3>
<?php 
$arr=array(1,2,3,4,5,6,7,8,9,10);
print_r($arr);
echo '<br>';
function func($var) 
{
return ($var%2==1);
} 
print_r(array_filter($arr,"func"));
echo '<br>';
 ?>



</body>
</html>