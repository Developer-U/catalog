<?php
$partners_small_header = get_field('partners_small_header');
$partners_large_header = get_field('partners_large_header');

$logos = null;
$logos_dir = get_field('partners_logos_folder');
if ($logos_dir) {
    $fid = wp_rml_create_or_return_existing_id($logos_dir, _wp_rml_root(), 0);
    $logos = wp_rml_get_attachments($fid);
}

if ($logos) { ?>
<!-- section start -->
<section class="layout-pt-sm layout-pb-sm">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row align-items-end justify-content-between">
            <div class="col-xl-5 col-md-7">
                <div class="sectionHeading -sm">
                    <?php if ($partners_small_header) { ?>
                    <p class="sectionHeading__subtitle text-black">
                        <?php echo $partners_small_header ?>
                    </p>
                    <?php } ?>
                    <?php if ($partners_large_header) { ?>
                        <h2 class="sectionHeading__title text-black">
                            <?php echo $partners_large_header ?>
                        </h2>
                    <?php } ?>
                </div>
            </div>

            <div class="col-md-auto col-sm-12 sm:mt-24">
                <a href="#modal-contact-form" class="glightbox button -md -black text-white" data-glightbox="width: 900; height: auto;">
                    Начать проект
                </a>
            </div>
        </div>
        <!-- row end -->

        <?php if (!empty($logos)) { ?>
        <!-- row start -->
        <div class="row y-gap-32 layout-pt-xs">
            <?php foreach ($logos as $logo) { ?>
            <div class="col-lg-3 col-sm-6">
                <div data-anim="slide-up delay-1" class="clientsItem ratio ratio-3:2 border-dark rounded-4 py-4">
                    <div class="clientsItem__img">
                        <img class="col-7" src="<?php echo wp_get_attachment_url($logo) ?>" alt="Client">
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- row end -->
        <?php } ?>

    </div>
    <!-- container end -->
</section>
<!-- section end -->
<?php } ?>