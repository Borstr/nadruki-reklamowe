<?php get_header(); ?>

<main class="frontpage">
    <div class="frontpage__topbar">
        <div>
            <h1 class="frontpage__title"><?php echo get_bloginfo('description'); ?></h1>
            <h2 class="frontpage__subtitle">Ostatnie posty:</h2>
        </div>
    </div>
    <?php get_template_part('includes/section', 'content'); ?>
</main>

<?php get_footer(); ?>