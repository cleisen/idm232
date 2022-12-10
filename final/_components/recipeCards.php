<?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>    
<div class="recipes-container">      
<?php
    $site_url = site_url();
    while ($recipes = mysqli_fetch_array($result)) {
        echo "
        <a href='{$site_url}/recipe/index.php?id={$recipes['id']}' class=''>
            <div class='recipe-card'>
            <img class='recipe-card-img' width='100px' height='100px' src='{$recipes['file_path']}' alt=''>                
                <div class=''>
                    <p class='recipe-card-title'>{$recipes['recipe_title']}</p>
                </div> 
            </div>
        </a>    
        ";
    }
?>
</div>