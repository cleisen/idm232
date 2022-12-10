<?php

include_once __DIR__ . '/../app.php';


$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $recipe variable;
    $recipe = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
    // redirect_to('/admin/recipes?error=' . $error_message);
}

$page_title = 'Recipe Details';
include_once __DIR__ . '/../_components/header.php';
?>
<?php
     $site_url = site_url();
     echo "
        <div class = 'main'>
            <div class = 'top'>
                <div class= 'info__card'>
                    <div class= 'recipe__title'>
                    {$recipe['recipe_title']}
                    </div>

                    </div>
                    <div>
                    <img class= 'recipe__image' src= '{$site_url}/{$recipe['file_path']}'>
                    </div>
                    </div>
                    <div class= 'info'>
                        <ul>
                            <li>{$recipe['introduction']}</li>
                        </ul>
                    </div>
            <div class= 'ingredient__section'>
                <div class= 'center__card'>
                    <div class= 'center__subtitle'>
                        Ingredients
                    </div>
                    <div class= 'ingredients'>
                            <li>{$recipe['ingredients']}</li>
                    </div>
                </div>
            </div>
            <div class= 'direction__section'>
                <div class= 'center__subtitle'>
                    Instructions
                </div>
                <div class= 'center__content'>
                    <div class= 'directions'>
                        {$recipe['instructions']}
                    </div>
                </div>
                <div class= 'closing__phrase'>
                    <hr><div class= 'center__subtitle enjoy'>enjoy!</div><hr>
                </div>
            </div>
        </div>
";
?>
<?php include_once __DIR__ . '/../_components/footer.php';
?>