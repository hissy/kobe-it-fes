<?php
$visual = get_post_meta( get_the_ID(), 'visual', true );

get_header(); ?>

	<div id="content" class="row">
		<div id="primary" class="span" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php get_template_part( 'content', 'single' ); ?>
				
				<?php toolbox_content_nav( 'nav-below' ); ?>
				
				<?php get_template_part( 'module', 'fbcomment' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #primary -->
		
		<?php get_sidebar(); ?>
	
	</div><!-- #content -->

<?php get_footer(); ?>