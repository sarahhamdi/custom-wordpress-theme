  <div class="header-menu-primary">

  <div class="logo">
  	<a href='<?php home_url() ?>'><img src="<?php bloginfo(template_directory) ?>/images/logo.svg" alt=""></a>
  </div>
	
	<div class="nav">
		<?php wp_nav_menu( array(
		  'container' => false,
		  'theme_location' => 'primary'
		)); ?>

	</div>
  

</div>