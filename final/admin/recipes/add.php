<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Add Recipe';
include_once __DIR__ . '/../../_components/header.php';
?>

<?php
// get recipes data from database
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

?>

<div>
  <div>
    <div>
      <div>
        <h1>Add Recipe</h1>
      </div>
    </div>
    <div>
      <div>
        <div>
          <div>
            <form action="<?php echo site_url() . '/../../_includes/process-add-recipe.php' ?>"; method="POST">
              <div class="block">
                <label for="">Recipe Name</label>
                <input class="" type="text" name="recipe_name">
              </div>

              <div class="block">
                <label for="">Difficulty Level</label>
                <input class="" type="text" name="difficulty">
              </div>


              <div class="block">
                <label for="">Prep Time</label>
                <input class="" type="text" name="prep_time">
              </div>
              <div class="block">
                <label for="">Cook Time</label>
                <input class="" type="text" name="cook_time">
              </div>
              <div class="block">
                <label for="">Directions</label>
                <input class="" type="text" name="directions">
              </div>
              <input
                type="submit" value="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';