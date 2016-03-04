<!-- page title -->
<h1 class="entry-title"><?php the_title(); ?></h1>

<!-- social nav -->
<?php wp_nav_menu(array(
    'theme_location' => 'social'
)) ?>

<!-- // breadcrumbs --> 
<h3>
	<?php echo breadcrumbs($post) ?>
</h3>