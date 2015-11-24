<?php
/**
 * This partial is used for displaying the Site Title and Logo
 *
 * @package Layers
 * @since Layers 1.0.0
 */

do_action( 'layers_before_logo' ); ?>
<div class="logo">
	<?php do_action( 'layers_before_logo_inner' ); ?>

	<?php /**
	* Display Site Logo
	*/
	if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>

	<?php if('blank' != get_theme_mod('header_textcolor') ) { ?>
		<div class="site-description">
			<?php if(is_home() || is_front_page() ) { ?>
				<h1 class="sitename sitetitle"><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo( 'title' ); ?></a></h1>
				<h2 class="tagline"><?php echo get_bloginfo( 'description' ); ?></h2>
			<?php } else { ?>
				<span class="sitename sitetitle"><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo( 'title' ); ?></a></span>
				<span class="tagline"><?php echo get_bloginfo( 'description' ); ?></span>
			<?php } ?>
		</div>
	<?php } ?>

	<?php do_action( 'layers_after_logo_inner' ); ?>
</div>
<?php do_action( 'layers_after_logo' );