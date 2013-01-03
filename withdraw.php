<?

    // require common code
    require_once("includes/common.php");
    
    $uid = $_SESSION["uid"];
    $amount = mysql_real_escape_string($_POST["amount"]);
    
    // ensure valid user input
    if(!preg_match("/^\d+$/", $amount))
        apologize("That's an invalid number of shares.");
            
    // determine how much cash user current has
    $result = mysql_query("SELECT cash FROM users WHERE uid = $uid");    
    $row = mysql_fetch_array($result);
        
    // ensure user can afford withdrawl
    if($amount > $row["cash"])
            apologize("You don't have that much money.");
                     
    $update = mysql_query("UPDATE users SET cash = cash - $amount WHERE uid = $uid");
                            
    // redirect user to portfolio page
    redirect("index.php");

 ?>