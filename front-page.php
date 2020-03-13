<?php get_header(); ?>

<main>
    <h1 class="siteTitle"><?php echo get_bloginfo('description'); ?></h1>
    <?php get_template_part('includes/section', 'content'); ?>
</main>

<?php get_footer(); ?>