<?php

include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';

?>


<main>
    <section class="top">

        <div class="info__card">
            <div class="recipe__title">
            Broccoli and Chicken Stir-Fry
            </div>

            <div class="info">
                <ul>
                    <li>Difficulty: 
                        <span class="dot__filled"></span>
                        <span class="dot__filled"></span>
                        <span class="dot__empty"></span>
                        <span class="dot__empty"></span>
                        <span class="dot__empty"></span>
                    </li>
                    <li>Time to Prep: <span>15 mins</span></li>
                    <li>Time to Cook: <span>20 mins</span></li>
                    <li>Total Time: <span>35 mins</span></li>
                </ul>
            </div>
        </div>

        <div>
            <img src="<?php echo site_url() . '/images/broccoli-and-chicken.png' ?>" class="recipe__image">
        </div>

    </section>


    <section class="ingredient__section">

        <div class="center__card">
            <div class="center__subtitle">
                Ingredients
            </div>

            <div class="ingredients">
                <div class="col__1 left">
                    <li><input type = "checkbox" class="check"> 2/3 cup <span>soy sauce</span></li>
                    <li><input type = "checkbox" class="check"> 1/4 cup <span>brown sugar</span></li>
                    <li><input type = "checkbox" class="check"> 1/2 teaspoon <span>ground ginger</span></li>
                    <li><input type = "checkbox" class="check"> 1 pinch <span>red pepper flakes</span>, or to taste</li>
                    <li><input type = "checkbox" class="check"> 2 tablespoons <span>water</span></li>
                </div>

                <div class="col__1 right">
                    <ul>
                        <li><input type = "checkbox" class="check"> 2 teaspoons <span>vegetable oil</span>, or to taste</li>
                        <li><input type = "checkbox" class="check"> 3 skinless, <span>boneless chicken breast</span> halves, cut into chunks</li>
                        <li><input type = "checkbox" class="check"> 1 <span>onion</span>, sliced</li>
                        <li><input type = "checkbox" class="check"> 3 cups <span>broccoli florets</span></li>
                        <li><input type = "checkbox" class="check"> 2 tablespoons <span>cornstarch</span></li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <section class="direction__section">

        <div class="center__subtitle">
            Directions
        </div>

        <div class="center__content">
            <div class="step">
                <div class="step__title">
                    Step 1
                </div>
                <div class="directions">
                Stir <span>soy sauce</span>, <span>brown sugar</span>, <span>ginger</span>, and 
                <span>red pepper flakes</span> together in a bowl to 
                dissolve sugar into the liquid. Mix <span>water</span> 
                and <span>cornstarch</span> together in a small bowl; 
                stir with a whisk until <span>cornstarch</span> dissolves completely.
                </div>
            </div>

            <div class="step">
                <div class="step__title">
                    Step 2
                </div>
                <div class="directions">
                Heat <span>oil</span> in a large skillet over high heat. 
                Fry <span>chicken</span> and <span>onion</span> in hot <span>oil</span> until the 
                <span>chicken</span> is no longer pink in the center and 
                the <span>onion</span> is tender, 5 to 7 minutes. Stir in 
                <span>broccoli</span> with <span>chicken</span> and <span>onion</span>; sauté until 
                <span>broccoli</span> is hot, about 5 minutes. Push the 
                chicken and vegetable mixture to the side of the skillet.
                </div>
            </div>

            <div class="step">
                <div class="step__title">
                    Step 3
                </div>
                <div class="directions">
                Pour the <span>soy sauce</span> mixture into the vacant 
                part of the skillet. Stir the <span>cornstarch</span> 
                slurry into the <span>soy sauce</span> mixture until 
                the color is consistent. Move the <span>chicken</span> 
                and vegetables back into the center of 
                the pan; sauté until the sauce thickens 
                and coats the <span>chicken</span> and vegetables, about 5 minutes more.
                </div>
            </div>
        </div>

        <div class="closing__phrase">
            <hr><div class="center__subtitle enjoy">enjoy!</div><hr>
        </div>

    </section>

</main>

<?php include_once __DIR__ . '/_components/footer.php';
?>