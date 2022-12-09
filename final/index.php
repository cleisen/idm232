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
$query .= " WHERE recipe_name LIKE '%{$search}%'";
$query .= " OR difficulty LIKE '%{$search}%'";
$query .= " OR prep_time LIKE '%{$search}%'";
$query .= " OR cook_time LIKE '%{$search}%'";
$query .= " OR directions LIKE '%{$search}%'";
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
        <h1>Search Results</h1>
        <form action="<?php echo site_url(); ?>index.php" method="GET">
          <input type="text" name="search" id="search" placeholder="Search"
            value="<?php echo $search; ?>">
          <button type="submit">Search</button>
        </form>
        <h2>You searched for "<?php echo $search; ?>"</h2>
        <?php
        // If no results, echo no results
        if (!$recipes_results) {
            echo '<p>No results found</p>';
        }
?>
        <?php
// If error query param exist, show error message
  if (isset($_GET['error'])) {
      echo '<p class="">' . $_GET['error'] . '</p>';
  }?>
      </div>

    </div>

    <?php
    // If we have results, show them
      if ($recipes_results) {
          while ($recipes_results = mysqli_fetch_assoc($results)) {
              echo '<div class="">';
              echo '<h2>' . $recipes_results['recipe_title'] . ' ' . $recipes_results['file_path'] . '</h2>';
              echo '</div>';
          }
      }
?>

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