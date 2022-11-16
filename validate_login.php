<?php
session_start();
// Grab User submitted information

// Connect to the database
$con = mysql_connect("$host","$datausername","$datapass", "$database");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("$database",$con);

$result = mysql_query("SELECT users_id, users_email, users_role " + 
  "FROM users WHERE users_email = $email AND users_pass = $pass");

$total = mysql_num_rows($result);
$email = $_POST["users_email"];
$pass = $_POST["users_pass"];

$protocol = $_SERVER['HTTPS'] ? "https" : "http";
$url = $protocol.'://'.$_SERVER['HTTP_HOST'];

if($total == 1){
    // Credentials match so we create session variables
    $row = mysql_fetch_assoc($result);
    $_SESSION['users_id'] = $row['users_id'];
    $_SESSION['users_email'] = $row['users_email'];
    $_SESSION['users_role'] = $row['users_role'];
    
    // After assigning the session variables, 
    // set the url to redirect the user to members page.    
    $url .= '/members.php';    
}
else{
    // If not, then redirect the user the login page with an error
    $url .= '/login.php?error=true';
}
header("Location: $url");
exit;

?>
