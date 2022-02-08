<?php 

    $token = $_GET['token'];
    include_once("../includes/connection.php");
    $stmt = "SELECT * FROM todo_list WHERE md5(todo_id) = '$token'";
    $sql_stmt = mysqli_query($connection, $stmt);
    if ($sql_stmt) {
        $g = mysqli_fetch_array($sql_stmt);
        $todo_id = $g['todo_id'];
        $todo_title = $g['todo_title'];
        $todo_items = $g['todo_items'];


    };


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo <?php echo $todo_title;  ?> </title>
    <link rel="stylesheet" href="../css/view_todo.css">
</head>
<body>
    

    <div class="main">
        <div class="sub-heading">
            <div class="todo-heading"><h1><?php echo $todo_title;  ?></h1></div>
            <div class="todo-add"><a href="../index.php">Back</a></div>
        </div>

        <div class="item-main">
            <label for="">List of <?php echo $todo_title;  ?></label>
            <?php 
                include_once("get_view_todo.php");                       
            ?>
        </div>    


    </div>


</body>
</html>