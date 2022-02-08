<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link rel="stylesheet" href="../css/new_todo.css">
</head>
<body>
    

    <div class="main">
        <div class="sub-heading">
            <div class="todo-heading"><h1>New Todo</h1></div>
            <div class="todo-add"><a href="../index.php">Back</a></div>
        </div>

        <div class="item-main">
            
            <form action="../php/add_todo.php" method="POST">
            
            
                <div class="div-item">
                        <label for="">Title</label>
                        <div class="title-div">
                            <input type="text" name="todo_title">
                        </div>

                        <label for="">Description/Items</label>
                        <div class="input">
                            <textarea name="todo_items" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                <input type="submit" value="Add new Todo">
            </form>
        </div>    
       
        
    </div>


</body>
</html>