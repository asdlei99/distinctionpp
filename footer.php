<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage distinctionpp
 * @since distinctionpp 1.0
 */
?>
	</div><!-- #main -->

</div><!-- #wrapper -->

<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>
            <div id="footer-meta">
            
                <div id="site-info">
                    
                    <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                    
                </div><!-- #site-info -->
    
                <?php global $wp_distinctionpp_options;
				if ( 'true' == $wp_distinctionpp_options['display_footer_credit'] ) { // Enabled by default 
		
                wp_distinctionpp_footer_credit();
                
                } ?>
                
            </div><!-- #footer-meta -->

		</div><!-- #colophon -->
        
	</div><!-- #footer -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
