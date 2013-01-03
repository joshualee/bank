<?
    // require common code
    require_once("includes/common.php");
    
    logout();
?>

<!DOCTYPE html>
<html>
    <?php include 'partials/header.php'; ?>
    <body>
        <?php include 'partials/navigation.php'; ?>
        <div class='container'>
            <form action="login2.php" method="post">
                <legend>Log in</legend>
                <label>Username</label>
                <input type="text" name="username"></input>
                <label>Password</label>
                <input name="password" type="password"></input>
                <br>
                <button type="submit" class="btn btn-primary">Log in</button>
                <a href="register.php">Register</a>
            </form>
        </div>
    </body>
</html>
