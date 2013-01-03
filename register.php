<?

    // require common code
    require_once("includes/common.php");

?>

<!DOCTYPE html>

<html>
    <?php include 'partials/header.php'; ?>
    <body>
        <?php include 'partials/navigation.php'; ?>
        <div class='container'>
            <form action="register2.php" method="post">
                <legend>Register</legend>
                <label>Username</label>
                <input type="text" name="username"></input>
                <label>Password</label>
                <input name="password" type="password"></input>
                <label>Re-enter Password</label>
                <input name="password2" type="password"></input>
                <label class="checkbox">
                  <input type="checkbox" name="encrypt"> Encrypt Password (MD5)
                </label>
                <br>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </body>
</html>
