<?php
/*
Template Name: Страница города
Template Post Type: cities
*/
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
        <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'loop-templates/content', 'single-cities' );

            endwhile; // End of the loop.
        ?>
            </div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();