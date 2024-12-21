<?php
include('conn.php');

if (isset($_POST['submit'])) {
    $dish_name = $_POST['dish_name'];
    $dish_description = $_POST['dish_description'];
    $dish_image = $_POST['dish_image'];
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    if ($stmt = $conn->prepare("INSERT INTO plats (nom, description, img) VALUES (?, ?, ?)")) {
        $stmt->bind_param("sss", $dish_name, $dish_description, $dish_image);
        echo 'hamza';
        if ($stmt->execute()) {
            echo "New dish inserted successfully";
        } else {
            echo "Error: " . $stmt->error . "";
        }
        $stmt->close();
    } else {
        echo "Error preparing the SQL statement for dish!";
    }
}

$conn->close();
?>