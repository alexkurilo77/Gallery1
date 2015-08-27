<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
     $a=array(1,2,3,4,5,6,7,8);
     $i=0;
     while($x=$a[$i++]){
     	echo $x;
     	echo '<br>';
     	if ($x==5) {
     		break;
     	}
     }
echo 'Массив';
include '12';
    ?>
</body>
</html>