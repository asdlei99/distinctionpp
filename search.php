<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage distinctionpp
 * @since distinctionpp 1.2
 */

get_header(); ?>
<?php if ( have_posts() ) : ?>
		<div id="container" class="one-column">
			<div id="content" role="main">

				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'wp_distinctionpp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
         </div><!-- #content -->
		</div><!-- #container -->
<?php else : ?>
		<div id="container">
			<div id="content" role="main">
				<div class="post_fliud_panel"><div id="post-0" class="no-results not-found">
                <div class="post-inner">
					<h2 class="title"><?php _e( 'Nothing Found', 'wp_distinctionpp' ); ?></h2>
					<div class="entry">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'wp_distinctionpp' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
                </div>
				</div></div><!-- #post-0 -->

			</div><!-- #content -->
		</div><!-- #container -->
<?php endif; ?>
<?php get_footer(); ?>
