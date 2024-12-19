<?php
        session_start();  
        include('conn.php');
    $users = mysqli_query($conn, "SELECT * FROM `users` LIMIT 1");
    if ($users && mysqli_num_rows($users) > 0) {
        $row = mysqli_fetch_assoc($users);
        
        $email = $row['email'];
        $hashed_pass = $row['mot_de_passe'];
        $id= $row['role_id'];
        if($id==1){

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $input_email = mysqli_real_escape_string($conn, $_POST['email']);
                $input_password = $_POST['password']; 
                    
                if ($input_email == $email && password_verify($input_password, $hashed_pass)) {
                    $_SESSION['email'] = $email;
                    header('Location:menu.php');
                    exit; 
                } else {
                    echo 'Invalid email or password';
                }
            } else {
                echo 'ERROR: You Cannot Browse This Page Directly';
            }
        } else {
            echo 'No users found in the database';
        }
        }
?>
