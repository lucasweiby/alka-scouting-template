<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php 
    /**
     * Template Name: BE A MODEL
     */
    require 'config/head.php';
?>

<?php get_header(); ?>

<!-- SECURITY MODAL -->

<body class="alka-light-100-bg">
    <?php
        require 'particles/load.php';
        require 'particles/menu.php';
    ?>
    <dialog class="alka-security-modal" id="alka-security-modal">
        <h2>Security Alert</h2>

        <p>This message is important to protect models and aspiring models from online predators.</p>
        <p>
            Please do not respond to anyone claiming to be affiliated with ALKA without alerting an adult and verifying
            their identity first. ALKA Scouting never asks for nude photos or lingerie and does not require any type of
            cash
            payment.
        </p>
        <p>
            <b>Please don't hesitate to contact us if something doesn't feel right.</b>
        </p>

        <button id="closeModal">
            I understood
        </button>
    </dialog>
    <div class="alka-content">
        <div class="alka-beModel">
            <?php while(have_posts()): the_post(); ?>
            <div class="alka-beModel-sidepanel">
                <h1><?php the_title(); ?></h1>
                <h3>Get discovered</h3>
                <div class="alka-beModel-rules">
                    <?php while(have_rows('men')): the_row(); ?>
                    <div class="alka-beModel-rules-men">
                        <b class="alka-beModel-rules-men-title">Men</b>
                        <div>
                            <span>
                                <i>ages :</i> <b><?php the_sub_field('men_ages'); ?></b>
                            </span>
                            <span>
                                <i>height :</i> <b><?php the_sub_field('men_height'); ?></b>
                            </span>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php while(have_rows('women')): the_row(); ?>
                    <div class="alka-beModel-rules-women">
                        <b class="alka-beModel-rules-women-title">Women</b>
                        <div>
                            <span>
                                <i>ages :</i> <b><?php the_sub_field('women_ages'); ?></b>
                            </span>
                            <span>
                                <i>height :</i> <b><?php the_sub_field('women_height'); ?></b>
                            </span>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <div class="alka-beModel-contact">
                    <span>
                        <i>Submissions : </i>
                        <a href="mailto:<?php the_field('submissions'); ?>">
                            <?php the_field('submissions'); ?>
                        </a>
                    </span>
                    <span>
                        <a href="<?php the_field('instagram'); ?>">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </span>
                </div>
            </div>
            <div class="alka-beModel-info">
                <?php the_content(); ?>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>

<?php get_footer(); ?>

</html>