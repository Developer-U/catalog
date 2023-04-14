<?php
$small_header = get_field('about_small_header');
$large_header = get_field('about_large_header');
$text = get_field('about_text');
$image = get_field('about_img');
$button = get_field('about_button');
?>

<?php if( $large_header ): ?>
    <!-- section start -->
    <section class="layout-pt-sm layout-pb-sm">
        <!-- container start -->
        <div class="container-fluid px-0">
            <!-- row start -->
            <div data-anim-wrap class="row no-gutters align-items-center">

                <div class="col-lg-6 z-1">
                    <div data-anim-child="img-right cover-white delay-1">
                        <div class="ratio ratio-3:2" data-parallax="1">
                            <img data-parallax-target class="js-lazy" src="#" data-src="<?php echo $image ?>" alt="Back image" style="object-fit: contain;">
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-lg-4 z-2 ml-80 md:ml-0 md:mt-48">
                    <div class="sectionHeading -xl md:container pt-16">
                        <?php if ($small_header) { ?>
                        <div data-anim-child="slide-up delay-8">
                            <p class="sectionHeading__subtitle">
                                <?php echo $small_header ?>
                            </p>
                        </div>
                        <?php } ?>
                        <?php if ($large_header) { ?>
                        <div data-anim-child="slide-up delay-9" class="ml-minus-col-1 lg:ml-minus-lg mr-minus-col-2 md:ml-0 md:mr-0">
                            <h2 class="sectionHeading__title mt-48 md:mt-24">
                                <?php echo $large_header ?>
                            </h2>
                        </div>
                        <?php } ?>
                        <?php if ($text) { ?>
                        <div data-anim-child="slide-up delay-10">
                            <p class="mt-56 lg:mt-40 md:mt-20">
                                <?php echo $text ?>
                            </p>
                        </div>
                        <?php } ?>
                        <?php if ($button['text'] && $button['link']) { ?>
                        <div data-anim-child="slide-up delay-11">
                            <a data-barba href="<?php echo $button['link'] ?>" class="button -md -outline-black text-black mt-56 lg:mt-48 md:mt-32">
                                <?php echo $button['text'] ?>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </section>
    <!-- section end -->
<?php endif; ?>
