<?php //index.php is the last resort template, if no other templates match ?>

<div class="header" style="background-image: url(<?php echo hackeryou_get_thumbnail_url($single_post) ?>)">>

	<?php get_header(); ?>
	<h1 class="entry-title"><?php echo single_post_title(); ?></h1>
	<?php wp_nav_menu(array(
	    'theme_location' => 'social'
	)) ?>

</div>


		
<main>


			<?php get_template_part( 'loop-copy', 'index' );	?>

</main>

<?php get_footer(); ?>