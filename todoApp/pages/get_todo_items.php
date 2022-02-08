
<?php 
    include_once('Includes/connection.php');
   

    //Prepare sql statement
    $sql_statement = "SELECT * FROM todo_list";

    //Run sql statement
    $run_query = mysqli_query($connection, $sql_statement);

    //get the number of rows in table (step2)
    $number_rows = mysqli_num_rows($run_query);
    //echo $number_rows;

    //Check if the contact information is empty
    if ($number_rows > 0) {
        while ($get = mysqli_fetch_array($run_query)) {
            //get names from table
            $todo_id = $get['todo_id'];
            $todo_title = $get['todo_title'];
            $todo_items = $get['todo_items'];

            $Tid = md5($todo_id);

            echo ' 
                    <div class="div-item">
                        <div class="view-div">
                            <a href="pages/view_todo.php?token='.$Tid.'">View</a>
                        </div>
        
                        <div class="input">
                            <p>'.$todo_title.'</p>
                        </div>
        
                        <div class="delete-edit">
                          <div class="delete-div">
                           <a href="php/delete_todo.php?token='.$Tid.'">Delete</a>
                          </div>
                          <div class="edit-div"> 
                           <a href="pages/edit_todo.php?token='.$Tid.'">Edit</a>
                          </div> 
                        </div>
        
                    </div>
                 '; 
        }
    }

?>  