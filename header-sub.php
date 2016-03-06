<!-- page title -->
<h1 class="entry-title"><?php the_title(); ?></h1>


<div class="header-sub-wrapper">
	<!-- social nav -->
	<?php wp_nav_menu(array(
		'container' => false,
	    'theme_location' => 'social'
	)) ?>

	<!-- // breadcrumbs --> 
	<div class="breadcrumbs">
		
		<?php echo breadcrumbs($post) ?>
	</div>
			

</div>
