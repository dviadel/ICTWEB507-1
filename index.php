<html>
    <head>
        <title>Tab Title</title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
    </head>
    <body>
        <h1>latest News</h1>
        <ul>
            <? while (have_posts()) : the_post(); ?>
                <li><? the_title() ?>
                <? the_post_thumbnail(); ?>
                <? the_content() ?>
                </li>
            <? endwhile ?>
        </ul>
    </body>
</html>