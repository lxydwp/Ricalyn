<?php
 require_once 'connection.php';

    if(isset($_POST['key']))
    {   
        $key = $_POST['key'];
        $sql_user_search = "SELECT * FROM users WHERE firstname Like '{$key}' OR lastname like '{$key}' OR email like '{$key}' ";
        $search_res =  mysqli_query($conn,$sql_user_search);

        if(mysqli_num_rows($search_res) > 0)
        {
            while($login_row = mysqli_fetch_assoc($search_res))
            {
                
                echo "Search result: <br> <br> Email: ".$login_row['email']." Name: ".$login_row['firstname']." ".$login_row['lastname'];
                
            } 
        }
        else
        {
            echo "No results found";
        }
    }

?>