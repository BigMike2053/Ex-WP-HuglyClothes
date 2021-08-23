<?php

get_header()

?>

    <!--page unique pour l'affichage d'un magasin avec son image, sa description et sa localisation-->
    <div class="container">
        <div class="row">

            <div class="col-md-6">

                <div class="store_img">
                    <?php the_post_thumbnail('medium_large'); ?>
                </div>

            </div>

            <div class="col-md-6 store_infos">

                <div class="store_title">
                    <?php the_title(); ?>
                </div>


                <div class="store_description">
                    <?php the_content(); ?>
                </div>

                <div class="store_city">
                    <?php $store_cities = get_the_terms(get_the_ID(), 'city'); ?>
                    <?= $store_cities[0]->name ?>
                </div>

            </div>

        </div>
    </div>

<?php

get_footer();


