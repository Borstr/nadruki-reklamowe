<ul class="postlist">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <li>
            <a href="<?php the_permalink(); ?>">
                <div class="postlist__imageContainer">
                    <?php the_post_thumbnail(); ?>
                </div>
                <h3 class="postlist__title"><?php the_title(); ?></h3>
                <p class="postlist__excerpt"><?php the_excerpt(); ?></p>
            </a>
        </li>
    <?php endwhile; else: endif; ?>
</ul>