<?php 
require_once '_globals.php';
$items = mysqli_query($conn, 'select * from items');
$base_table_head = '<tr>';
$base_table_body = '';
$item = mysqli_fetch_assoc($items);
foreach ($item as $k => $v) {
	$base_table_head .= "<th>$k</th>";
}
$base_table_head .= '</tr>';
do{
	$base_table_body .= '<tr>';
	foreach ($item as $k => $v) {
		$base_table_body .= "<td style='text-align:center;'>$v</td>";
	}
	$base_table_body .= '</tr>';
}while($item = mysqli_fetch_assoc($items));
$base_table = '<table style="width: 100%; border: 1px solid black;">' . $base_table_head . $base_table_body . '</table>';
$content .= $base_table;
include '_t.php';
 ?>