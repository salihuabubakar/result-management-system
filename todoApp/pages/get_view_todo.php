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

        echo ' 
                <div class="div-item">
                        
        
                        <div class="input">
                            <p>'.$todo_items.'</p>
                        </div>
        
                </div>
                
            ';        
    }

?>

