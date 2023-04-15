<?php	get_header(); ?>
<div class="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<?php the_content('<br /><br />Continue Reading &raquo;'); ?>
	<?php endwhile; ?>

	<?php else : ?>
		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
	<?php endif; ?>
</div>

<?php	get_footer(); ?>
