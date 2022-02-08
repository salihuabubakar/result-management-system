<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

    <div class="main">
        <div class="sub-heading">
            <div class="todo-heading"><h1>Todo Application</h1></div>
            <div class="todo-add"><a href="pages/new_todo.php">Add New</a></div>
        </div>

        <div class="item-main">
            <label for="">List of Todo</label>
            <?php 
                include_once("pages/get_todo_items.php");                       
            ?>
        </div>    
       
        
    </div>


</body>
</html>