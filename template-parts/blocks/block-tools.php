<?php
$tools = get_field('tools');
$tools_title = $tools['tools_title'] ? $tools['tools_title'] : '';
$tools_logos = null;
$tools_logos_dir = $tools['tools_logos_folder'];
if ($tools_logos_dir) {
    $fid = wp_rml_create_or_return_existing_id($tools_logos_dir, _wp_rml_root(), 0);
    $tools_logos = wp_rml_get_attachments($fid);
}
if (!empty($tools_logos)) { ?>
<section class="layout-pt-md layout-pb-md">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-8 col-md-10">
                <div class="sectionHeading -lg">
                    <p class="sectionHeading__subtitle">
                        <?php echo $tools_title ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center mt-32">
            <?php foreach ($tools_logos as $logo) { ?>
            <div class="col-xl-2 col-lg-2 col-md-3 pb-12">
                <img class="w-1/1" src="<?php echo wp_get_attachment_url($logo) ?>"
                     alt="Tool">
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>