
<?php 
require_once '_globals.php';
$condition = ' where 1 ';

if (isset($_GET['available'])) {
	$condition .= 'AND count>0';
}
if (isset($_GET['type'])) {
	if (!empty($_GET['type'])) {
		$condition .= " AND type = '{$_GET['type']}'";
	}
	
}
if (isset($_GET['price']) && !empty($_GET['price'])) {
	$condition .= " AND price {$_GET['price']} ";
}

if (isset($_GET['sort']) && isset($_GET['desc'])) {
	$condition .= " ORDER BY {$_GET['sort']} DESC";
}

if (isset($_GET['sort']) && !isset($_GET['desc'])) {
	$condition .= " ORDER BY {$_GET['sort']} ";
}
// if (isset($_GET['desc'])) {
// 	$condition .= " DESC";
// }

$q = 'select * from items ' . $condition;
$content .=  "<br>{$q}<br>";
$items = mysqli_query($conn, $q);
$base_table_head = '<tr>';
$base_table_body = '';
$total_results = mysqli_num_rows($items);
if (!$total_results) {
	$content = 'EMPTY';
} else {
	$item = mysqli_fetch_assoc($items);

	foreach ($item as $k => $v) {
		$base_table_head .= "<th>$k</th>";
	}
	$base_table_head .= '</tr>';

	do{
		switch($tmp_count = $item['count']) {
			case 0:
				$class = 'danger';
				break;
			case $tmp_count < 2:
				$class = 'warning';
				break;
			case $tmp_count < 5:
				$class = 'info';
				break;
			default:
				$class = 'success';
				break;
		}
		$base_table_body .= "<tr class=\"{$class}\">";
		foreach ($item as $k => $v) {
			$base_table_body .= "<td>$v</td>";
		}
		$base_table_body .= '</tr>';
	}while($item = mysqli_fetch_assoc($items));

	$base_table = '<table class="table table-striped table-hover">' . $base_table_head . $base_table_body . '</table>';
	if (isset($content)) {
		$content .= $base_table;
	} else{
		$content = $base_table;
	}
}
?>



<?php
array_push($content_templates, '_item_sort');


?>

<?php
include '_t.php';

 ?>

