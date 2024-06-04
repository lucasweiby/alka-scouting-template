<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php bloginfo('name'); ?>

        <?php
            /* Verifica se estamos em uma página do WordPress */
            if (is_page() || is_single()) {
                /* Adiciona o título da página à tag <title> */
                echo ' | ' . get_the_title();
            }
        ?>
    </title>

    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php bloginfo('template_url') ?>/assets/img/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php bloginfo('template_url') ?>/assets/img/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php bloginfo('template_url') ?>/assets/img/favicon/favicon-16x16.png" />
    <link rel="manifest" href="<?php bloginfo('template_url') ?>/assets/img/favicon/site.webmanifest" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/main.css" />
</head>