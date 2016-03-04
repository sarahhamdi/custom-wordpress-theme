<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<header>
    <?php 

        include 'header-nav.php';

    ?>
</header>

<div class="left">

    <?php hackeryou_posted_on(); ?>
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php wp_nav_menu(array(
        'theme_location' => 'social'
      )) ?>

</div>

<div class="right">
    <?php the_content(); ?>
    <?php previous_post_link('%link', '&larr; %title'); ?>
    <?php next_post_link('&rarr;'); ?>
    <p><?php edit_post_link( 'Edit This Post', '<span class="edit-link">', '</span>' ); ?></p>
    <?php comments_template( '', true ); ?>
</div>

<?php endwhile; // end of the loop. ?>
<?php include 'footer-credits.php'; ?>
<?php get_footer(); ?>