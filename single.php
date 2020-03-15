<?php get_header(); ?>

<main class="single">
    <a href="<?php 
        // $url = wp_get_referer(); 
        // $domain = $_SERVER['SERVER_NAME'];
        // $splitDomain =  explode("/", $url)[2];
        // if($splitDomain == $domain) echo wp_get_referer();
        // else echo "/blog";
        echo wp_get_referer();
    ?>" class="single__link">
        < wróć do poprzedniej strony
    </a>
    <?php get_template_part('/includes/section', 'blogcontent'); ?>
</main>

<?php get_footer(); ?>