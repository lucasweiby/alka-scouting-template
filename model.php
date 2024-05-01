<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php require 'config/head.php' ?>

<body class="alka-light-100-bg">
    <?php
        require 'particles/load.php';
        require 'particles/menu.php';
    ?>

    <div class="alka-content">
        <?php require 'particles/navbar.php'; ?>

        <div class="alka-model-profile">
            <div class="alka-model-profile-cover" id="cover">
                <div class="alka-model-profile-pic" alka-model-name="Samy"
                    style="background-image: url('assets/img/model-4.jpg')"></div>
                <div class="alka-model-profile-info">
                    <div class="alka-model-profile-info-basic">
                        <span>Samy</span><br />
                        Woman, 18 yo, Guarulhos/SP
                    </div>
                    <ul class="alka-model-profile-info-measurement desktop-only">
                        <li class="alka-model-profile-info-measurement-item">
                            180 CM — 5'11" : <span>height</span>
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            79 CM — 31" : <span>chest</span>
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            65 CM — 25" 1/2 : <span>waist</span>
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            88 CM — 34" 1/2 : <span>hips</span>
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            hazel : <span>eyes</span>
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            40 — 6 1/2 : <span>shoes</span>
                        </li>
                    </ul>

                    <ul class="alka-model-profile-info-measurement mobile-only">
                        <li class="alka-model-profile-info-measurement-item">
                            <span>height</span> : 180 CM — 5'11"
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            <span>chest</span> : 79 CM — 31"
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            <span>waist</span> : 65 CM — 25" 1/2
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            <span>hips</span> : 88 CM — 34" 1/2
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            <span>eyes</span> : hazel
                        </li>
                        <li class="alka-model-profile-info-measurement-item">
                            <span>shoes</span> : 40 — 6 1/2
                        </li>
                    </ul>

                    <div class="alka-model-links">
                        <a href="#book">Book</a>
                        <a href="#portfolio">Portfolio</a>
                    </div>
                </div>
            </div>

            <div class="alka-model-book" id="book">
                <h1 class="alka-model-book-title">Book</h1>
            </div>
        </div>
    </div>
</body>

<footer>
    <?php require 'config/scripts.php' ?>
</footer>

</html>