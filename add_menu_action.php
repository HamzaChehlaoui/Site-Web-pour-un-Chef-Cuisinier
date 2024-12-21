<?php
include('conn.php');

if (isset($_POST['submit'])) {
    $titre = $_POST['titre_menu'];
    $menu_description = $_POST['menu_description'];
    $dish_name = $_POST['dish_name'];
    $dish_description = $_POST['dish_description'];
    $dish_image = $_POST['dish_image'];
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    if ($stmt = $conn->prepare("INSERT INTO menus (chef_id, titre, description) VALUES (?, ?, ?)")) {
        $id_rol = 9; 
        $stmt->bind_param("iss", $id_rol, $titre, $menu_description);
        
        if ($stmt->execute()) {
            echo "New menu inserted successfully";
        } else {
            echo "Error: " . $stmt->error . "";
        }
        $stmt->close();
    } else {
        echo "
        Error preparing the SQL statement for menu";
    }

    $menu_id = mysqli_query($conn, "SELECT * FROM `menus` WHERE titre='$titre'");

    if ($menu_id && mysqli_num_rows($menu_id) > 0) {
        $row = mysqli_fetch_assoc($menu_id);
        $id_menu = $row['id'];
    if ($stmt = $conn->prepare("INSERT INTO plats (nom, description, img, menu_id) VALUES (?, ?, ?, ?)")) {
        $stmt->bind_param("sssi", $dish_name, $dish_description, $dish_image, $id_menu);
        
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
}
$conn->close();
?>