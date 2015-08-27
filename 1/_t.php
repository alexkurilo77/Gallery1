<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	if ($header) {
		echo $header;
	}
	 ?>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/public/styles/style.css">
	<title><?php 
	$title = isset($title) ? $title : 'Document';
	echo $title;
	 ?></title>
</head>
<body>
	<div class="content">
		<div class="head"><?php 
			if (!$is_logged_in):?>
				<a href="/register.php">Register</a>
				<a href="/login.php">Login</a>
			<?php else: ?>
				<h1><?php echo $s['user']; ?></h1>
				<a href="/logout.php">Logout</a>
				<?php if (is_sysadmin($s['user'])): ?>
					<a href="/add_item.php">Add item</a>
				<?php endif ?>
			<?php endif; ?>
			
		</div>
		<div class="main">
			<?php 
			echo $content;
			if ($is_registering) {
				include '_r_form.php';
			} elseif ($is_adding) {
				include '_item_form.php';
			}
			?>
		</div>
		<div class="foot">FOOTER</div>
	</div>
</body>
</html>