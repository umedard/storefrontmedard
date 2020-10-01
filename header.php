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

<div class="test">t</div>
