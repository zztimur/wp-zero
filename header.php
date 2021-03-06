<?php
/**
 * The start of the page outout.
 *
 * @package WordPress
 * @subpackage ZEROTHEME
 */
?><!DOCTYPE html>
<!--[if IEMobile 7 ]>
	<html class="no-js iem7"">
<![endif]-->

<!--[if lt IE 7 ]>
	<html class="no-js ie6 ie-lt-7 ie-lt-8 ie-lt-9" <?php language_attributes(); ?>>
<![endif]-->

<!--[if IE 7 ]>
	<html class="no-js ie7 ie-lt-8 ie-lt-9" <?php language_attributes(); ?>>
<![endif]-->

<!--[if IE 8 ]>
	<html class="no-js ie8 ie-lt-9" <?php language_attributes(); ?>>
<![endif]-->

<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="cleartype" content="on">

	<title><?php if(function_exists('ZEROTHEME_wp_title')) {
		ZEROTHEME_wp_title(); 
	} else {
		bloginfo('name');
		wp_title( '|' );
		
	}?></title>

	

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php
		wp_head();
	?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part( 'body-header' ); ?>

