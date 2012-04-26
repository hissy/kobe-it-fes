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
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'toolbox' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'toolbox' ), '<span class="edit-link">', '</span>' ); ?>
	</section>
	<footer>
		<p>
			【神戸ITフェスティバル事務局】<br>
			〒650-0033 神戸市中央区江戸町93番 栄光ビル5F<br>
			（神戸デジタル・ラボ内　担当：舟橋）<br>
			<span id="e487906088">[javascript protected email address]</span><script type="text/javascript">/*<![CDATA[*/eval("var a=\"vwIlCsfJd7.nZH3SQXuPL2aA1@yTM-zimrbO5t6j08KGYxe9hU+cBgR_oEWVDFqkp4N\";var b=a.split(\"\").sort().join(\"\");var c=\"URe_Hc_KxwUDwexVI_W9\";var d=\"\";for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));document.getElementById(\"e487906088\").innerHTML=\"<a href=\\\"mailto:\"+d+\"\\\">\"+d+\"</a>\"")/*]]>*/</script>
		</p>
	</footer>
</article>