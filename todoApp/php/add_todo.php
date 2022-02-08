<?php

    $todo_title = $_POST["todo_title"];
    $todo_items = $_POST["todo_items"];
    

    //connect to database
    include_once("../includes/connection.php");

    //insert into the table
    $statm="INSERT INTO todo_list(todo_title, todo_items)
    VALUES ('$todo_title', '$todo_items');";

    $insert = mysqli_query($connection, $statm);

    
    header("Location: ../index.php");
   

?>