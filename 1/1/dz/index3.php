<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Alex_Kurilo_контрольная_от_2015-05-21</title>
</head>
<body>
 <h3 >Задание N 13-17 </h3>
  <form action="" method="GET">
    <input type="submit"><br>
    <?php
     $sum=0;
     $n= array();
     for($z=0; $z<100;$z++):
      if (isset($_GET['n'][$z])) {
      $element=$_GET['n'][$z];
      $element=strtoupper(trim(rtrim($element)));
       }
       else {$element='element '.$z;}
      if ($element!='') {$sum++;}
      echo"<input type='text' name='n[]' value='$element' size='8'>";
      echo 'Содержимое поля '.$z.'='.$element.'<br>';
     endfor;
     echo 'Oбщее количество полей, которые были заполнены перед отправкой = '.$sum.'<br>';
     ?>
</form>
</body>
</html>