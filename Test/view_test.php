<html>
    <head></head>
    <body>
        <ul>
            <li>home</li>
            <li>contact</li>
            <li><?php if(isset($user)){echo $user->name;} ?></li>
        </ul>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit">
        </form>
    </body>
</html>