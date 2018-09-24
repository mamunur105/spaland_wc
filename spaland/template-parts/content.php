<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package spaland
 */

?>
<?php if(is_single()): ?> <div class="blog-detail"> <?php endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('news-block'); ?>>
	<div class="inner-box">

 		<div class="image-box">
            <?php spaland_post_thumbnail(); ?>
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
			   	if (!is_single()) {
			   		the_excerpt();
			   		
			   	}else{
			   		the_content();
			   	}

			    ?>
			</div>
			<?php if(!is_single()): ?>
			    <div class="btn-box"><a href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Read More ', 'spaland' ) ?><i class="fa fa-angle-double-right"></i></a></div>
			<?php endif; ?>



		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
                        
<?php if(is_single()): ?>

	<div class="post-share-options clearfix">
	    <div class="pull-left ">
	        <p>Tags : </p>

			<?php the_tags( '<ul class="tags single-page-tags" ><li>', ', </li> <li> ', '</li></ul>' ); ?>

                              
	    </div>
	    <div class="pull-right">
	        <p>Social Media : </p>
	        <ul class="social-icon">
				<?php 
					/*Stuff for Pinterest*/
					//getting the permalink
					$postpermalink = urlencode( get_permalink() );

					//getting the thumbnail
					$imageurl = urlencode( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) );
					/*End of Pinterest*/
				?>

	            <li><a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=<?php echo $imageurl;?>&amp;description=<?php echo rawurlencode(get_the_title()); ?>"><span class="fa fa-pinterest"></span></a></li>
				<li> <a target="_blank" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>"> <span class="fa fa-facebook"></span> </a> </li>
	            <li> <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"> <span class="fa fa-google-plus"></span> </a> </li>
	            <li> <a target="_blank" href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Click to share this post on Twitter"> <span class="fa fa-twitter"></span> </a> </li>
	        </ul>
	    </div>
	</div>
	<div class="author-box">
        <div class="inner-box">
            <div class="image-box"><img src="http://localhost/wp/spaland/wp-content/uploads/2018/09/author-thumb.jpg" alt=""></div>
            <span class="name">Mark Richardson</span>
            <p>We will give you a complete account of the system, and expound the teachings of the great explorer of the truth, the master-builder of human happiness..</p>
            <ul class="social-icons clearfix">
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            </ul>
        </div>
    </div>



<?php endif; ?>


<?php if(is_single()): ?> </div> <?php endif; ?>