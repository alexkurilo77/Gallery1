<div class="form-group">
    <form action="" method='post' class="form-inline">
        <input class="form-control" type="text" name="name" id="" required placeholder='name'>
        <input class="form-control" type="password" name="pass" id="" required placeholder='pass'>
        <?php 
        // Поле имейла нужно скрывать, если мы логинимся
        if (!isset($just_login)) :?>
            <input class="form-control" type="email" name="email" id="" placeholder='email'>
        <?php endif; ?>
        <input class="form-control" type="submit" value="Submit">
    </form>
</div>