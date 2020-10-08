<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php the_excerpt(); ?>" />
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<div class="overlay">
    <div class="mobile-menuu">    overlat
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta quidem praesentium quae, delectus neque a atque commodi voluptatum quis repudiandae laborum, quo recusandae ab non fugiat eligendi nulla rerum omnis.
</div>
</div>
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
if(get_query_var('cat') || get_query_var('tag')) {
    echo '<div class="header__categories"><p>';
    single_term_title(  );
    echo '</p></div>';
}

?>

</header>
