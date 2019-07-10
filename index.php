<h1><?php 
$temp_hello = get_hello('John') 
?></h1>

<ul>
<?php while (have_posts()) : the_post(); ?>
    <li>
        <?php get_title() ?>
        <?php the_excerpt() ?>
    </li>
<?php endwhile ?>
</ul>

