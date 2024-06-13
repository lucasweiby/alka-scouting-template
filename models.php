<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php 
    /**
     * Template Name: MODELS
     */
    require 'config/head.php';
    require 'particles/load.php';
    require 'particles/menu.php';

    $args = array(
        'post_type'         => 'post',
        'posts_per_page'    => '-1',
        'orderby'           => 'title',
        'order'             => 'ASC'
    ); 

    $argsDev = array (
        'post_type'         => 'development',
        'posts_per_page'    => '-1',
        'orderby'           => 'title',
        'order'             => 'ASC'
    );

    $models = new WP_Query($args);
    $development = new WP_Query($argsDev);
?>

<?php get_header(); ?>

<body class="alka-light-100-bg">

    <div class="alka-content">
        <div class="alka-models">
            <div class="alka-models-navigation">
                <ul class="alka-models-navigation-tabs">
                    <li class="alka-models-navigation-tab active" onclick="openTab(event, 'models')" id="defaultOpen">
                        ALKA MODELS
                    </li>
                    <li class="alka-models-navigation-tab" onclick="openTab(event, 'development')">
                        ALKA NEWS
                    </li>
                </ul>
            </div>
            <ul class="alka-models-list tabcontent" id="models">
                <?php 
                    if($models->have_posts() ) : 
                        while ( $models->have_posts() ) : 
                           $models->the_post();
                ?>
                <li class="alka-models-item" alka-model-name="<?php the_title() ?>"
                    onclick="location.href='<?php the_permalink(); ?>';">
                    <img class="alka-models-item-img" src="<?php the_post_thumbnail_url() ?>"
                        alt="<?php the_title() ?>">
                </li>
                <?php 
                    endwhile; 
                    wp_reset_postdata(); 
                endif;
                ?>
                <li class="alka-models-item last-one">
                    <img class="alka-models-item-img"
                        src="<?php bloginfo('template_url') ?>/assets/img/hourglass-time.gif" />
                </li>
            </ul>

            <?php if($development->have_posts()) : ?>
            <ul class="alka-models-list tabcontent" id="development">
                <?php
                        while ( $development->have_posts() ) : 
                            $development->the_post();
                    ?>
                <li class="alka-models-item" alka-model-name="<?php the_title() ?>"
                    onclick="location.href='<?php the_permalink(); ?>';">
                    <img class="alka-models-item-img" src="<?php the_post_thumbnail_url() ?>"
                        alt="<?php the_title() ?>">
                </li>
                <?php
                        endwhile; 
                        wp_reset_postdata(); 
                    ?>
                <li class="alka-models-item last-one">
                    <img class="alka-models-item-img"
                        src="<?php bloginfo('template_url') ?>/assets/img/hourglass-time.gif" />
                </li>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</body>

<footer>
    <?php require 'config/scripts.php'; ?>
</footer>

</html>