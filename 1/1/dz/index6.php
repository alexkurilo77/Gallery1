<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alex_Kurilo_контрольная_от_2015-05-21</title>
</head>
<body>
	 <h3>Задание N 38</h3>
	 <form action="" method="GET">
	 <input type="text" name="text" value="" placeholder="INPUT" id="z">
     <input type="submit"><br>

<?php 
    
 	if (isset($_GET['text'])) {
 		echo 'a) ';
 		echo $_GET['text'].'<br>';
        echo 'б) ';
        echo  strip_tags($_GET['text']).'<br>';
        echo 'в) ';
        echo  htmlentities($_GET['text']).'<br>';}
    ?>

</body>
</html>