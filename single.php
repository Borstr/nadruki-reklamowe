<?php get_header(); ?>
<main class="single">
    <a href="<?php echo wp_get_referer(); ?>" class="single__link">
        < wróć do poprzedniej strony
    </a>
    <?php get_template_part('/includes/section', 'blogcontent'); ?>
</main>

<?php get_footer(); ?>