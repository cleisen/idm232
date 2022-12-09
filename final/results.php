<?php

include_once __DIR__ . '/app.php';
$page_title = 'Search Results';
include_once __DIR__ . '/_components/header.php';
?>

<h1>Search Results</h1>
<?php
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
<h2>You searched for "<?php echo $search; ?>"</h2>
        <?php
        // If no results, echo no results
        if (!$recipes_results) {
            echo '<p>No results found</p>';
        }

        
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p class="">' . $_GET['error'] . '</p>';
          }?>
              </div>
        
            </div>
        
            <?php
            $site_url = site_url();
            // If we have results, show them
              if ($recipes_results) {
                  while ($recipes_results = mysqli_fetch_array($results)) {
                      echo '<div class="">';
                      echo '<h2>' . $recipes_results['recipe_title'] . '</h2>';
                      echo '</div>';
                  }
              }
        ?>

<?php include_once __DIR__ . '/_components/footer.php';
?>