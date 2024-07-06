<?php
// Load data from JSON file
$json_data = file_get_contents('rice_data.json');
$rice_types = json_decode($json_data, true);

// Get form data
$index = $_POST['index'];
$name = $_POST['name'];
$description = $_POST['description'];

// Update data
$rice_types[$index]['name'] = $name;
$rice_types[$index]['description'] = $description;

// Handle file upload if a new image is provided
if ($_FILES['image']['tmp_name']) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $rice_types[$index]['image_path'] = $target_file;
}

// Save updated data to JSON file
file_put_contents('rice_data.json', json_encode($rice_types));

header('Location: editberas.php');
exit();
?>
