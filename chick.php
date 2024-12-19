<?php
    session_start(); 
    
    include('conn.php');
    
    $users = mysqli_query($conn, "SELECT * FROM `users` LIMIT 1");
    if ($users && mysqli_num_rows($users) > 0) {
        $row = mysqli_fetch_assoc($users); 
        
        $email = $row['email'];
        $pass = $row['mot_de_passe'];
        $id= $row['id'];
        

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input_email = mysqli_real_escape_string($conn, $_POST['email']);
            $input_password = $_POST['password']; 
            
            if ($input_email == $email && $input_password == $pass && $id=2) {
                $_SESSION['email'] = $email;
                header('Location:menu.php');
                exit; 
            } else {
                echo 'Invalid email or password';
                echo $input_email;
                echo $input_password;
                echo $id;
            }
        } else {
            echo 'ERROR: You Cannot Browse This Page Directly';
        }
    } else {
        echo 'No users found in the database';
    }
?>
