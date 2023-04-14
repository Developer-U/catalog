<?php
/**
 * Displays header site branding
 *
 * @package WordPress

 */

$blog_info = get_bloginfo('name');
$description = get_bloginfo('description', 'display');
$show_title = (true === get_theme_mod('display_title_and_tagline', true));
$header_class = $show_title ? 'site-title' : 'screen-reader-text';
?>
<?php if (!has_custom_logo()) { ?>
    <div class="header__logo">
        <a data-barba href="<?php echo site_url() ?>">
            <img class="header__logo__light" src="<?php echo get_stylesheet_directory_uri() ?>/img/white_logo.svg"
                 data-src="<?php echo get_stylesheet_directory_uri() ?>/img/white_logo.svg"
                 alt="Logo">
        </a>
        <a data-barba href="<?php echo site_url() ?>">
            <img class="header__logo__dark" src="<?php echo get_stylesheet_directory_uri() ?>/img/black_logo.svg"
                 data-src="<?php echo get_stylesheet_directory_uri() ?>/img/black_logo.svg"
                 alt="Logo">
        </a>
    </div>
<?php } else {
    if (has_custom_logo() && $show_title) : ?>
        <div class="header__logo js-header-logo site-logo">
            <?php the_custom_logo(); ?>
        </div>
    <?php endif; ?>

    <div class="site-branding">

        <?php if (has_custom_logo() && !$show_title) : ?>
            <div class="header__logo js-header-logo site-logo">
                <?php the_custom_logo(); ?>
            </div>
        <?php endif; ?>

        <?php if ($blog_info) : ?>
            <?php if (is_front_page() && !is_paged()) : ?>
                <h1 class="<?php echo esc_attr($header_class); ?>"><?php echo esc_html($blog_info); ?></h1>
            <?php elseif (is_front_page() && !is_home()) : ?>
                <h1 class="<?php echo esc_attr($header_class); ?>"><a
                            href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html($blog_info); ?></a>
                </h1>
            <?php else : ?>
                <p class="<?php echo esc_attr($header_class); ?>"><a
                            href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html($blog_info); ?></a>
                </p>
            <?php endif; ?>
        <?php endif; ?>

        <?php if ($description && true === get_theme_mod('display_title_and_tagline', true)) : ?>
            <p class="site-description">
                <?php echo $description; // phpcs:ignore WordPress.Security.EscapeOutput ?>
            </p>
        <?php endif; ?>
    </div><!-- .site-branding -->
<?php } ?>

<div class="header__menu">
    <div class="nav-button-open js-nav-open">
        <i class="icon" data-feather="menu">
            <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
<svg width="36px" height="36px" viewBox="0 0 12 12" enable-background="new 0 0 12 12" id="Слой_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

<g>

<rect fill="#fff" height="1" width="11" x="0.5" y="5.5"/>

<rect fill="#fff" height="1" width="11" x="0.5" y="2.5"/>

<rect fill="#fff" height="1" width="11" x="0.5" y="8.5"/>

</g>

</svg>
        </i>
        <span></span>
        <span></span>
    </div>
</div>
