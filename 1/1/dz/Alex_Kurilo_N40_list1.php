<?php 
 include "Alex_Kurilo_N40_header.php";
 ?>
 <h3 >Задание N 40 страница 1</h3>
   <form action="" method="GET">
    <input type-"text" name="name">
    <input type="submit">
    <p><a href="Alex_Kurilo_N40_list2.php">перейти на следующую страницу</a></p>
<?php
if(isset($_GET['name'])) {
    $get = $_GET['name'];
    setcookie("prim", $_GET['name'], time()+24*60*60);  
    echo '<h1>'.$_GET['name'].'</h1>';
    }
// if(isset($_COOKIE['prim']))
//   echo '<h1>'.$_COOKIE['prim'].'</h1>';
include "Alex_Kurilo_N40_footer.php";
?>
