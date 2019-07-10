<ul>
<?php while (have_posts()) : the_post(); ?>
    <li>
        <?php get_title() ?>
        <?php the_excerpt() ?>
    </li>
<?php endwhile ?>
</ul>

