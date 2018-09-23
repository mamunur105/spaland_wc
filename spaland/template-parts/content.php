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
	    <div class="pull-left">
	        <p>Tags : </p>
	        <ul class="tags">
	            <li><a href="#">Body</a>,</li>
	            <li><a href="#">Care</a>,</li>
	            <li><a href="#">Center</a>,</li>
	            <li><a href="#">Spa</a>,</li>
	        </ul>                               
	    </div>
	    <div class="pull-right">
	        <p>Social Media : </p>
	        <ul class="social-icon">
	            <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
	            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
	            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
	            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
	            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
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