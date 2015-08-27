<?php 
  if (@$_POST["submit_enter"]) {
  	$login = ($_POST['input_login']);
  	$pass = ($_POST['input_pass']);
    
    if (($_POST['input_login'])=='admin' && ($_POST['input_pass'])=='admin') {
     include "index.php";
     } 
     else echo '<p align="right" ><h3>Неверно введен логин и/или параль</h3></p>';
  	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style-login.css" type="text/css" media="screen, projection" />
	<title>Панель управления - вход</title>
</head>
<body>
	<?php 
     include("login_form.php");
	 ?>
</body>
</html>