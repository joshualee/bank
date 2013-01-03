<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="index.php">Bank of DIT <img src="images/dit_logo.png" class="logo"></a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <? if(isset($_SESSION["uid"])): ?>
                    <li><a href="login.php">Log Out</a></li>
                    <? else: ?>
                    <li class="active"><a href="login.php">Login</a></li>
                    <? endif ?>
                </ul>
            </div>
        </div>
    </div>
</div>