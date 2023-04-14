<?php
$ideology_title = get_field('ideology_title');
$ideology_block1 = get_field('ideology_block1');
$ideology_block2 = get_field('ideology_block2');
$ideology_block3 = get_field('ideology_block3');
?>
<!-- section start -->
<section id="aboutId" class="layout-pt-md layout-pb-md">
    <!-- container start -->
    <div class="container">

        <!-- row start -->
        <div class="row">
            <div class="col-xl-5 col-lg-8 col-md-10">
                <div class="sectionHeading -lg">
                    <p class="sectionHeading__subtitle">
                        <?php echo $ideology_title ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- row end -->


        <!-- row start -->
        <div class="row x-gap-60 y-gap-48 layout-pt-xs">
            <div class="col-lg-4 col-md-6">
                <div class="">
                    <h4 class="text-xl fw-600">
                        <?php echo $ideology_block1['title']?>
                    </h4>
                    <p class="mt-16">
                        <?php echo $ideology_block1['description']?>
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="">
                    <h4 class="text-xl fw-600">
                        <?php echo $ideology_block2['title']?>
                    </h4>
                    <p class="mt-16">
                        <?php echo $ideology_block2['description']?>
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="">
                    <h4 class="text-xl fw-600">
                        <?php echo $ideology_block3['title']?>
                    </h4>
                    <p class="mt-16">
                        <?php echo $ideology_block3['description']?>
                    </p>
                </div>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->
</section>
<!-- section end -->
