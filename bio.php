<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php 
    /**
     * Template Name: BIO
     */
    require 'config/head.php';
    require 'particles/load.php';
    require 'particles/menu.php';
?>

<?php get_header(); ?>

<body class="alka-light-100-bg">

    <div class="alka-content">
        <div class="alka-bio">
            <div class="alka-bio-desc p-4">
                <!-- <img class="alka-bio-gif" src="https://media.tenor.com/nEoz_3Q6_1YAAAAi/hourglass-time.gif" alt="Hourglass gif"> -->
                <h1 class="alka-title alka-bio-title mb-4">About us</h1>
                <div class="alka-bio-info ms-2">
                    <?php while(have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                    <div class="alka-bio-info-contact">
                        <span>
                            <i>Contact</i> :
                            <a href="mailto:alka@alkascouting.com">
                                <?php the_field('submissions'); ?>
                            </a>
                        </span>
                        <span>
                            <i>Phone</i> :
                            <a href="tel:<?php the_field('phone'); ?>">
                                <?php the_field('phone'); ?>
                            </a>
                        </span>
                        <span>
                            <?php if(get_field('instagram')): ?>
                            <a href="<?php the_field('instagram'); ?>">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="alka-bio-founder alka-dark-100-bg p-5">
                <h1 class="alka-title-light">Meet the founder</h1>
                <img class="alka-bio-founder-pic" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" srcset="">
                <div class="alka-bio-founder-info">
                    <span class="alka-bio-founder-info-name">Marcelo Alkamin</span>
                    <span class="alka-bio-founder-info-position">Founder | Manager</span>
                    <span class="alka-bio-founder-info-location">São Paulo/SP - Brazil</span>
                    <div class="alka-bio-founder-info-links">
                        <?php if(get_field('founder_email')): ?>
                        <a href="<?php the_field('founder_email'); ?>">
                            <i class="fa-regular fa-envelope"></i>
                        </a>
                        <?php endif; ?>
                        <?php if(get_field('instagram_founder')): ?>
                        <a href="<?php the_field('instagram_founder'); ?>">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php
                    endwhile;
            ?>
        </div>
    </div>
</body>

<?php get_footer(); ?>

</html>