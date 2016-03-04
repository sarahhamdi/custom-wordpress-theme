<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


<div class="header" style="background-image: url(<?php echo hackeryou_get_thumbnail_url($post) ?>)">>
	<?php

	/*
		Template Name: Full Page, No Sidebar
	*/

	get_header();  ?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php wp_nav_menu(array(
	    'theme_location' => 'social'
	)) ?>

</div>



<main>
	<?php the_content(); ?>

	<div class="edit-content">
		<p><?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?></p>
	</div>
	
	<aside class="comments">
		<?php comments_template( '', true ); ?>
	</aside>

</main>



<?php get_footer(); ?>

<?php endwhile; // end of the loop. ?>
