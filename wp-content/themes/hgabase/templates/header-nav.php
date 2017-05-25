<nav aria-label="Global Navigation" class="clearfix" itemscope itemtype="http://schema.org/SiteNavigationElement">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target="#masthead-navbar-collapse" type="button">
				<span class="sr-only">Navigation</span>
				<span id="top-bar" class="icon-bar white"></span>
				<span id="mid-bar" class="icon-bar white"></span>
				<span id="btm-bar" class="icon-bar white"></span>
			</button>
		</div>
		<?php
		if(has_nav_menu('primary'))
			wp_nav_menu(
				array(
					'theme_location' 	=> 'primary',
					'menu_class'		=> 'nav navbar-nav menu pull-right clearfix',
					'link_before' 		=> '<span itemprop="name">',
					'link_after' 		=> '</span>',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'masthead-navbar-collapse',
					'fallback_cb'   	=> 'wp_bootstrap_navwalker::fallback',
					'walker'            => new wp_bootstrap_navwalker()
				)
			);
		?>
	</div>
</nav>
