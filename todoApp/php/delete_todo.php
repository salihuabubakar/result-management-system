<?php
    
    // connect to db
    include_once("../includes/connection.php");

    // get the id of the record from db
    $Tid = $_GET['token'];
    

    // delete the record
    $stmt = "DELETE FROM todo_list WHERE md5 (todo_id)= '$Tid'";

    $sql_stmt = mysqli_query($connection, $stmt);

    if ($stmt) {
        header("location: ../index.php");
    }
    
    
    
    
?>