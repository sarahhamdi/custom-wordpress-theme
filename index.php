<?php get_header(); ?>

<?php //index.php is the last resort template, if no other templates match ?>

<!-- gets the header image for this index.php page specifically, because index.php does not act the same as the other pages. is used below to generate dynamic bg image in div.header -->
<?php 
$imageID = get_post_thumbnail_id(17);
$imageURL = wp_get_attachment_url($imageID);
 ?>

<!-- HEADER -->
<header style="background: url(<?php echo $imageURL ?>) fixed; background-position: center; background-size: cover">
	
	<?php 

	include 'header-nav.php';

	 ?>
	
	<h1><?php echo single_post_title(); ?></h1>
	<div class="header-sub-wrapper">

	<!-- social -->
	<?php wp_nav_menu(array(
	    'theme_location' => 'social'
	)) ?>

	<!-- breadcrumbs -->
	<p><a href=" <?php echo get_page_link(get_option('page_for_posts')) ?> "><?php echo single_post_title(); ?></a> / 
	<a href=" <?php echo home_url(); ?> ">Home</a></p>
	
	</div>
</header>

<!-- MAIN CONTENT -->
<main>
	<?php get_template_part( 'loop-copy', 'index' ); ?>  
</main>

<?php get_footer(); ?>