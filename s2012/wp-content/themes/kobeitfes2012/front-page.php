<?php
if ( function_exists('get_image') ) $visual = get_image( 'visual' );

get_header(); ?>

	<?php if ( $visual ) : ?><div class="visual"><?php echo $visual; ?></div><?php endif; ?>

	<div id="content" class="row">
		<div id="primary" class="span" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'front-page' ); ?>
			<?php endwhile; // end of the loop. ?>
			
			<?php
			$args = array(
				'posts_per_page' => 5
			);
			$myposts = get_posts($args);
			if ( $myposts ) :
				?>
				<section class="recent-entry">
					<h1>
						新着情報
					</h1>
					<ul>
					<?php
					foreach ( $myposts as $post ) :
						setup_postdata( $post );
						$term = array_shift( get_the_terms( get_the_ID(), 'category' ) );
						$term_link = get_category_link( $term->term_id );
						$thumbnail = get_the_post_thumbnail( get_the_ID(), 'thumb-small' );
						?>
						<li class="hnews hentry item clearfix">
							<a href="<?php the_permalink(); ?>" class="thumbnail">
							<?php if ( $thumbnail ) : ?><?php echo $thumbnail; ?>
							<?php else: ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ico/apple-touch-icon-iphone.png" alt="" />
							<?php endif; ?>
							</a>
							<span class="updated dtstamp" title="<?php echo get_the_date( 'c' ); ?>"><?php the_date('Y-m-d'); ?></span><a class="entry-category badge badge-info" href="<?php echo $term_link; ?>"><?php echo $term->name; ?></a>
							<a class="url entry-title" href="<?php the_permalink(); ?>"" rel="bookmark"><?php the_title(); ?></a>
						</li>
						<?php
					endforeach;
					?>
					</ul>
				</section>
				<?php
			endif;
			
			// Reset Post Data
			wp_reset_postdata();
			?>
		</div><!-- #primary -->
		
		<?php get_sidebar(); ?>
	
	</div><!-- #content -->

<?php get_footer(); ?>