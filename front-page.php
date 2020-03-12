<?php get_header(); ?>

<div style="height: 200vh;">
    <h1><?php the_title(); ?></h1>
    <?php get_template_part('includes/section', 'content'); ?>
</div>

<?php get_footer(); ?>