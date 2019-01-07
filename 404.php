<?php
/**
 * The template for displaying 404 pages (Page Not Found)
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Page Not Found', 'cap-wp-theme' ); ?></h1>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
				    
					<h2><?php _e( 'Sorry, but the page you requested could not be found.', 'cap-wp-theme' ); ?></h2>
					<p><?php _e( 'The page or file you are looking for does not exist, has been moved,', 'cap-wp-theme' ); ?><br>
					<?php _e( 'or is no longer available.', 'cap-wp-theme' ); ?></p>
					<p><?php _e( 'Maybe try a search?', 'cap-wp-theme' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
