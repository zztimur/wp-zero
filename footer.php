<?php
/**
 * The end of the page outout.
 *
 * @package WordPress
 * @subpackage ZEROTHEME
 */
?>

<?php get_template_part( 'body-footer' ); ?>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
