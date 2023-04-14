<?php
$team_query = new WP_Query( 'post_type=team' );
$team_title = get_field('team_title');
$team_text = get_field('team_text');
?>
<!-- section start -->
<section class="layout-pt-sm layout-pb-sm bg-dark-1">
    <!-- container start -->
    <div class="container">

        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row justify-content-between align-items-start">
                <div class="col-lg-6">
                    <div class="sectionHeading -md">
                        <h2 class="sectionHeading__title text-white">
                            <?php echo $team_title ?>
                        </h2>
                    </div>
                </div>

                <div class="col-right col-lg-6 md:mt-24 text-light">
                    <?php echo $team_text ?>
                </div>
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->


        <!-- row start -->
        <div class="row x-gap-60 y-gap-60 layout-pt-md">
            <?php if ( $team_query->have_posts() ) {
            while ( $team_query->have_posts() ) {
            $team_query->the_post();
            $team_position = get_field('team_position');
            $vk = get_field('team_vk');
            $linkedin = get_field('team_linkedin');
            $twitter = get_field('team_twitter');
            $fb = get_field('team_facebook');
            ?>
            <div class="col-lg-4 col-sm-6">
                <div data-anim-wrap class="teamCard">
                    <div class="teamCard__img">
                        <div data-anim-child="img-right cover-dark-1 delay-2">
                            <div class="bg-image ratio ratio-3:4 js-lazy" data-bg="<?php the_post_thumbnail_url(); ?>"></div>
                        </div>
                    </div>
                    <div data-anim-child="fade delay-8" class="teamCard__content mt-24">
                        <h4 class="teamCard__title text-xl fw-600 text-white">
                            <?php the_title() ?>
                        </h4>

                        <p class="teamCard__text mt-4 text-light">
                            <?php echo $team_position ?>
                        </p>

                        <div class="teamCard__social mt-12">
                            <?php if ($twitter) { ?>
                                <div class="teamCard__social__item">
                                    <a class="text-white" href="<?php echo $twitter ?>">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            <?php } ?>
                            <?php if ($fb) { ?>
                                <div class="teamCard__social__item">
                                    <a class="text-white" href="<?php echo $fb ?>">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                </div>
                            <?php } ?>
                            <?php if ($linkedin) { ?>
                                <div class="teamCard__social__item">
                                    <a class="text-white" href="<?php echo $linkedin ?>">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            <?php } ?>
                            <?php if ($vk) { ?>
                                <div class="teamCard__social__item">
                                    <a class="text-white" href="<?php echo $vk ?>">
                                        <i class="fa fa-vk"></i>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php wp_reset_postdata(); ?>
            <?php } ?>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->
</section>
<!-- section end -->