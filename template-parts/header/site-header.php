<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
if (is_front_page() ) {
    $classes = 'header -dark -sticky-light js-header-dark js-header';
} else {
    $classes = 'header -light -sticky-light js-header';
}
?>

<header class="<?php echo esc_attr( $wrapper_classes ); ?> <?php echo $classes ?> js-header">
    <div class="header__bar">
	<?php get_template_part( 'template-parts/header/site-branding' ); ?>
    </div>
    <?php get_template_part( 'template-parts/header/site-nav' ); ?>
</header><!-- #masthead -->