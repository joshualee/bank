<?

    // require common code
    require_once("includes/common.php");
    
    $uid = $_SESSION["uid"];
    
    // $message = mysql_real_escape_string($_POST["message"]);
    $message = $_POST["message"];
    
    // ensure valid user input
    // if($message == "")
    //     apologize("You must write something.");
    
    $name = mysql_query("SELECT username FROM users WHERE uid=$uid");
    $name = mysql_fetch_array($name);
    $name = $name["username"];
    
    $insert = mysql_query("INSERT INTO feedback (user_id, message, name) VALUES ($uid, '$message', '$name')");    
                            
    // redirect user to portfolio page
    redirect("index.php");

 ?>