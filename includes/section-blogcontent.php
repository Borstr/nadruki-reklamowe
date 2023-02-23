
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article class="postcontent">
        <h1><?php the_title(); ?></h1>
        <span class="postcontent__details"><?php the_date(); ?></span>
        <?php the_content(); ?>
    </article>
<?php endwhile; else: endif; ?>