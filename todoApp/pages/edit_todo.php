<?php 

    $token = $_GET['token'];
    include_once("../includes/connection.php");
    $stmt = "SELECT * FROM todo_list WHERE md5(todo_id) = '$token'";
    $sql_stmt = mysqli_query($connection, $stmt);
    if ($sql_stmt) {
        $get_id = mysqli_fetch_array($sql_stmt);
        $todo_id = $get_id['todo_id'];
        $todo_title = $get_id['todo_title'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Todo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

    <div class="main">
        <div class="sub-heading">
            <div class="todo-heading"><h1>Edit Todo</h1></div>
            <div class="todo-add"><a href="../index.php">Back</a></div>
        </div>

        <div class="item-main">
            <label for="">List of Todo</label>
            <form action="../php/update_todo.php" method="POST">
              <div class="input">
                <input type="text" name="todo_title" value="<?php echo $todo_title; ?>">
              </div>
              <input type="hidden" name="tID" value="<?php echo $todo_id; ?>">
              <input type="submit" value="Update Todo">
            </form>
        </div>    
       
        
    </div>


</body>
</html>