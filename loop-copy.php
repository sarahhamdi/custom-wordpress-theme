<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Nothing To See Here</h1>
		<section class="entry-content">
			<p>So sorry. Why don't you go <a href="<?php echo get_home_url() ?>">home</a> now.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

	<article>
		<!-- <pre> -->
			<a href="<?php the_permalink() ?>">
				<img src="<?php echo hackeryou_get_thumbnail_url( $post ) ?>" alt="">
			</a>
		<!-- </pre> -->

		<h2>
			<a href="<?php the_permalink() ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<h3> By <!-- <a href="<?php the_author_link() ?>"> -->
				<Strong><?php the_author(); ?> </strong><!-- </a>  -->| <?php the_date('M. d, Y'); ?>
		</h3>
		<?php the_excerpt(); ?>
		
			
		
	</article>

<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
