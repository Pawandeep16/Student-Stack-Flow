<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require("RegisterConnectionMysql.php");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$date = date("Y/m/d");
 
// Escape user inputs for security
$topic_owner = mysqli_real_escape_string($link, $_REQUEST['topic_owner']);
$topic_title = mysqli_real_escape_string($link, $_REQUEST['topic_title']);
$post_text = mysqli_real_escape_string($link, $_REQUEST['post_text']);
// $post_create_time = mysqli_real_escape_string($link, $_REQUEST[$date]);
 
// Attempt insert query execution
$sql = "INSERT INTO Query_Table (topic_owner, topic_title, post_text) VALUES ('$topic_owner', '$topic_title', '$post_text')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>