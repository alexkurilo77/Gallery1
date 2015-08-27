<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Alex_Kurilo_контрольная_от_2015-05-21</title>
    <style>
    	.color_block{
    		width: 170px;
    		height: 170px;
    		border: 1px solid black;
    		margin-bottom: 10px;
    		cursor: pointer;
    	}
    </style>
  </head>
  <body >
  <div id="main">
  <h3>Задание N 36-37</h3>
    
    <?php 		
    if (empty($_GET['color'])) {
      $col = 'black';
      }else{
           $col = $_GET['color'];
           }
           $col=htmlentities($col);
    echo "<div class='color_block' style=background-color:$col></div>";	
    	?>
	<form action="" method="GET">
      <input type="text" name="color" value="">
	  <input type="submit" value="submit">
    </form>		
  </div>
</body>
</html>