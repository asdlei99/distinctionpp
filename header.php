<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage distinctionpp
 * @since distinctionpp 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="keywords" content='<?php echo get_the_tag_list(null, ','); ?>' />
<meta name="description" content="<?php bloginfo('name'); ?>, <?php bloginfo('description'); wp_title(', ', true); ?>" />
<meta name="author" content="<?php bloginfo('name'); ?>" />
<meta name="application-name" content="<?php bloginfo('name'); ?> -- <?php bloginfo('description'); ?>" />
<meta name="msapplication-TileColor" content="#AAAACC"/>
<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/images/blogicon.png" />

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'distinctionpp' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<style type="text/css" media="screen">
	@import url( <?php bloginfo('stylesheet_url'); ?> );
	@import url( <?php bloginfo('template_url'); ?>/js/bootstrap/bootstrap.min.css?ver=3.0.3 );
	@import url( <?php bloginfo('template_url'); ?>/js/bootstrap/bootstrap-theme.min.css?ver=3.0.3 );
</style>
<!--[if gte IE 9]><style type="text/css">
		.gradient {
			filter: none;
		}
</style><![endif]-->
<!--[if lte IE 9]>	<style type="text/css">
	.gradient-cover-white {
		background-color: transparent;
	}
</style><![endif]-->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>



</head>
<?php global $wp_distinctionpp_options; ?>
<body <?php body_class(); ?>>

<div id="header">

    <div id="masthead">
    	<?php if ( 'above' == $wp_distinctionpp_options['header_menu_position'] ) { ?>
            <div id="header-menu">

                <div id="access" role="navigation">

                    <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
                    <div class="skip-link screen-reader-text">
                        <a href="#content" title="<?php esc_attr_e( 'Skip to content', 'wp_distinctionpp' ); ?>"><?php _e( 'Skip to content', 'wp_distinctionpp' ); ?></a>
                    </div>

                    <div class="menu-header">

						<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
                        <?php wp_nav_menu( array( 'container' => '', 'theme_location' => 'primary' ) ); ?>

                        <?php if ( 'true' == $wp_distinctionpp_options['display_menu_search_form'] ) { // Enabled by default ?>

						<div id="search-form"><?php get_search_form(); ?></div>

						<?php } ?>

                    </div><!-- .menu-header -->

                </div><!-- #access -->

            </div><!-- #header-menu -->
       <?php } ?>
        <div id="branding" role="banner">

            <?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
            <<?php echo $heading_tag; ?> id="site-title">
            	<?php
				if ( 'true' == $wp_distinctionpp_options['display_header_flames'] ) { // Enabled by default ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/lt-flurl.png" alt="wispy image" /><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><img src="<?php echo get_template_directory_uri(); ?>/images/rt-flurl.png" alt="wispy image" />

				<?php }else{ ?>

            	<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

                 <?php } ?>
            </<?php echo $heading_tag; ?>>

            <?php
				if ( 'true' == $wp_distinctionpp_options['display_site_description'] ) { // Enabled by default ?>

				<div id="site-description"><?php bloginfo( 'description' ); ?></div>

			<?php } ?>

      	</div><!-- #branding -->
       	<?php if ( 'below' == $wp_distinctionpp_options['header_menu_position'] ) { ?>
            <div id="header-menu">

                <div id="access" role="navigation">

                    <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
                    <div class="skip-link screen-reader-text">
                        <a href="#content" title="<?php esc_attr_e( 'Skip to content', 'distinctionpp' ); ?>"><?php _e( 'Skip to content', 'wp_distinctionpp' ); ?></a>
                    </div>

                    <div class="menu-header">

						<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
                        <?php //wp_nav_menu( array( 'container' => '', 'theme_location' => 'primary' ) ); ?>

                        <?php
						global $wp_distinctionpp_options;
						if ( has_nav_menu( 'primary' ) ) { // If a nav menu named 'nav-header' is configured, output it
							wp_nav_menu( array(
								'container' => '',
								'fallback_cb' => '',
								'depth' => $wp_distinctionpp_options['header_menu_depth'],
								'theme_location' => 'primary'
							) );
							} else { // otherwise, output the top-level hierarchy list of pages ?>
								<ul class="menu">
									<?php if ( get_option( 'show_on_front' ) == 'posts' ) { // if posts, and not a static page, are being used as the site home page, display a link to HOME ?>
										<li><a id="navhome" href="<?php echo home_url(); ?>">Home</a></li>
									<?php }
									wp_list_pages( array( 'depth' => $wp_distinctionpp_options['header_menu_depth'], 'sort_column' => 'menu_order', 'title_li' => '' ) );
									// depth=1 indicates that only the top-level hierarchy of pages (i.e. no child pages) will be displayed
									// sort_column=menu_order indicates that the pages will be sorted as defined by the user in the Pages administration panel
									// title_li= (blank) indicates that the list will not be wrapped in <ul> tags, and the <li> tags will not be given a title
									// NOTE: list items are set to overflow:hidden. Long page titles will be cut off, but the full Page Title will display in the tooltip ?>
								</ul>
						<?php } ?>

                    	<?php if ( 'true' == $wp_distinctionpp_options['display_menu_search_form'] ) { // Enabled by default ?>

						<div id="search-form"><?php get_search_form(); ?></div>

						<?php } ?>


                    </div><!-- .menu-header -->

                </div><!-- #access -->

            </div><!-- #header-menu -->
       <?php } ?>
    </div><!-- #masthead -->

</div><!-- #header -->

<div id="wrapper" class="hfeed">

	<div id="main">
