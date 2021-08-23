<?php
// Template Name: Contact

get_header();

?>

<main class="container">
    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

    <address>

        <a href="<?= carbon_get_theme_option('adress'); ?>">
            <?= carbon_get_theme_option('adress'); ?></a><br>

        <a href="tel:<?= carbon_get_theme_option('phone'); ?>">
            <?= carbon_get_theme_option('phone'); ?></a><br>

        <a href="mailto:<?= carbon_get_theme_option('email'); ?>">
            <?= carbon_get_theme_option('email'); ?></a>;

    </address>

</main>

<?php get_footer(); ?>