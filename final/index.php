<?php

include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';

// Check if search exist in query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}

$query = 'SELECT *';
$query .= ' FROM recipes';
$query .= " WHERE recipe_title LIKE '%{$search}%'";
$query .= " OR file_path LIKE '%{$search}%'";
$query .= " OR introduction LIKE '%{$search}%'";
$query .= " OR ingredients LIKE '%{$search}%'";
$query .= " OR instructions LIKE '%{$search}%'";
$results = mysqli_query($db_connection, $query);

// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
    $recipes_results = true;
} else {
    $recipes_results = false;
}

?>

<main>
<img src="<?php echo site_url(); ?>/images/home-hero.png" class="home-hero"></img>

<div class="search-bar">
<form action="<?php echo site_url(); ?>/search" method="GET">
<input class="search-input" type="text" name="search" id="search" placeholder="what do you want to make?">
<button class="search-button" type="submit">search</button>
</form>
</div>
<?php
// get data from database

$query = 'SELECT * FROM recipes ORDER BY recipe_title ASC';
$result = mysqli_query($db_connection, $query);

?>

<div class="">  
    <div class="">
        <?php include __DIR__ . '/_components/recipeCards.php'; ?>
    </div>
</div>



</main>


<?php include_once __DIR__ . '/_components/footer.php';
?>