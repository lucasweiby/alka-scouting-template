<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->

<?php
    /**
     * Template Name: HOME
     */
    require 'config/head.php';
    include 'particles/load.php';
?>

<body>
    <section class="alka-home" style="display: none;">
        <div class="alka-home-navigation">
            <?php require 'particles/logo-home.php'; ?>

            <!-- <ul class="alka-home-navigation-list">
                <li class="alka-home-navigation-item">
                    <a href="bio.php" class="alka-home-navigation-link">Bio</a>
                </li>
                <li class="alka-home-navigation-item">
                    <a href="models.php" class="alka-home-navigation-link">Models</a>
                </li>
                <li class="alka-home-navigation-item">
                    <a href="be_a_model.php" class="alka-home-navigation-link">Be a Model</a>
                </li>
            </ul> -->

            <?php
                wp_nav_menu( array(
                    'theme_location' => 'main_menu'
                ));
            ?>
        </div>
        <!--<div class="alka-home-img"></div>-->

    </section>
</body>

<?php get_footer(); ?>

</html>