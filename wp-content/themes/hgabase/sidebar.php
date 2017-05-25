<?php
/*
|--------------------------------------------------------------------------
| Sidebar.php
|--------------------------------------------------------------------------
|
| This file handles displaying our sidebar.  Specific sidebars can be made
| and referenced using the sidebar-{name}.php structure.  If the theme has
| been configured to use widgets, they can be called from within here.
|
| @since 1.0.0
*/
?>
<aside class="sidebar sm3" role="complementary">
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1')) ?>
	</div>
</aside>
