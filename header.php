<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>
		<?php wp_head(); ?>
		<link media="screen" type="text/css" href="<?php print get_template_directory_uri(); ?>/css/screen.css" rel="stylesheet">
		<link media="all" type="text/css" href="<?php print get_template_directory_uri(); ?>/css/all.css" rel="stylesheet">
		<link media="print" type="text/css" href="<?php print get_template_directory_uri(); ?>/css/print.css" rel="stylesheet">
		<link rel="icon" type="image/ico" href="<?php print get_template_directory_uri(); ?>/favicon.ico">
		<link media="all" type="text/css" href="<?php print get_template_directory_uri(); ?>/style.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="<?php print get_template_directory_uri(); ?>/js/accordion-menu.js"></script>
        <!-- Google Analytics -->
        <!-- End Google Analytics -->
    </head>

	<body>
		<div id="printHeader">
			<img src="<?php print get_template_directory_uri(); ?>/images/404.jpg" width="640" height="130" style="border:0px" alt="Civil Air Patrol" />
		</div>

		<div id="bodyContainer">
			<div class="page">
				<div id="header">
					<div id="logo">
						<a href="/" name="top"><img src="<?php print get_template_directory_uri(); ?>/images/logo.png"  width="362" height="127" alt="Civil Air Patrol"></a>
					</div>

					<div class="headerDivider"></div>

					<div class="orgContainer">
					    <div class="orgTitle">
                            <?php echo get_bloginfo ( 'title' ); ?>
                        </div>
                        <div class="orgDescription">
                            <?php echo get_bloginfo ( 'description' ); ?>
                        </div>
					</div>

					<div class="servings">
						<span class="servingsTitle">Citizens Serving <br/> Communities</span>

                        <?php if ( has_nav_menu( 'top-right-menu' ) ) : ?>
                            <?php wp_nav_menu( array('menu' => 'Top Right Menu', 'theme_location' => 'top-right-menu', 'link_before' => '<span class="arrow"></span><span/>' ) ); ?>
                        <?php else: ?>
                            <ul>
                                <li><a href="#"><span class="arrow"></span><span>Please create a top right menu</a></li>
                                <li><a href="#"><span class="arrow"></span><span>Two links are the maximum here</a></li>
                            </ul>
                        <?php endif; ?>
					</div>

					<div id="mainNavigation">
					    <?php if ( has_nav_menu( 'tab-menu' ) ) : ?>
                            <?php wp_nav_menu( array('menu' => 'tab-menu', 'theme_location' => 'tab-menu') ); ?>
                        <?php else: ?>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="#">This is the Tab Menu</a></li>
                            </ul>
                        <?php endif; ?>

						<div class="search">
							<form action="/" method="get">
								<input type="text" id="s" name="s" class="searchInput" placeholder="Search..." value="<?php the_search_query(); ?>" />
								<input type="submit" class="submitBt" value="" />
							</form>
						</div>
					</div>
				</div>

				<div id="pageContent">
					<div class="contentBorder"></div>

					<div id="content">
						<div class="slideshowTop"></div>

						<div class="slideshow">
						    <?php if ( is_active_sidebar( 'slide_show' ) ) : ?>
                                <?php dynamic_sidebar( 'slide_show' ); ?>
                            <?php else: ?>
                                <p>
                                    This is the Slide Show Widget.
                                    We recommend using the MetaSlider plugin placed here.
                                    Make sure images are 1024x342.
                                </p>
                            <?php endif; ?>
						</div>

						<div class="slideshowBottom"></div>

						<div class="mainContent">
							<div class="leftColumn">
							    <?php if ( has_nav_menu( 'main-menu' ) ) : ?>
								    <?php wp_nav_menu( array('menu' => 'Main Menu', 'menu_id' => 'nav_options', 'theme_location' => 'main-menu', 'link_before' => '<span class="arrow"></span><span/>' ) ); ?>
                                <?php else: ?>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="arrow"></span>
                                                This is the Main Menu
                                            </a>
                                        </li>
                                    </ul>
                                <?php endif; ?>
							</div>

							<div class="mainColumn">
								<div class="breadcrumbs">
									<ul>

										<?php if ( ! is_front_page() ) : ?>
											<li><a href="/">Home</a></li>
											<li class="divider">/</li>
										<?php endif; ?>

										<?php if ( is_page() ) : ?>
											<?php if ( $post->post_parent ) : ?>
												<li><a href="<?php print get_the_permalink( $post->post_parent ); ?>"><?php print get_the_title( $post->post_parent ); ?></a></li>
												<li class="divider">/</li>
											<?php endif; ?>
											<li><a href="<?php print get_the_permalink( $post->ID ); ?>" class="selected"><?php print get_the_title( $post->ID ); ?></a></li>
										<? endif; ?>

										<?php if ( is_search() ) : ?>
											<li><a href="#" class="selected">Search Results</a></li>
										<?php endif; ?>

									</ul>
								</div>
								<div class="mainText">
