<?php 
 setcookie('n$i','v$i');
 ?>
 <form action="">
<div id="block-content">
	<input type="submit" name="submit_add_to_basket" value="Добавить в корзину">
	<?php 
      // for ($i=1; $i <=5; $i++) { 
      //  	if (!@$_COOKIE["[n$i]"] ){
      //  	  include ("/b_c_$i.php");
      //  	  if (@$_GET['submit_add_to_basket']) {
      //     }
      //   }
      // }
	 $arr['0'] = array('<img  src="phone-0.jpg" width="75" height="100" align="left" margin-right="40" >','<p>Какая-то Nokia-0</p>','<p>какие-то характеристики и краткое описание <input type="checkbox" name="0" value="v0" float="right" margin-right="50";></p>');
	 $arr['1'] = array('<img  src="phone-1.jpg" width="75" height="100" align="left" margin-right="40" >','<p>Какая-то Nokia-1</p>','<p>какие-то характеристики и краткое описание <input type="checkbox" name="1" value="v1" float="right" margin-right="50";></p>');
	 $arr['2'] = array('<img  src="phone-2.jpg" width="75" height="100" align="left" margin-right="40" >','<p>Какая-то Nokia-2</p>','<p>какие-то характеристики и краткое описание <input type="checkbox" name="2" value="v2" float="right" margin-right="50";></p>');
	 $arr['3'] = array('<img  src="phone-3.jpg" width="75" height="100" align="left" margin-right="40" >','<p>Какая-то Nokia-3</p>','<p>какие-то характеристики и краткое описание <input type="checkbox" name="3" value="v3" float="right" margin-right="50";></p>');
	 $arr['4'] = array('<img  src="phone-4.jpg" width="75" height="100" align="left" margin-right="40" >','<p>Какая-то Nokia-4</p>','<p>какие-то характеристики и краткое описание <input type="checkbox" name="4" value="v4" float="right" margin-right="50";></p>');
	 $arr['5'] = array('<img  src="phone-5.jpg" width="75" height="100" align="left" margin-right="40" >','<p>Какая-то Nokia-5</p>','<p>какие-то характеристики и краткое описание <input type="checkbox" name="5" value="v5" float="right" margin-right="50";></p>');
	 $temp=array();
	// for ($i=1; $i<=5 ; $i++) { 
	// 	if (@$_GET['submit_add_to_basket']=$n[$i] ){
	// 		$temp[$i]=$_GET;
 //            print_r($t);
 //        }else{         	
 //            echo ($_GET['submit_add_to_basket']);
	// 		echo "n$i";
	// 		echo $arr["$i"]['0'];
 //            echo $arr["$i"]['1'];
 //            echo $arr["$i"]['2'];
 //            echo '<br>';
 //            }
	// }
   $t = array();
   $c = array('1'=>'1','2','3','4','5');
   for($i=1;$i<6;$i++){
    if (array_key_exists($c[$i], $_GET)) {
     $t[] = $c[$i];
    } else{
     // echo "{$c[$i]}<input type='checkbox' name='{$c[$i]}' value='1'><br>";
    	echo $arr["$i"]['0'];
        echo $arr["$i"]['1'];
        echo $arr["$i"]['2'];
        echo '<br>';
        // echo "{$c[$i]}<input type='checkbox' name='{$c[$i]}' value='1'><br>";
    }
   }
	 ?>
	 <!-- <input type="submit" name="submit_add_to_basket" value="Добавить в корзину"> -->

</form>
</div>