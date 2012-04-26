		<div id="secondary" class="span widget-area" role="complementary">
			<?php do_action( 'before_sidebar' ); ?>
			<aside class="social-widget widget">
				<ul>
					<li><a href="<?php echo home_url( '/feed' ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/rss.png" alt="rss" width="32" height="32" /></a></li>
					<li><a href="https://twitter.com/#!/kobe_it_fes"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/twitter.png" alt="twitter" width="32" height="32" /></a></li>
					<li><a href="https://www.facebook.com/kobe.it.fes"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facebook.png" alt="facebook" width="32" height="32" /></a></li>
				</ul>
			</aside>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
			<aside class="site-2011">
				<a href="http://s2011.kobe-it-fes.org"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/goto2011.png" alt="第1回 神戸ITフェスWebサイトへ" width="280" height="52" /></a>
			</aside>
			<aside class="facebook-likebox">
				<div class="fb-like-box" data-href="https://www.facebook.com/kobe.it.fes" data-width="280" data-show-faces="true" data-stream="false" data-header="true"></div>
			</aside>
		</div><!-- #secondary .widget-area -->