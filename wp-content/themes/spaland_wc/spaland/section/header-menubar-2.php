<header class="main-header header-style-three">
    	
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="clearfix">
                            <?php if(theme_options( 'headet_top_phone' ) != ''):?>
                            <li> <a href="#"><i class="fa fa-volume-control-phone"></i>
                                     <?php  echo theme_options( 'headet_top_phone' ); ?>
                                 </a> 
                             </li>
                            <?php endif; ?>
                            <?php if(theme_options( 'headet_top_email' ) != ''):?>
                            <li><a href="#"><i class="fa fa-envelope-o"></i> 
                                <!-- info@yourdomain.com -->
                                <?php echo theme_options( 'headet_top_email' );  ?>
                                </a>
                            </li>
                            <?php endif;  ?>

                        </ul>
                    </div>
                    <?php if(theme_options( 'headet_top_right_button' ) == true ):?>
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
                                if(theme_option( 'main_logo' ) != false):
                                    $image_id = theme_option( 'main_logo' );
                                    $attachment = wp_get_attachment_image_src( $image_id, 'full' )[0];
                                else:
                                    $attachment = get_template_directory_uri().'/images/logo.png';
                                endif ;

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

                            <?php  main_menu_walker();  ?> 

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
                                            <form method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                                <div class="form-group">
                                                    <input type="search" name="s" value="" placeholder="Search Here" required="">
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
                	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php
                            if(theme_option( 'main_logo' ) != false):
                                $image_id = theme_option( 'main_logo' );
                                $attachment = wp_get_attachment_image_src( $image_id, 'full' )[0];
                            else:
                                $attachment = get_template_directory_uri().'/images/logo.png';
                            endif ;

                        ?>
                        <img src="<?php echo $attachment ?>" alt="Logo">

                    </a>
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

                        <?php  main_menu_walker();  ?> 
                        
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div>
        <!--End Sticky Header-->
    </header>