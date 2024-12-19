<?php 
include('conn.php');

if (isset($_POST['submit'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass = $_POST['password'];

    // Validate the email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='text-red-500 text-center mt-4'>Invalid email format!</div>";
    } else {
        $hashpass = password_hash($pass, PASSWORD_BCRYPT);

        if ($stmt = $conn->prepare("INSERT INTO users (email, mot_de_passe) VALUES (?, ?)")) {
            $stmt->bind_param("ss", $email, $hashpass);

            if ($stmt->execute()) {
                echo "<div class='text-green-500 text-center mt-4'>New record inserted successfully!</div>";
            } else {
                echo "<div class='text-red-500 text-center mt-4'>Error: " . $stmt->error . "</div>";
            }
            $stmt->close();
        } else {
            echo "<div class='text-red-500 text-center mt-4'>Error preparing the SQL statement!</div>";
        }
    }
}

// Close the connection
$conn->close();
?> 
