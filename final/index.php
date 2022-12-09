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
<div>
  <div>
    <div>
      <div">
        <form action="<?php echo site_url(); ?>index.php" method="GET">
          <input type="text" name="search" id="search" placeholder="Search"
            value="<?php echo $search; ?>">
          <!-- <button type="submit">Search</button> -->
          <button type="submit">
          <a href="<?php echo site_url(); ?>/results.php">Search</a>
        </button>
        </form>

  </div>
</div>

<?php
// get data from database

$query = 'SELECT * FROM recipes ORDER BY recipe_title ASC';
$result = mysqli_query($db_connection, $query);

?>


<div class="">
    <div class="">
        <div class="">
            <h1 class="">All Recipes</h1>
        </div>
    </div>    
</div>

<div class="">  
    <div class="">
        <?php include __DIR__ . '/_components/recipeCards.php'; ?>
    </div>
</div>



</main>


<?php include_once __DIR__ . '/_components/footer.php';
?>