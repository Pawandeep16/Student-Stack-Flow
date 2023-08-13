<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require("RegisterConnectionMysql.php");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$date = date("Y/m/d");
 
$sql5 = "INSERT INTO Query_Data_Table(query_id) SELECT query_id FROM Query_Table";
// Escape user inputs for security
$post_text = mysqli_real_escape_string($link, $_REQUEST['post_text']);
$post_owner = mysqli_real_escape_string($link, $_REQUEST['post_owner']);
// Attempt insert query execution
$sql ="INSERT INTO Query_Data_Table (post_text, post_owner) VALUES ('$post_text', '$post_owner') ";

if(mysqli_query($link, $sql)){ 
    echo "Records added successfully."; 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


 
// Close connection
mysqli_close($link);
?>