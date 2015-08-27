 <!DOCTYPE html>
 <html lang="en">
 <head>
      <meta charset="UTF-8">
      <title>Document</title>
 </head>
 <body>
      <?php 
       $arr['1'] = array('<img  src="phone-1.jpg" width="75" height="100" align="left" margin-right="40" >','<p>Какая-то Nokia-1</p>','<p>какие-то характеристики и краткое описание <input type="checkbox" name="n1" value="v1" float="right" margin-right="50";></p>');
       // var_dump($arr['1']);
       echo $arr['1']['0'];
       echo $arr['1']['1'];
       echo $arr['1']['2'];

       ?>
 </body>
 </html>