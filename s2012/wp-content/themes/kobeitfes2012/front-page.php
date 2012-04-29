<?php
if ( function_exists('get_image') ) $visual = get_image( 'visual' );

get_header(); ?>

	<?php if ( $visual ) : ?><div class="visual"><?php echo $visual; ?></div><?php endif; ?>

	<div id="content" class="row">
		<div id="primary" class="span" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'front-page' ); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #primary -->
		
		<?php get_sidebar(); ?>
	
	</div><!-- #content -->

<?php get_footer(); ?>