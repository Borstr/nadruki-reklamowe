<ul class="postlist">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <li class="postlist__post">
            <a  class="postlist__link" href="<?php the_permalink(); ?>">
                <div class="postlist__imageContainer">
                    <?php the_post_thumbnail(); ?>
                </div>
                <p class="postlist__details"><?php the_date();?></p>
                <h3 class="postlist__title"><?php the_title(); ?></h3>
            </a>
        </li>
    <?php endwhile; else: endif; ?>
</ul>