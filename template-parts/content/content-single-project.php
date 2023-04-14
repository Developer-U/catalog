<?php
$category = get_field('project_service_category');
if (is_array($category)) $category = implode(', ', $category);
$subcategory = get_field('project_service_subcategory');
if (is_array($subcategory)) $subcategory = implode(', ', $subcategory);
$client = get_field('project_client');
$link = get_field('project_link')
?>
<!-- section start -->
<section class="masthead -type-work-1 sm:text-center js-masthead-type-work-1 js-shapes">
    <!-- shapes start -->
    <div class="masthead-shapes -group-4">
        <div class="masthead-shapes__item -item-1">
            <div class="masthead-shapes__shape -white -shadow-light js-shape"></div>
        </div>
        <div class="masthead-shapes__item -item-2">
            <div class="masthead-shapes__shape -white -shadow-light js-shape"></div>
        </div>
    </div>
    <!-- shapes end -->

    <!-- masthead__content start -->
    <div class="masthead__content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-sm-10 z-3">
                    <div data-split="lines">
                        <p class="masthead__subtitle text-lg sm:text-base mb-32 sm:mb-24 js-subtitle">
                            <?php echo $category.'&nbsp;/&nbsp;'.$subcategory ?>
                        </p>
                    </div>

                    <div data-split="lines">
                        <h1 class="text-6xl lg:text-5xl sm:3xl fw-700 js-title">
                            <?php the_title() ?>
                        </h1>
                    </div>

                    <div class="masthead__info__wrap">
                        <div class="row y-gap-32">
                            <?php if ($client) { ?>
                            <div class="col-lg-auto  col-sm-6">
                                <div class="masthead__info">
                                    <div data-split="lines" class="masthead__item js-info-item">
                                        <h5 class="text-lg leading-sm fw-600">Бренд/Клиент</h5>
                                        <p class="text-lg leading-sm mt-12 sm:mt-8"><?php echo $client ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($link) { ?>
                            <div class="col-lg-auto offset-lg-1 col-sm-6">
                                <div class="masthead__info">
                                    <div data-split="lines" class="masthead__item js-info-item">
                                        <h5 class="text-lg leading-sm fw-600">Ссылка</h5>
                                        <p class="text-lg leading-sm mt-12 sm:mt-8"><a href="<?php echo $link ?>"><?php echo $link ?></a></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- masthead__content end -->

    <!-- container start -->
    <div class="container-wide z-5 relative">
        <div data-parallax="0.7" class="h-90vh z-5 js-image">
            <div data-parallax-target class="bg-image js-lazy" data-bg="<?php the_post_thumbnail_url(); ?>"></div>
        </div>

        <div class="container layout-pt-md layout-pb-md post">
            <?php the_content(); ?>
        </div>
    </div>
    <!-- container end -->
</section>
<!-- section end -->

<!-- section start -->
<?php
$prev_project = get_previous_post();
$next_project = get_next_post();
?>
<section class="projects-nav bg-dark-1">
    <!-- row start -->
    <div class="row no-gutters">
        <div class="col-lg-6">
            <?php if ($prev_project) { ?>
            <a data-barba href="<?php echo get_the_permalink($prev_project->ID) ?>" class="projects-nav__item -prev bg-dark-1">
                <div class="projects-nav__img">
                    <div class="bg-image js-lazy" data-bg="<?php echo get_the_post_thumbnail_url($prev_project->ID)?>"></div>
                </div>

                <div class="projects-nav__content">
                    <div class="projects-nav__icon">
                        <i class="size-xl str-width-xs text-white" data-feather="arrow-left-circle"></i>
                    </div>

                    <h3 class="text-4xl fw-400 tracking-none text-white">
                        <?php echo get_the_title($prev_project->ID) ?>
                    </h3>

                    <p class="projects-nav__text -prev text-sm fw-500 text-white tracking-md uppercase">
                        Предыдущий
                    </p>
                </div>
            </a>
            <?php } ?>
        </div>


        <div class="col-lg-6">
            <?php if ($next_project) { ?>
            <a data-barba href="<?php echo get_the_permalink($next_project->ID) ?>" class="projects-nav__item -next bg-dark-1">
                <div class="projects-nav__img">
                    <div class="bg-image js-lazy" data-bg="<?php echo get_the_post_thumbnail_url($next_project->ID)?>"></div>
                </div>

                <div class="projects-nav__content">
                    <h3 class="text-4xl fw-400 tracking-none text-white">
                        <?php echo get_the_title($next_project->ID) ?>
                    </h3>

                    <div class="projects-nav__icon">
                        <i class="size-xl str-width-xs text-white" data-feather="arrow-right-circle"></i>
                    </div>

                    <p class="projects-nav__text -next text-sm fw-500 text-white tracking-md uppercase">
                        Следующий
                    </p>
                </div>
            </a>
            <?php } ?>
        </div>

    </div>
    <!-- row end -->
</section>
<!-- section end -->
