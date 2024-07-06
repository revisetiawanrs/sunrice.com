<?php
// Load data from JSON file
$json_data = file_get_contents('rice_data.json');
$rice_types = json_decode($json_data, true);

// Get form data
$index = $_POST['index'];

// Remove the item from the array
array_splice($rice_types, $index, 1);

// Save updated data to JSON file
file_put_contents('rice_data.json', json_encode($rice_types));

header('Location: editberas.php');
exit();
?>