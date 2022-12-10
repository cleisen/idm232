<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Edit Recipe';
include_once __DIR__ . '/../../_components/header.php';
?>

<div>
    <?php $title = 'Edit Recipes';?>
    <h1 class="text-center text-dark"><?php echo $title; ?></h1>
</div>

<?php
// get users data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $user variable;
    $recipe = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
    // redirect_to('/admin/users?error=' . $error_message);
}

?>

<div>
  <div>
    <div>
      <div>
        <h1>Edit Recipe</h1>
      </div>
    </div>
    <div>
      <div>
        <div>
          <div>
            <form action="<?php echo site_url(); ?>/_includes/process-edit-recipe.php" method="POST">
              <div class="block">
                <label for="">Recipe Title</label>
                <input type="text" name="recipe_title"
                  value="<?php echo $recipe['recipe_title']?>">
              </div>

              <div class="block">
                <label for="">Image</label>
                <input type="text" name="file_path"
                  value="<?php echo $recipe['file_path']?>">
              </div>


              <div class="block">
                <label for="">Introduction</label>
                <input type="text" name="introduction" 
                    value="<?php echo $recipe['introduction']?>">
              </div>
              <div class="block">
                <label for="">Ingredients</label>
                <input type="text" name="ingredients" 
                    value="<?php echo $recipe['ingredients']?>">
              </div>
              <div class="sblock">
                <label for="">Instructions</label>
                <input type="text" name="instructions" 
                    value="<?php echo $recipe['instructions']?>">
              </div>
              <input type="submit" value="Update">

              <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';