<header class="main-header header-style-three">
    	
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="clearfix">
                            <?php if(cs_get_option( 'headet_top_phone' ) != ''):?>
                            <li> <a href="#"><i class="fa fa-volume-control-phone"></i>
                                     <?php  echo cs_get_option( 'headet_top_phone' ); ?>
                                 </a> 
                             </li>
                            <?php endif; ?>
                            <?php if(cs_get_option( 'headet_top_email' ) != ''):?>
                            <li><a href="#"><i class="fa fa-envelope-o"></i> 
                                <!-- info@yourdomain.com -->
                                <?php echo cs_get_option( 'headet_top_email' );  ?>
                                </a>
                            </li>
                            <?php endif;  ?>

                        </ul>
                    </div>
                    <?php if(cs_get_option( 'headet_top_right_button' ) == true ):?>
                        <div class="top-right">
                            <div class="link-box">
                                <a href="<?php echo cs_get_option('headet_top_booking_link' )?>"><?php echo esc_html('Book Now'); ?></a></div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <!-- End Header Top -->

         <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
               <div class="main-box clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php
                                $image_id = cs_get_option( 'main_logo' );
                                $attachment = wp_get_attachment_image_src( $image_id, 'full' )[0];
                            ?>
                                <img src="<?php echo $attachment ?>" alt="Logo">

                            </a>
                        </div>
                    </div>
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <?php
                                wp_nav_menu( array(
                                    'theme_location'    => 'menu-1',
                                    'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'container'         => 'div',
                                    'container_id'      =>'',
                                    'container_class'   => 'navbar-collapse collapse clearfix',
                                    'menu_id'           => '',
                                    'menu_class'        => 'navigation clearfix',
                                    'walker'            => new Selective_Walker(),
                                ) );
                                ?>

                        </nav>
                        <!-- Main Menu End-->
                        
                        <!--outer Box-->
                        <div class="outer-box">
                            <!-- Cart Btn -->
                            <div class="cart-btn">
                                <a href="shop.html" title="">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span class="count">0</span>
                                </a>
                            </div>

                            <!--Search Box-->
                            <div class="dropdown search-box-outer">
                                <button class="search-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="#">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required="">
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!--End outer Box-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Lower -->
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
                <!--Logo-->
            	<div class="logo pull-left">
                	<a href="index-2.html" class="img-responsive"><img src="images/logo.png" alt="" title=""></a>
                </div>
                    
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index-2.html">Homepage One</a></li>
                                        <li><a href="index-3.html">Homepage Two</a></li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index-2.html">Header Style One</a></li>
                                                <li><a href="index-3.html">Header Style Two</a></li>
                                            </ul>
                                        <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                    </ul>
                                <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="appointment.html">Appointment</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="gallery-detail.html">Gallery Detail</a></li> 
                                    </ul>
                                <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="services.html">All Services</a></li>
                                        <li><a href="service-detail.html">Message Therapy</a></li>
                                        <li><a href="service-detail.html">Facial Treatment</a></li>
                                        <li><a href="service-detail.html">Pedicure &amp; Menicure</a></li>
                                        <li><a href="service-detail.html">Salt and Oil Bath</a></li>
                                        <li><a href="service-detail.html">Hair Treatments</a></li> 
                                    </ul>
                                <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                <li class="dropdown"><a href="#">News</a>
                                    <ul>
                                        <li><a href="blog.html">Latest News</a></li>
                                        <li><a href="blog-detail.html">News Detail</a></li>
                                    </ul>
                                <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                <li class="current dropdown"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Products</a></li>
                                        <li><a href="shop-single.html">Products Detail</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="login.html">Registration</a></li>
                                    </ul>
                                <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div>
        <!--End Sticky Header-->
    </header>