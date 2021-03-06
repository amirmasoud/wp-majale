<?php
/**
 * 
 * The template for displaying posts in the Link post format
 * 
 */

?>

<section id="post-<?php the_ID() ?>" <?php post_class(array('blog-post-area', 'blog-post-link')) ?>>
	<header class="article-header">
		<div class="date-author">
			<?php majale_date_author() ?>
		</div>
		
		<?php
			if ( is_single() ) :
				the_title( '<h2 class="blog-post-title padding-15">', '</h2>' );
			else :
				the_title( sprintf( '<a href="%s" class="blog-post-title-link" rel="bookmark"><h2 class="blog-post-title padding-15">', esc_url( get_permalink() ) ), '</h2></a>' );
			endif;
		?>
		
	</header>
	<i class="fa fa-link bg"></i>

	<article class="article-content padding-15">
		<?php the_content( __( '<footer class="article-footer padding-15">Continue reading</footer>', 'majale' ) ); ?>

		<?php wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'majale' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			) );
		?>
	</article>
</section>
