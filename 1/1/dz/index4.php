<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Alex_Kurilo_контрольная_от_2015-05-21</title>
</head>
<body>
 <h3 >Задание N 39 </h3>
  <form action="" method="GET">
    <input type="text" name="cyti" value="" >
    <input type="submit" name="sub"><br>
   <!--  <pre> -->
    <?php
     if (isset($_GET)) {
     Echo "Вы набрали ".'<br>'.'<br>';
     $get=($_GET['color']);
     $get=explode(',',$get);

     for ($i=0; $i < count($get); $i++) { 
       $get[$i]= ucwords(trim($get[$i])).'<br>';
     }
     $get= implode( ',',$get);
     echo $get;
     $get.='.';
     var_dump($get);
     // var_dump($_GET);
     }
     ?>
<!-- </form> -->
</body>
</html>