<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 */

?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/favicon.ico"> 

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- preloader start -->
<div class="preloader js-preloader"  data-barba="wrapper">
    <div class="preloader__bg"></div>
    <div class="preloader__progress">
        <div class="preloader__progress__inner"></div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/loader.gif" alt="preloader image" class="preloader__img">
    </div>
</div>
<!-- preloader end -->

<!-- cursor start -->
<div class="cursor js-cursor">
    <div class="cursor__wrapper">
        <div class="cursor__follower js-follower"></div>
        <div class="cursor__label js-label"></div>
        <div class="cursor__icon js-icon"></div>
    </div>
</div>
<!-- cursor end -->

<div id="page" class="site barba-container" data-barba="container">
	<a class="skip-link screen-reader-text" href="#content"></a>

    <!-- to-top-button start -->
    <div data-cursor class="backButton js-backButton">
        <span class="backButton__bg"></span>
        <div class="backButton__icon__wrap">
            <i class="backButton__button js-top-button" data-feather="arrow-up"></i>
        </div>
    </div>
    <!-- to-top-button end -->

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div class="content-area">
			<main id="main" class="site-main">
