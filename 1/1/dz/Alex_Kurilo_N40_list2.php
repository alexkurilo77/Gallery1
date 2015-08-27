<?php 
 require "Alex_Kurilo_N40_header.php";
?>
 <h3 >Задание N 40 страница 2</h3>
 <p><a href="Alex_Kurilo_N40_index.php">вернуться на предидущую страницу</a></p>
<?php
 if(isset($_COOKIE['prim']))
  echo '<h1>'.$_COOKIE['prim'].'</h1>';
 require "Alex_Kurilo_N40_footer.php";
?>