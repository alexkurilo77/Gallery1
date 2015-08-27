<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	// этот кусок пока не нужен
	if (isset($header)) {
		echo $header;
	}
	 ?>
	<meta charset="UTF-8">
	<!--
	<link rel="stylesheet" href="/public/styles/style.css">
	-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<title><?php echo $title ?></title>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="navbar-header">
		<?php if ($current_user): ?>
				<span class="navbar-brand ">
					<span class="text-success text-uppercase">
						<?= $current_user ?>
					</span>
				</span>
		<?php endif ?>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav"><?php 
			// Показываем ссылки на регистрацию и логин если не залогинен, иначе - на логаут. Также добавим ссылку на создание товара, если юзер - админ
				if (!$is_logged_in):?>
					<li><a  href="/register.php">Register</a></li>
					<li><a  href="/login.php">Login</a></li>
				<?php else: ?>
					<li><a  href="/logout.php">Logout</a></li>
					<?php if (is_sysadmin($current_user)): ?>
						<li class="text-nowrap"><a  href="/add_item.php">Add item</a></li>
					<?php endif ?>
				<?php endif; ?>
				<li><a  href="/items.php">Items</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
	
			<?php 
				// Выводим какой-либо контент
				echo $content;
				// выводим все дополнительные темплейты, которые мы добаляли в массив включаемых темплейтов с помощью конструкций вроде array_push($content_templates, '_item_sort');, где вторым аргументом передавали имя файла с темплейтом. Теперь присобачим расширение и все заработает
				foreach ($content_templates as $tmp) {
					include "{$tmp}.php";
				}
			// ТАК ОНО БЫЛО РАНЬШЕ. ТЕПЕРЬ МЫ ИЗМЕНИЛИ СТИЛЬ
			// // добавим форму регистрации если установлен флаг регистрации
			// if (isset($is_registering)) {
			// 	include '_r_form.php';
			// // иначе, добавляем форму добавления товара, если установлен соответстующий флаг
			// } elseif (isset($is_adding)) {
			// 	include '_item_form.php';
			// }
			// // добавляем форму сортировки, если установлен флаг
			// if (isset($support_sorting)) {
			// 	include '_item_sort.php';
			// }
			?>
		
	
	</div>
	<div class="navbar navbar-inverse">
		<div class="navbar-brand">FOOTER</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>