<?php
/*
|--------------------------------------------------------------------------
| Footer.php
|--------------------------------------------------------------------------
|
| This file contains the code for our main theme footer, which is displayed
| at the bottom of every webpage.
|
| @since 1.0.0
*/
?>
	<footer class="footer clearfix" id="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="sm12">
					<p class="copyright pull-left">
						Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.  All rights reserved.
					</p>
					<ul class="list-inline pull-right">
						<li><a href="">Sitemap</a></li>
						<li><a href="">Terms</a></li>
						<li><a href="">Privacy</a></li>
						<li><a href="">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer() ?>
</body>
</html>
