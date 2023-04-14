<?php
$development = get_field('development');
$development_img = $development['image'] ? $development['image'] :  get_stylesheet_directory_uri().'/assets/img/services/development.png';
$development_txt = $development['text'];
$development_links = $development['links'];
$development_button = $development['button'];

$leads = get_field('leads');
$leads_img = $leads['image'] ? $development['image'] :  get_stylesheet_directory_uri().'/assets/img/services/leads.jpg';
$leads_txt = $leads['text'];
$leads_links = $leads['links'];
$leads_button = $leads['button'];

$branding = get_field('branding');
$branding_img = $branding['image'] ? $development['image'] :  get_stylesheet_directory_uri().'/assets/img/services/branding.png';
$branding_txt = $branding['text'];
$branding_links = $branding['links'];
$branding_button = $branding['button'];
?>
<!-- section start -->
<section class="layout-pt-lg layout-pb-lg bg-dark-1">
    <!-- container start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-md-12">
                <div class="sectionHeading -sm">
                    <p class="sectionHeading__subtitle -light">
                        Услуги
                    </p>

                </div>
            </div>
        </div>

        <!-- row start -->
        <div class="row align-items-center" id="development">

            <div class="col-lg-6 md:order-2 md:mt-48">
                <div data-parallax="0.7" class="ratio ratio-3:4">
                    <div data-parallax-target class="bg-image js-lazy" data-bg="<?php echo $development_img ?>"></div>
                </div>
            </div>

            <div class="col-lg-4 offset-lg-1 col-md-10 md:order-1">
                <div data-anim="slide-up delay-1">
                    <div class="d-flex">
                        <div class="px-20 py-20 bg-white rounded-full d-flex align-items-center justify-content-center">
                            <i class="size-md str-width-md text-accent" data-feather="edit"></i>
                        </div>
                    </div>

                    <h2 class="text-4xl sm:text-3xl fw-500 text-white mt-32">
                        Разработка
                    </h2>

                    <p class="text-lg fw-300 text-white mt-24">
                        <?php echo $development_txt ?>
                    </p>

                    <div class="text-white text-base ml-minus-4 mt-32">
                        <?php if ($development_links) {
                            foreach ($development_links as $link) {
                                $post_id = url_to_postid($link);
                                $link_text = get_the_title($post_id); ?>
                                <div class="d-flex align-items-center">
                                    <i class="size-2xs str-width-lg text-accent mr-8" data-feather="check"></i>
                                    <p><a href="<?php echo $link ?>"><?php echo $link_text ?></a></p>
                                </div>
                            <?php }
                        }?>
                    </div>
                    <?php if ($development_button['link'] && $development_button['text']) { ?>
                    <div class="mt-32">
                        <a href="<?php echo $development_button['link'] ?>" class="button -icon text-lg text-white">
                            <?php echo $development_button['text'] ?>
                            <i class="icon size-sm str-width-md ml-4" data-feather="arrow-right-circle"></i>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
        <!-- row start -->
    </div>
    <!-- container start -->
</section>
<!-- section end -->


<!-- section start -->
<section class="layout-pt-md layout-pb-md bg-dark-1" id="leads">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row align-items-center">

            <div class="col-lg-4 col-md-10 md:order-1">
                <div data-anim="slide-up delay-1">
                    <div class="d-flex">
                        <div class="px-20 py-20 bg-white rounded-full d-flex align-items-center justify-content-center">
                            <i class="size-md str-width-md text-accent" data-feather="sliders"></i>
                        </div>
                    </div>

                    <h2 class="text-4xl sm:text-3xl fw-500 text-white mt-32">
                        Лидогенерация
                    </h2>

                    <p class="text-lg fw-300 text-white mt-24">
                        <?php echo $leads_txt ?>
                    </p>

                    <div class="text-white text-base ml-minus-4 mt-32">
                        <?php if ($leads_links) {
                            foreach ($leads_links as $link) {
                                $post_id = url_to_postid($link);
                                $link_text = get_the_title($post_id); ?>
                                <div class="d-flex align-items-center">
                                    <i class="size-2xs str-width-lg text-accent mr-8" data-feather="check"></i>
                                    <p><a href="<?php echo $link ?>"><?php echo $link_text ?></a></p>
                                </div>
                            <?php }
                        }?>
                    </div>

                    <?php if ($leads_button['link'] && $leads_button['text']) { ?>
                        <div class="mt-32">
                            <a href="<?php echo $leads_button['link'] ?>" class="button -icon text-lg text-white">
                                <?php echo $leads_button['text'] ?>
                                <i class="icon size-sm str-width-md ml-4" data-feather="arrow-right-circle"></i>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col-lg-7 offset-lg-1 md:order-2 md:mt-48">
                <div data-parallax="0.7" class="ratio ratio-4:3">
                    <div data-parallax-target class="bg-image js-lazy" data-bg="<?php echo $leads_img ?>"></div>
                </div>
            </div>

        </div>
        <!-- row start -->
    </div>
    <!-- container start -->
</section>
<!-- section end -->


<!-- section start -->
<section class="layout-pt-lg layout-pb-lg bg-dark-1" id="branding">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row align-items-center">

            <div class="col-lg-6 md:order-2 md:mt-48">
                <div data-parallax="0.7" class="ratio ratio-1:1">
                    <div data-parallax-target class="bg-image js-lazy" data-bg="<?php echo $branding_img ?>"></div>
                </div>
            </div>

            <div class="col-lg-4 offset-lg-1 col-md-10 md:order-1">
                <div data-anim="slide-up delay-1">
                    <div class="d-flex">
                        <div class="px-20 py-20 bg-white rounded-full d-flex align-items-center justify-content-center">
                            <i class="size-md str-width-md text-accent" data-feather="feather"></i>
                        </div>
                    </div>

                    <h2 class="text-4xl sm:text-3xl fw-500 text-white mt-32">
                        Брендинг
                    </h2>

                    <p class="text-lg fw-300 text-white mt-24">
                        <?php echo $branding_txt ?>
                    </p>

                    <div class="text-white text-base ml-minus-4 mt-32">
                        <?php if ($branding_links) {
                            foreach ($branding_links as $link) {
                                $post_id = url_to_postid($link);
                                $link_text = get_the_title($post_id); ?>
                                <div class="d-flex align-items-center">
                                    <i class="size-2xs str-width-lg text-accent mr-8" data-feather="check"></i>
                                    <p><a href="<?php echo $link ?>"><?php echo $link_text ?></a></p>
                                </div>
                            <?php }
                        }?>
                    </div>

                    <?php if ($branding_button['link'] && $branding_button['text']) { ?>
                        <div class="mt-32">
                            <a href="<?php echo $leads_button['link'] ?>" class="button -icon text-lg text-white">
                                <?php echo $leads_button['text'] ?>
                                <i class="icon size-sm str-width-md ml-4" data-feather="arrow-right-circle"></i>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
        <!-- row start -->
    </div>
    <!-- container start -->
</section>
<!-- section end -->

<?php get_template_part( 'template-parts/blocks/block-partners-white' ); ?>

<?php get_template_part( 'template-parts/blocks/block-request' ); ?>
