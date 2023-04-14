<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<!-- breadcrumbs Yoast SEO-->
		<div class="breadcrumbs">
			<div class="breadcrumbs__container">
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<div class="breadcrumbs__list">','</div>' );
					}
				?>
			</div>
		</div>
		<!-- breadcrumbs end -->

		<?php the_title( '<h1 class="entry-title mb-40 sm:mb-16">', '</h1>' ); ?>		

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php
		the_content();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->



</article><!-- #post-<?php the_ID(); ?> -->
