<?

    // require common code
    require_once("includes/common.php"); 

    // escape username and password for safety
    $username = mysql_real_escape_string($_POST["username"]);
    $password = mysql_real_escape_string($_POST["password"]);
    $password2 = mysql_real_escape_string($_POST["password2"]);
    
    // ensure valid user input
    if ($username == "" || $password == "" || $password2 == "")
        apologize("You left some field blank! Please provide a username and password.");
    if ($password !== $password2)
        apologize("Your passwords do not match! Please try again.");
    
    if (isset($_POST["encrypt"])) {
        $password = md5($password);
    }

    // execute query
    $result = mysql_query("INSERT INTO users (username, password, cash) VALUES('$username', '$password', 10000.00)");
    
    if ($result) //query succeeded
    {
        // set users session id
        $uid = mysql_insert_id();
        $_SESSION["uid"] = $uid;
        
        // send user to portfolio page
        redirect("index.php");
    }
    else // report error 
        apologize("We could not register you. Pick another username and try again.");

?>
