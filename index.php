<ul>
<?php while (have_posts()) : the_post(); ?>
    <li><?php get_title() ?></li>
<?php endwhile ?>
</ul>

