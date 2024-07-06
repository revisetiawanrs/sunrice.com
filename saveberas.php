<?php
// Load data from JSON file
$json_data = file_get_contents('rice_data.json');
$rice_types = json_decode($json_data, true);

// Get form data
$name = $_POST['name'];
$description = $_POST['description'];

// Handle file upload
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

// Add new rice type to array
$new_rice_type = [
    "name" => $name,
    "description" => $description,
    "image_path" => $target_file
];
$rice_types[] = $new_rice_type;

// Save updated data to JSON file
file_put_contents('rice_data.json', json_encode($rice_types));

header('Location: editberas.php');
exit();
?>
