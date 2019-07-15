<h1>latest News</h1>
<ul>
	<? while (have_posts()) : the_post(); ?>
        <li><? the_title() ?></li>
        <? the_content() ?>
	<? endwhile ?>
</ul>

