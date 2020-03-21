<ul class="postlist">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <li class="postlist__post">
            <a  class="postlist__link" href="<?php the_permalink(); ?>">
                <div class="postlist__imageContainer">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="postlist__info">
                    <h3 class="postlist__title"><?php the_title(); ?></h3>
                    <p class="postlist__excerpt"><?php the_excerpt(); ?></p>
                </div>
            </a>
        </li>
    <?php endwhile; else: endif; ?>
</ul>