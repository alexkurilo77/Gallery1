<form action="" method='post'>
	<input type="text" name="name" id="" required placeholder='name'>
	<input type="password" name="pass" id="" required placeholder='pass'>
	<?php 
	if (!isset($just_login)) :?>
		<input type="email" name="email" id="" placeholder='email'>
	<?php endif; ?>
	<input type="submit" value="Submit">
</form>