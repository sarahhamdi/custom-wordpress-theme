<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php

/*
	Template Name: Split Page, No Sidebar
*/

?>

<header>
	<?php 
		include 'header-nav.php';
	 ?>
</header>

<div class="left">

    <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php wp_nav_menu(array(
        'theme_location' => 'social'
      )) ?>

</div>

<div class="right">
    <?php the_content(); ?>
    <p><?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?></p>
    <?php comments_template( '', true ); ?>
</div>

<?php endwhile; // end of the loop. ?>
<?php include 'footer-credits.php'; ?>
<?php get_footer(); ?>

