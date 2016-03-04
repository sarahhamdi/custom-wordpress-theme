<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


<header style="background: url(<?php echo hackeryou_get_thumbnail_url($post) ?> ) fixed; background-position: center; background-size: cover">
	<?php

	/*
		Template Name: Full Page, With Sidebar
	*/

		include 'header-nav.php';
		include 'header-sub.php';
		
	  ?>
</header>



<main>
	<?php the_content(); ?>

	<div class="edit-content">
		<p><?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?></p>
	</div>
	
	<aside class="comments">
		<?php comments_template( '', true ); ?>
	</aside>

</main>

<aside>
	<?php get_sidebar(); ?>
</aside>


<?php get_footer(); ?>

<?php endwhile; // end of the loop. ?>
