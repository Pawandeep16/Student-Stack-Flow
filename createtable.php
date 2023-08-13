<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "Student_Stack_Flow");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE Query_Table(
    query_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    topic_title varchar (150),
    topic_create_time Date,
    topic_owner varchar (150),
    post_text text
)";

$sql2 = "CREATE TABLE Query_Data_Table(
    post_id int not null primary key auto_increment,
    query_id int not null REFERENCES Query_Table(query_id),
    post_text text,
     post_create_time Date,
     post_owner varchar (150)
)";


if(mysqli_query($link, $sql2)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>