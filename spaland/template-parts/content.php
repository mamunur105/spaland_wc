<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package spaland
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('news-block'); ?>>
	<div class="inner-box">

 		<div class="image-box">
            <?php spaland_post_thumbnail(); ?>

            <?php 

				// $tags_list = get_the_tag_list( '', esc_html_x( ', ', ',', 'spaland' ) );
				// if ( $tags_list ) {
					/* translators: 1: list of tags. */
					// printf( '<span class="tag">' . esc_html__( '%1$s', 'spaland' ) . '</span>', $tags_list ); // WPCS: XSS OK.
				// }

            ?>
            <?php
				$posttags = get_the_tags();
				$count=0;
				if ($posttags) {
				  foreach($posttags as $tag) {
				    $count++;
				    if (1 == $count) {
				      echo '<span class="tag">' . esc_html__( $tag->name, 'spaland' ) . '</span>' ;
				    }
				  }
				}
				?>
        </div>
		  
		<div class="lower-content">
		    <ul class="info">
		        <li> <?php spaland_posted_by(); ?> </li>
		        <li> <?php spaland_posted_on(); ?></li>
		    </ul>

		    <?php 
				if ( is_singular() ) :
					the_title( '<h3 class="entry-title">', '</h3>' );
				else :
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				endif;

		    ?>
		    <div class="text">
			   <?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'spaland' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'spaland' ),
					'after'  => '</div>',
				) );
				?>
			</div>
		<?php if(!is_single()): ?>
		    <div class="btn-box"><a href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Read More ', 'spaland' ) ?><i class="fa fa-angle-double-right"></i></a></div>
		<?php endif; ?>

		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

                            

