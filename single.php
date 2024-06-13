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
            $hasNews = get_field('news');

            $hasCover = get_field('cover');
        ?>
        <div class="alka-model-profile">
            <div class="alka-model-profile-cover" id="cover">
                <div class="alka-model-profile-pic" alka-model-name="<?php the_title(); ?>"
                    style="background-image: url('<?php $hasCover != null && $hasCover != '' ? the_field('cover') : the_post_thumbnail_url(); ?>')">
                </div>
                <div class="alka-model-profile-info">
                    <div class="alka-model-profile-info-basic">
                        <?php
                            function removerAcentos($string) {
                                // Converte os caracteres com acento para seus equivalentes sem acento
                                $semAcentos = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
                                // Remove qualquer caractere especial que possa ter sido gerado pela conversão
                                $semAcentos = preg_replace('/[^a-zA-Z0-9\s]/', '', $semAcentos);
                                return $semAcentos;
                            }

                            $model_name = removerAcentos(get_the_title());
                        ?>

                        <span><?php echo $model_name ?></span><br />
                        <?php while(have_rows('basic_info')): the_row(); ?>
                        <?php 
                            $gender = get_sub_field("gender");
                            echo $gender . ", " . get_sub_field("age") . " yo, " . get_sub_field("location");
                        ?>
                        <?php if(get_sub_field('instagram')): ?>
                        <br><a href="<?php the_sub_field('instagram_link') ?>"
                            target="_blank"><?php the_sub_field('instagram') ?></a>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                    <?php while(have_rows('measurements')): the_row(); ?>
                    <ul class="alka-model-profile-info-measurement desktop-only">
                        <li class="alka-model-profile-info-measurement-item">
                            <?php the_sub_field('height') ?> : <span>height</span>
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            <?php if($gender == "Woman" || $gender == "Non-binary"): ?>
                            <?php the_sub_field('bust') ?> : <span>bust</span>
                            <?php else: ?>
                            <?php the_sub_field('chest') ?> : <span>chest</span>
                            <?php endif; ?>
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            <?php the_sub_field('waist') ?> : <span>waist</span>
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            <?php the_sub_field('hips') ?> : <span>hips</span>
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            <?php the_sub_field('eyes') ?> : <span>eyes</span>
                        </li>
                        <?php if(get_sub_field('shoes')): ?>
                        <li class="alka-model-profile-info-measurement-item">
                            <?php the_sub_field('shoes') ?> : <span>shoes</span>
                        </li>
                        <?php endif; ?>
                    </ul>

                    <ul class="alka-model-profile-info-measurement mobile-only">
                        <li class="alka-model-profile-info-measurement-item">
                            <span>height</span> : <?php the_sub_field('height') ?>
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            <?php if($gender == "Woman" || $gender == "Non-binary"): ?>
                            <span>bust</span> : <?php the_sub_field('bust') ?>
                            <?php else: ?>
                            <span>chest</span> : <?php the_sub_field('chest') ?>
                            <?php endif; ?>
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            <span>waist</span> : <?php the_sub_field('waist') ?>
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            <span>hips</span> : <?php the_sub_field('hips') ?>
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            <span>eyes</span> : <?php the_sub_field('eyes') ?>
                        </li>
                        <?php if(get_sub_field('shoes')): ?>
                        <li class="alka-model-profile-info-measurement-item">
                            <span>shoes</span> : <?php the_sub_field('shoes') ?>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <?php endwhile; ?>

                    <div class="alka-model-profile-info-placement">
                        <h5>Placed</h5>
                        <?php 
                            while(have_rows('basic_info')): the_row();                            
                                if(get_sub_field('placement')):
                                    the_sub_field('placement');
                                endif;
                            endwhile;
                        ?>
                    </div>

                    <div class="alka-model-links">
                        <a href="#portfolio">See more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="alka-model-portfolio" id="portfolio">
                <div class="alka-model-portfolio-navigation">
                    <a href="#cover" class="alka-model-portfolio-btn">
                        <i class="fa-solid fa-arrow-left"></i> Back
                    </a>
                    <ul class="alka-model-portfolio-navigation-tabs">
                        <li class="alka-model-portfolio-navigation-tab">
                            <a href="#portfolio">Portfolio</a>
                        </li>
                        <?php if($hasPolas): ?>
                        <li class="alka-model-portfolio-navigation-tab">
                            <a href="#polas">Polaroids</a>
                        </li>
                        <?php else: ?>
                        <li class="alka-model-portfolio-navigation-tab disabled">
                            <a href="#polas" disabled>Polaroids</a>
                        </li>
                        <?php endif; ?>
                        <?php if($hasVideo): ?>
                        <li class="alka-model-portfolio-navigation-tab">
                            <a href="#video">Video</a>
                        </li>
                        <?php else: ?>
                        <li class="alka-model-portfolio-navigation-tab disabled">
                            <a href="#video" disabled>Video</a>
                        </li>
                        <?php endif; ?>
                        <?php if($hasNews): ?>
                        <li class="alka-model-portfolio-navigation-tab">
                            <a href="#news">News / Runway</a>
                        </li>
                        <?php else: ?>
                        <li class="alka-model-portfolio-navigation-tab disabled">
                            <a href="#news" disabled>News / Runway</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div id="portfolio">
                    <h1 class="alka-model-portfolio-title">Portfolio</h1>
                    <?php the_content(); ?>
                </div>
                <?php if($hasPolas): ?>
                <div id="polas">
                    <h1 class="alka-model-portfolio-title">Polaroids</h1>
                    <?php echo $hasPolas->post_content; ?>
                </div>
                <?php endif; ?>
                <?php if($hasVideo): ?>
                <div id="video">
                    <h1 class="alka-model-portfolio-title">Video</h1>
                    <div class="video-gallery">
                        <?php echo $hasVideo ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($hasNews): ?>
                <div id="news">
                    <h1 class="alka-model-portfolio-title">News / Runway</h1>
                    <?php echo $hasNews->post_content; ?>
                </div>
                <?php endif; ?>
            </div>

        </div>
        <?php endwhile; ?>
    </div>
</body>

<footer>
    <?php require 'config/scripts.php' ?>
</footer>

</html>