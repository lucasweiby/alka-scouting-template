<!DOCTYPE html>
<html lang="en">

<?php require 'config/head.php'; ?>

<body class="alka-light-100-bg">
    <?php
        require 'particles/load.php';
        require 'particles/menu.php';
    ?>

    <div class="alka-content">
        <?php require 'particles/navbar.php'; ?>

        <div class="alka-models">
            <ul class="alka-models-list">
                <li class="alka-models-item" alka-model-name="Joana da Silva"
                    style="background-image: url('assets/img/model-1.jpg')"></li>
                <li class="alka-models-item" alka-model-name="Matheus Cardoso"
                    style="background-image: url('assets/img/model-2.jpg')"></li>
                <li class="alka-models-item" alka-model-name="Samy"
                    style="background-image: url('assets/img/model-4.jpg')"
                    onclick="window.location.href = 'model.php'"></li>
                <li class="alka-models-item" alka-model-name="Roberto Passos"
                    style="background-image: url('assets/img/model-3.jpg')"></li>
            </ul>
        </div>
    </div>
</body>

<footer>
    <?php require 'config/scripts.php'; ?>
</footer>

</html>