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
            <form action="<?php echo site_url() . '/_includes/process-add-recipe.php' ?>"; method="POST">
              <div class="block">
                <label for="">Recipe Title</label>
                <input class="" type="text" name="recipe_title">
              </div>

              <div class="block">
                <label for="">Image</label>
                <input class="" type="text" name="file_path">
              </div>


              <div class="block">
                <label for="">Introduction</label>
                <input class="" type="text" name="introduction">
              </div>
              <div class="block">
                <label for="">Ingredients</label>
                <input class="" type="text" name="ingredients">
              </div>
              <div class="block">
                <label for="">Instructions</label>
                <input class="" type="text" name="instructions">
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