<head>
    <title>Foo News | News about the outer planet</title>
    <link rel="stylesheet" href="http://foonews.local/wp-content/themes/foonews/style.css">
</head>
<body>
    <h1>Latest News</h1>
    <ul class="grid">


    <?php while(have_posts()) : the_post(); ?>

        <li class="grid-item">
            <article class="card">
                <h2><?php the_title() ?></h2>
                <?php the_post_thumbnail('thumbnail'); ?>
                <p>
                    <?php the_content() ?> 
                </p>
                <a>Read More</a>
            </article>
        </li>

    <?php endwhile ?>

    </ul>
</body>