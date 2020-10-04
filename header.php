<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php the_title('<title>', '</title>') ?>
    <meta name="description" content="<?php the_excerpt(); ?>" />
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">

<div class="section__container">
    <h1 class="header__title"><a  href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <h3 class="header__description"><?php bloginfo( 'description' ); ?></h3>
    <div class="header__bar"></div>
    <nav class="header__menu">
        <?php
            wp_nav_menu( array( 
                'theme_location' => 'topmenu', 
                'container_class' => 'topmenu' ) ); 
            ?>
    </nav>
</div>
<?php 
if(!is_home() || !is_singular()) {
    the_title();
} else {
    echo "sfsdf";
}

?>
</header>