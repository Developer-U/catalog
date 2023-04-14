<?php
// Получаем ID текущей страницы
global $wp_query;
$page_id = $wp_query->post->ID;

$projects_number = get_field('projects_number', $page_id) ? get_field('projects_number', $page_id) : -1;
$projects_main = get_field('projects_main', $page_id);
if ($projects_main) {
    $projects_main = array_values($projects_main);
    $projects_main = array_filter($projects_main, function($value) {return !empty($value) || $value === 0;});
    if (!empty($projects_main)) {
        $projects_main_query = new WP_Query( [
                'post_type' => 'project',
                'post__in' => $projects_main
            ]
        ) ;
    }
    if ($projects_number !== -1) $projects_number = $projects_number - count($projects_main); 
}
if ($projects_number !== 0) {
    $projects_query_args = ['post_type' => 'project', 'showposts' => $projects_number ];
    if (!empty($projects_main)) {
        $projects_query_args['post__not_in'] = $projects_main;
    }
    $projects_query = new WP_Query( $projects_query_args );
}

$projects_small_header = get_field('projects_small_header', $page_id);
$projects_large_header = get_field('projects_large_header', $page_id);
?>
<!-- section start -->
<section class="layout-pt-sm layout-pb-sm bg-dark-2">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-6">
                <div class="sectionHeading -sm">
                    <?php if ($projects_small_header) { ?>
                        <p class="sectionHeading__subtitle -light">
                            <?php echo $projects_small_header ?>
                        </p>
                    <?php } else { ?>
                        <p class="sectionHeading__subtitle -light">
                            проекты
                        </p>
                    <?php } ?>
                    <?php if ($projects_large_header) { ?>
                    <h2 class="sectionHeading__title text-white">
                        <?php echo $projects_large_header ?>
                    </h2>
                    <?php } ?>
                </div>
            </div>

            <div class="col-auto md:mt-24">
                <a href="<?php echo site_url()?>/projects" class="button -md -white text-black">
                    Смотреть все
                </a>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->

    <!-- container start -->
    <div class="container-wide">
        <div class="layout-pt-xs js-section-slider" data-slider-col="base-4 lg-4 md-2 sm-1" data-gap="40"
             data-pagination>
            <div class="swiper-wrapper">
                <?php if ( $projects_main && $projects_main_query->have_posts() ) {
                    while ( $projects_main_query->have_posts() ) {
                        $projects_main_query->the_post();
                        $projects_service_subcategory = get_field('project_service_subcategory');
                        if (is_array($projects_service_subcategory)) $projects_service_subcategory = implode(', ', $projects_service_subcategory) ?>
                        <div class="swiper-slide slider-slide shadow-dark">
                            <div data-anim="slide-up delay-1" class="portfolioCard -type-2 -hover">
                                <div class="portfolioCard__img">
                                    <div class="portfolioCard__img__inner">
                                        <div class="ratio ratio-2:3 bg-image swiper-lazy"
                                             data-background="<?php the_post_thumbnail_url(); ?>"></div>
                                    </div>
                                </div>

                                <div class="portfolioCard__content text-center">
                                    <span href="#" class="portfolioCard__category text-light"><?php echo $projects_service_subcategory ?></span>
                                    <h3 class="portfolioCard__title fw-500 text-2xl mt-4 text-white">
                                        <?php the_title() ?>
                                    </h3>
                                </div>
                                <?php if (get_post_status() === 'publish') { ?>
                                <a class="portfolioCard__link" data-barba href="<?php the_permalink(); ?>"></a>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php wp_reset_postdata(); ?>
                <?php } ?>
                <?php if ($projects_number !== 0 && $projects_query->have_posts() ) {
                while ( $projects_query->have_posts() ) {
                    $projects_query->the_post();
                    $projects_service_subcategory = get_field('project_service_subcategory');
                    if (is_array($projects_service_subcategory)) $projects_service_subcategory = implode(', ', $projects_service_subcategory) ?>
                <div class="swiper-slide slider-slide shadow-dark">
                    <div data-anim="slide-up delay-1" class="portfolioCard -type-2 -hover">
                        <div class="portfolioCard__img">
                            <div class="portfolioCard__img__inner">
                                <div class="ratio ratio-2:3 bg-image swiper-lazy"
                                     data-background="<?php the_post_thumbnail_url(); ?>"></div>
                            </div>
                        </div>

                        <div class="portfolioCard__content text-center">
                            <span href="#" class="portfolioCard__category text-light"><?php echo $projects_service_subcategory ?></span>
                            <h3 class="portfolioCard__title fw-500 text-2xl mt-4 text-white">
                                <?php the_title() ?>
                            </h3>
                        </div>
                        <?php if (get_post_status() === 'publish') { ?>
                        <a class="portfolioCard__link" data-barba href="<?php the_permalink(); ?>"></a>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
                <?php wp_reset_postdata(); ?>
                <?php } ?>
            </div>

            <div class="pagination -light js-pagination pb-4 layout-pt-sm"></div>
        </div>
    </div>
    <!-- container end -->
</section>
<!-- section end -->
