<head>
    <title>Foo News | News about the outer planet</title>
    <link rel="stylesheet" href="http://foonews.local/wp-content/themes/foonews/style.css">
</head>
<body>
    <h1>Latest News</h1>
    <ul class="grid">


    <?php $x = 1; while($x <= 12) : ?>

        <li class="grid-item">
            <article class="card">
                <h2>Post Title</h2>
                <img src="http://placehold.it/300x200">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mi ante, tincidunt eget aliquet eget, consequat ut urna. Nunc nec hendrerit ligula. 
                </p>
                <a>Read More</a>
            </article>
        </li>

    <?php $x++; endwhile ?>

    </ul>
</body>