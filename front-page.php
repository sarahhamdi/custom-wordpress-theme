<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php //index.php is the last resort template, if no other templates match ?>

<div class="wrapper" style="background: url(<?php the_field('homepage_background_image'); ?>);
		background-position: 10% 50%; /* image centered on screen */
		background-size: cover;
	    height: 100vh; ">

<header>
	<?php 
		include 'header-nav.php';
	 ?>
</header>

<main>

	<div class="container">
		<div class="content--front-page">
			<h1 >
				
				<span style="background-color: black; background-image: url(<?php the_field('text_background_image'); ?>); background-position: center; background-size: cover;background-size: cover;
		  background-position: center;
		  -webkit-background-clip: text;
		  display:block;
		  width: 100%;
		  height: 100%; background-attachment: fixed;"><?php bloginfo( 'name' ); ?></span>

			</h1>
			<h2>
				<?php bloginfo('description'); ?>
			</h2>			

		</div> <!--/.content -->
	</div> <!-- /.container -->
</main> <!-- /.main -->

</div> <!-- /div.wrapper -->
<?php endwhile; // end the loop?>
<?php get_footer(); ?>