<?php

//on récupère les magasins dans le post-type 'store' et on définit l'affichage à 3 max
$store_query = new WP_Query([
    'post_type' => 'store',
    'posts_per_page' => -1
]);

//on récupère les produits dans le post-type 'product' et on définit l'affichage à 3 max
$tee_shirts = new WP_Query([
    'post_type' => 'product',
    'posts_per_page' => 3
]);

//on récupère les articles dans le post-type 'post' et on définit l'affichage à 3 max
$articles = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 3
]);

//on récupère le slider dans le post-type 'slider' et on définit l'affichage à 3 max
$slider = new WP_Query([
    'post_type' => 'slider',
    'posts_per_page' => -1
]);

//affichage du header
get_header(); ?>


    <div class="container-fluid">
        <div class="row">

            <div class="slide">
                <!--        affichage du slider-->
                <?php if ($slider->have_posts()) : while ($slider->have_posts()) : $slider->the_post(); ?>
                    <div class='publicity'
                         style="background-image: url('<?= the_post_thumbnail_url($slider, 'full'); ?>');">
                        gfjgfufucu
                    </div>

                <?php endwhile; else : ?>

                <?php endif; ?>

            </div>

        </div>
    </div>

    <main class="container">

        <!--        affiche du titre de la page et de sa description-->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile; else : ?>

        <?php endif; ?>

        <section class="row">

            <!--            affichage CF titre actu-->
            <h2><?= carbon_get_theme_option('title-actu'); ?></h2>

            <!--            affichage des articles sur 3 colonnes avec image, titre, extrait et un lien-->
            <?php while ($articles->have_posts()) : $articles->the_post(); ?>
                <div class="col-md-4">
                    <div class="m-3 article_bgc">

                        <div class="article_img">
                            <?php the_post_thumbnail('large'); ?>
                        </div>

                        <div>
                            <?php the_title(); ?>
                        </div>

                        <div>
                            <?= (wp_trim_words(get_the_excerpt(), 5, '...')) ?>
                        </div>

                        <div>
                            <a class="article_btn" href="<?php the_permalink(); ?>">Lire la suite</a>
                        </div>

                    </div>
                </div>
            <?php endwhile; ?>

        </section>

        <!--            affichage CF titre magasins-->
        <h2><?= carbon_get_theme_option('title-mag'); ?></h2>

        <section class="row">

            <!--            affichage des magasins sur 3 colonnes avec image, titre...-->
            <?php while ($store_query->have_posts()) : $store_query->the_post(); ?>
                <?php $store_cities = get_the_terms(get_the_ID(), 'city'); ?>
                <div class="col-md-4">
                    <div class="m-3 article_bgc">

                        <div class="article_img">
                            <?php the_post_thumbnail('large'); ?>
                        </div>

                        <div>
                            <?php the_title(); ?>
                        </div>

                        <div>
                            <!--...la boucle pour la taxonomy de la ville du magasin...-->
                            <?php foreach ($store_cities as $store_city) : ?>

                                <a href="<?= get_term_link($store_city); ?>">
                                    <figure>
                                        <div class="etiquette">
                                            <?= $store_city->name; ?>
                                        </div>
                                    </figure>
                                </a>

                            <?php endforeach; ?>
                        </div>

                        <!--                        ...et le lien du magasin-->
                        <div>
                            <a class="article_btn" href="<?php the_permalink(); ?>">Voir plus</a>
                        </div>

                    </div>
                </div>
            <?php endwhile; ?>

        </section>

        <?php wp_reset_postdata(); ?>

        <!--            affichage CF titre produits-->
        <h2><?= carbon_get_theme_option('title-vente'); ?></h2>

        <section class="row">

            <!--            affiche des t-shirts sur 3 colonnes avec image, titre, le prix et le lien-->
            <?php while ($tee_shirts->have_posts()) : $tee_shirts->the_post(); ?>
                <div class="col-md-4">
                    <div class="article_bgc">

                        <div>
                            <div class="article_img">
                                <?php the_post_thumbnail('large'); ?>
                            </div>

                            <div class="product_title">
                                <?php the_title(); ?>
                            </div>

                            <div class="product_price">
                                <?php $product = wc_get_product(get_the_ID()); ?>
                                <h3><?= $product->get_price(); ?> €</h3>
                            </div>

                            <div>
                                <a class="article_btn" href="<?php the_permalink(); ?>">Voir le détail</a>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endwhile; ?>

        </section>

        <?php wp_reset_postdata(); ?>

    </main>

    <!--affichage du footer-->
<?php get_footer(); ?>