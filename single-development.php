<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
    require 'config/head.php';
    require 'particles/load.php';
    require 'particles/menu.php';

    $gender;

    get_header();
?>

<body class="alka-light-100-bg">
    <div class="alka-content">
        <?php while(have_posts()): the_post(); ?>
        <?php
            $hasPolas = get_field('polaroids');
            $hasVideo = get_field('video');
        ?>
        <div class="alka-model-profile">
            <div class="alka-model-profile-container">
                <div class="alka-model-profile-left-side">
                    <div class="alka-model-profile-left-side-content">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <h1 class="alka-model-profile-left-side-title">
                            <?php the_title(); ?>
                        </h1>
                        <p>
                            <?php echo get_field('gender') . ', ' . get_field('age') . 'yo, ' . get_field('height')  ?>
                        </p>
                        <p>
                            <i> <?php the_field('location') ?> </i>
                        </p>
                    </div>
                </div>
                <div class="alka-model-profile-right-side">
                    <ul class="alka-model-profile-right-side-navigation-tabs">
                        <?php if($hasPolas): ?>
                        <li class="alka-model-profile-right-side-navigation-tab">
                            <a href="#polas">Polaroids</a>
                        </li>
                        <?php else: ?>
                        <li class="alka-model-profile-right-side-navigation-tab disabled">
                            <a href="#polas" disabled>Polaroids</a>
                        </li>
                        <?php endif; ?>
                        <?php if($hasVideo): ?>
                        <li class="alka-model-profile-right-side-navigation-tab">
                            <a href="#video">Video</a>
                        </li>
                        <?php else: ?>
                        <li class="alka-model-profile-right-side-navigation-tab disabled">
                            <a href="#video" disabled>Video</a>
                        </li>
                        <?php endif; ?>
                        <?php if(get_the_content()): ?>
                        <li class="alka-model-profile-right-side-navigation-tab">
                            <a href="#portfolio">Development</a>
                        </li>
                        <?php else: ?>
                        <li class="alka-model-profile-right-side-navigation-tab disabled">
                            <a href="#portfolio" disabled>Development</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <?php if($hasPolas): ?>
                    <div id="polas">
                        <h1>Polaroids</h1>
                        <?php echo $hasPolas->post_content; ?>
                    </div>
                    <?php endif; ?>
                    <?php if($hasVideo): ?>
                    <div id="video">
                        <h1>Video</h1>
                        <div class="video-gallery">
                            <?php echo $hasVideo ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div id="portfolio">
                        <h1>Development</h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</body>

<footer>
    <?php require 'config/scripts.php' ?>
</footer>

</html>