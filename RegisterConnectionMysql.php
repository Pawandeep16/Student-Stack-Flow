<?php

/*Checking the Connection With the XAMP */
$link = mysqli_connect("localhost","root","","Student_Stack_Flow");
// Check connection
if ($link === false) {
    die("ERROR: Could not connect." . mysqli_connect_error());
} else {
    echo "Successfully Connected to the Student_Stack_Flow Database";
}

?>