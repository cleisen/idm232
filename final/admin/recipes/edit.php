<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Edit Recipe';
include_once __DIR__ . '/../../_components/header.php';
?>

<?php
// get users data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $user variable;
    $user = mysqli_fetch_assoc($result);
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
                <label for="">Recipe Name</label>
                <input type="text" name="recipe_name"
                  value="<?php echo $user['recipe_name']; ?>">
              </div>

              <div class="block">
                <label for="">Difficulty Level</label>
                <input type="text" name="difficulty"
                  value="<?php echo $user['difficulty']; ?>">
              </div>


              <div class=" block">
                <label for="">Prep Time</label>
                <input type="text" name="prep_time" 
                    value="<?php echo $user['prep_time']; ?>">
              </div>
              <div class=" block">
                <label for="">Cook Time</label>
                <input type="text" name="cook_time" 
                    value="<?php echo $user['cook_time']; ?>">
              </div>
              <div class=" block">
                <label for="">Directions</label>
                <input type="text" name="directions" 
                    value="<?php echo $user['directions']; ?>">
              </div>
              <input type="submit" value="Update">

              <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';