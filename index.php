<?

    // require common code
    require_once("includes/common.php"); 
    
    $result = mysql_query("SELECT * FROM users WHERE uid = {$_SESSION['uid']}");
    $user = mysql_fetch_array($result);
    
    $feedback_results = mysql_query("SELECT * FROM feedback");
    
?>

<!DOCTYPE html>
<html>
    <?php include 'partials/header.php'; ?>
    <body>
        <?php include 'partials/navigation.php'; ?>
        <div class='container'>
            <h1> Welcome, <?=$user["username"]?>! </h1>
            <h3> Balance </h3>
            <p> Your current balance is $<span id="currentcash"><? printf("%.2f", $user["cash"]) ?></span>.</p>
            
            <form action="withdraw.php" method="get" id="withdraw-form" class="form-inline">
                <div class="input-prepend">
                  <span class="add-on">$</span>
                  <input type="text" name="amount" class="input-small" placeholder="amount">
                </div>
                <button type="submit" class="btn btn-success btn-small">Withdraw</button>
                <span id="withdraw-error" class="error"></span>
            </form>
            
            <h3> Feedback </h3>
            <? if (mysql_num_rows($feedback_results) == 0): ?>
            <p> There is currently no feedback. </p>
            <? else: ?>
            <ul>
                <? while ($feedback = mysql_fetch_array($feedback_results)): ?>
                    <li><?=$feedback["name"] . ": " . $feedback["message"]?></li>
                <? endwhile ?>
            </ul>
            <? endif ?>
            <h4> Submit your feedback. </h4>
            <form action="feedback.php" method="post">
                <textarea name="message" rows="3" placeholder=""></textarea>
                <br>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
            
            <form action="search.php" method="get" id="search-form" class="form-inline">
                <div class="input-prepend">
                  <input type="text" name="search" class="input-small">
                </div>
                <button type="submit" class="btn btn-success btn-small">Search</button>
                <span id="search-error" class="error"></span>
            </form>
        </div>
    </body>
</html>

<!--

<script>
$.ajax({
  url: "withdraw.php",
  type: "POST",
  data: {
    amount = -10000
  }
})
</script>

-->