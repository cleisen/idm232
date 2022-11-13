<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$recipe_name_value = $_POST['recipe_name'];
$difficulty_value = $_POST['difficulty'];
$prep_time_value = $_POST['prep_time'];
$cook_time_value = $_POST['cook_time'];
$directions_value = $_POST['directions'];

// Create a SQL statement to insert the data into the database
$query = "INSERT INTO recipes (recipe_name, difficulty, prep_time, cook_time, directions) 
VALUES ('$recipe_name_value', '$difficulty_value', '$prep_time_value', '$cook_time_value', '$directions_value')";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Could Not Add Recipe';
    redirect_to('/admin/recipes?error=' . $error_message);
}