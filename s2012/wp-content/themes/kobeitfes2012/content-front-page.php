<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php
		if ( function_exists('get') ) {
			echo get('event_theme');
		} else {
			echo get_post_meta( get_the_ID(), 'event_theme', true );
		}
		?>
	</header>
	<section>
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'toolbox' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'toolbox' ), '<span class="edit-link">', '</span>' ); ?>
	</section>
</article>