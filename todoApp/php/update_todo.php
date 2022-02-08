<?php

    $tTitle = $_POST["todo_title"];
    $tID = $_POST["tID"];

    //connect to database
    include_once("../includes/connection.php");

    // //update into the table
     $statm="UPDATE todo_list SET todo_title = '$tTitle' WHERE todo_id = '$tID'";

     $sql_stmt = mysqli_query($connection, $statm);

     if ($sql_stmt) {
        header("Location: ../index.php");
     }

    

   

?>