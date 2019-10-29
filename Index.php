<?php
/*
 * Muc tieu:
 *  1. Cu phap - Done
 *  2. Tuong tac PHP - HTML
 *  3. Nam duoc OOP - Done
 *  4. Nam duoc Magic Method -  Done
 *  5. Tuong tac Database
 */
?>
<!DOCTYPE HTML>

<html>
    <body>
        <form method="post" action="index.php">
            Username:<br/>
            <input type="text" name="username"><br/>
            Password<br/>
            <input type="password" name="password"><br/>
            <input type="submit" value="Create User">
        </form>

        Welcome <?php echo $_POST["username"]; ?><br>
        Your password is: <?php echo $_POST["password"]; ?>
    </body>
</html>
