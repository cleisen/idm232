<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Admin';
include_once __DIR__ . '/../../_components/header.php';
include_once __DIR__ . '/../../_includes/recipes-functions.php';

?>

<?php
$recipes = get_recipes();
?>


  <div class="mx-auto my-16 max-w-7xl px-4">
    <div class="px-4 sm:px-6 lg:px-8">
      <div class="sm:flex sm:items-center">
        <div class="top_column">
          <div class="search-keyword">All Recipes</div>
          <p>A list of all the recipes including their title, ingredients and steps</p>
          <?php
            // If error query param exist, show error message
              if (isset($_GET['error'])) {
                  echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
              }
          ?>
        <button class="add_recipe">
          <a class="" href="<?php echo site_url(); ?>/admin/recipes/add.php" style="text-decoration: none;">+ NEW RECIPE</a>
        </button>
        </div>
      </div>
        <div>
        </div>
      
      <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="admin_content">
              <?php include __DIR__ . '/../../_components/table-recipes.php'; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php include_once __DIR__ . '/../../_components/footer.php';