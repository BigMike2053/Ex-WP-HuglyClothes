</main>

<footer>

    <div class="container">
        <div class="row">

            <!--Affichage logo/nom/slogan-->
            <div class="col-md-4">
                <div class="site-logo-container">
                    <?php the_custom_logo() ?>
                    <div>
                        <div>
                            <?php bloginfo('name'); ?>
                        </div>
                        <div>
                            <?php bloginfo('description'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!--Affichage widget navigation-->
            <div class="col-md-4 widget_footer">
                <?php dynamic_sidebar('footer-center'); ?>
            </div>


            <!--Affichage CF contact-->
            <div class="col-md-4">
                <h5>Nous contacter</h5>

                <address>

                    Adresse :
                    <a href="<?= carbon_get_theme_option('adress'); ?>">
                        <?= carbon_get_theme_option('adress'); ?></a><br>

                    Téléphone :
                    <a href="tel:<?= carbon_get_theme_option('phone'); ?>">
                        <?= carbon_get_theme_option('phone'); ?></a><br>

                    Email :
                    <a href="mailto:<?= carbon_get_theme_option('email'); ?>">
                        <?= carbon_get_theme_option('email'); ?></a>

                </address>

            </div>

        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>
