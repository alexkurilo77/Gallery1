
<?php 
  require_once 'model/model.php';
	// var_dump (array_filter(explode('/',$_SERVER['REQUEST_URI']), function ($a){return $a ? $a : '';}));
 	 $a=array_filter(explode('/',$_SERVER['REQUEST_URI']));
 	 // var_dump($a);
 	
 	 switch (@$a[1]) {
 	 	// case 'not_found':
 	 		
 	 	// 	require_once 'controller/not_found.php';
 	 	// 	break;
 	 	case 'add_picture':
 	 		require_once 'controller/add_picture.php';
 	 		break;
 	 	case 'add_type':
 	 		require_once 'controller/add_type.php';
 	 		break;
 	 	case 'gallery':
 	 		require_once 'controller/gallery.php';
 	 		break;
 	 	
 	 	
 	 	default:
 	 		require_once 'controller/not_found.php';
 	 		break;
 	 }
