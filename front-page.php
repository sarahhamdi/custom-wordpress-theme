<?php get_header(); ?>

<?php //index.php is the last resort template, if no other templates match ?>

<div class="wrapper">

<header>
	<?php 
		include 'header-nav.php';
	 ?>
</header>

<main>
	<div class="container">
		<div class="content--front-page">
			<h1>
				<?php bloginfo( 'name' ); ?>
			</h1>
			<h2>
				<?php bloginfo('description'); ?>
			</h2>
		</div> <!--/.content -->
	</div> <!-- /.container -->
</main> <!-- /.main -->
</div> <!-- /div.wrapper -->

<?php get_footer(); ?>