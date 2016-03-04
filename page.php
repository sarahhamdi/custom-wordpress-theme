<?php get_header();  ?>

<header>
  
  <?php 

    include 'header-nav.php';
    include 'header-sub.php';

   ?>

</header>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2>
            <?php 
              $title = the_title();
              echo $title; 
            ?>
        </h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->
<?php include 'footer-credits.php'; ?>
<?php get_footer(); ?>