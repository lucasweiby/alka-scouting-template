<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php require 'config/head.php' ?>

<body class="alka-light-100-bg">
    <?php
        require 'particles/load.php';
        require 'particles/menu.php';
    ?>

    <div class="alka-content">
        <?php require 'particles/navbar.php'; ?>

        <div class="alka-bio">
            <div class="alka-bio-desc p-4">
                <!-- <img class="alka-bio-gif" src="https://media.tenor.com/nEoz_3Q6_1YAAAAi/hourglass-time.gif" alt="Hourglass gif"> -->
                <h1 class="alka-title alka-bio-title alka-font-size-128 mb-4">About us</h1>
                <div class="alka-bio-info ms-2">
                    <p class="alka-text">
                        ALKA Scouting was founded in 2020 by Marcelo Alkamin.
                    </p>

                    <p class="alka-text">
                        ALKA Scouting is a Brazil-based boutique agency dedicated to
                        identifying, developing and sustaining promising talent careers in
                        the fashion world. ALKA Scouting is renowned internationally and
                        has built through the years a network of like- minded and
                        successful associates that enables an offer of seamless global
                        service.
                    </p>

                    <div class="alka-bio-info-contact">
                        <span>
                            <i>Submissions</i> :
                            <a href="mailto:alka@alkascouting.com">alka@alkascouting.com</a>
                        </span>
                        <span>
                            <i>Phone</i> : <a href="tel:+5544998525120">+55 44 998525120</a>
                        </span>
                        <span>
                            <a href="https://www.instagram.com/alkascouting/">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="alka-bio-founder alka-dark-100-bg p-5">
                <h1 class="alka-title-light">Meet the founder</h1>
                <p class="alka-text alka-light-100-color">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti
                    vel, iusto animi vero assumenda repellat! Consectetur quidem
                    voluptatum itaque laboriosam ex magni iusto, cupiditate porro ipsa
                    reprehenderit molestias rem impedit architecto odit recusandae
                    deserunt deleniti saepe numquam distinctio dolore eum omnis mollitia
                    reiciendis. Dicta natus rerum error exercitationem, libero dolor.
                </p>
            </div>
        </div>
    </div>
</body>

<footer>
    <?php require 'config/scripts.php' ?>
</footer>

</html>