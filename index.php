<head>
    <title>Foo News | News about the outer planet</title>
</head>
<body>
    <h1>Latest News</h1>
    <ul class="naked-list">

    <?php $x = 1; while($x <= 12) { ?>

        <li>
            <article class="card">
                <h2>Post Title</h2>
                <img src="http://placehold.it/300x200">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mi ante, tincidunt eget aliquet eget, consequat ut urna. Nunc nec hendrerit ligula. 
                </p>
                <a>Read More</a>
            </article>
        </li>

    <?php $x++; } ?>

    </ul>
</body>