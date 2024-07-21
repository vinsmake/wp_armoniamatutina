<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body>

<header>
    <h1>Desde header</h1>

    <?php
    $args = array(
        'theme_location' => 'navbar',
        'container' => 'nav',
        'container_class' => 'navbar'
    );
    wp_nav_menu($args);
    ?>

</header>