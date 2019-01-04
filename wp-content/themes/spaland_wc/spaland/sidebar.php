<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spaland
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>





<div class="sidebar-side col-md-4 col-sm-12 col-xs-12">
		<?php // dynamic_sidebar( 'sidebar-1' ); ?>
    <aside  id="secondary" class="widget-area sidebar default-sidebar">
        <!--search box-->
        <div class="sidebar-widget search-box">
            <form method="post" action="http://themebunch.com/html/spaland/blog.html">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search......" required="">
                    <button type="submit"><span class="icon flaticon-search"></span></button>
                </div>
            </form>
        </div>

        <!-- Categories -->
        <div class="sidebar-widget categories">
            <div class="sidebar-title"><h2>Categories</h2></div>
            <ul class="category-list">
                <li><a href="#">Procedures      <span>(06)</span></a></li>
                <li><a href="#">Transplantation <span>(02)</span></a></li>
                <li><a href="#">Management      <span>(05)</span></a></li>
                <li><a href="#">Healthcare Tips <span>(25)</span></a></li>
                <li><a href="#">Uncategorized   <span>(04)</span></a></li>
            </ul>
        </div>

        <!-- Latest News -->
        <div class="sidebar-widget popular-posts">
            <div class="sidebar-title"><h2>Popular Posts</h2></div>
            <div class="widget-content">
                <article class="post">
                    <div class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                    <h3><a href="blog-single.html">Massage theraphy for managing stress</a></h3>
                    <span class="date">February 14, 2017</span>
                </article>

                <article class="post">
                    <div class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a></div>
                    <h3><a href="blog-single.html">When massage may not be a good for you</a></h3>
                    <span class="date">February 05, 2017</span>
                </article>

                <article class="post">
                    <div class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a></div>
                    <h3><a href="blog-single.html">New thereaphy center opened at newyork city</a></h3>
                    <span class="date">January 22, 2017</span>
                </article>
            </div>
        </div>


        <!-- Gallery Widget -->
        <div class="sidebar-widget gallery-widget">
            <div class="sidebar-title"><h2>Flicker</h2></div>
            <h4 class="follow-us">Follow Us</h4>
            <div class="gallery-outer clearfix">
                <figure class="image">
                    <a href="images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/flicker-1.jpg" alt=""></a>
                </figure>

                <figure class="image">
                    <a href="images/gallery/2.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/flicker-2.jpg" alt=""></a>
                </figure>

                <figure class="image">
                    <a href="images/gallery/3.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/flicker-3.jpg" alt=""></a>
                </figure>

                <figure class="image">
                    <a href="images/gallery/4.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/flicker-4.jpg" alt=""></a>
                </figure>

                <figure class="image">
                    <a href="images/gallery/5.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/flicker-5.jpg" alt=""></a>
                </figure>

                <figure class="image">
                    <a href="images/gallery/6.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/flicker-6.jpg" alt=""></a>
                </figure>
            </div>
        </div>

        <!-- Tags -->
        <div class="sidebar-widget tags">
            <div class="sidebar-title"><h2>Tag Cloud</h2></div>
            <ul class="tag-list clearfix">
                <li><a href="#">Message</a></li>
                <li><a href="#">Therapy</a></li>
                <li><a href="#">Facial</a></li>
                <li><a href="#">Pedicure</a></li>
                <li><a href="#">Menicure</a></li>
                <li><a href="#">Salt</a></li>
                <li><a href="#">Oil Bath</a></li>
                <li><a href="#">Organic Spa</a></li>
            </ul>
        </div>             
    </aside>
</div>
