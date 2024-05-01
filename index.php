<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php require 'config/head.php' ?>

<body>
    <?php include 'particles/load.php'; ?>

    <section class="alka-home" style="display: none;">
        <div class="alka-home-navigation">
            <?php require 'particles/logo-home.php'; ?>

            <ul class="alka-home-navigation-list">
                <li class="alka-home-navigation-item">
                    <a href="bio.php" class="alka-home-navigation-link">Bio</a>
                </li>
                <li class="alka-home-navigation-item">
                    <a href="models.php" class="alka-home-navigation-link">Models</a>
                </li>
                <li class="alka-home-navigation-item">
                    <a href="be_a_model.php" class="alka-home-navigation-link">Be a Model</a>
                </li>
            </ul>
        </div>
        <div class="alka-home-img"></div>
    </section>
</body>

<footer>
    <?php require 'config/scripts.php' ?>
</footer>

</html>