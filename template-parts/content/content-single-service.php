<?php ?>
<!-- section start -->
<section class="layout-pt-lg layout-pb-lg bg-dark-1">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row justify-content-between">

            <div class="col-auto">
                <div class="d-flex text-xs tracking-md pt-4">
                    <!--                    <p class="text-accent fw-600 mr-16">01.-</p>-->
                    <p class="text-light uppercase fw-500"><?php the_field('category') ?></p>
                </div>
            </div>


            <div class="col-xl-7 col-lg-8">
                <div class="md:mt-20">
                    <h2 class="text-3xl fw-600 text-white">
                        <?php the_title() ?>
                    </h2>
                    <div class="text-lg text-white mt-24 sm:mt-16"><?php the_content(); ?></div>
                </div>
            </div>

        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
</section>
<!-- section end -->

<?php
$info1_title = get_field('info_1_title');
$info1_col = (int)get_field('info_1_col');
$info1 = get_field('info_1');
$show_info1_block = false;
foreach ($info1 as $tile) {
    if (!empty($tile['title']) && !empty($tile['text'])) $show_info1_block = true;
    break;
}
if ($show_info1_block) {
    $i = 1; ?>
    <section class="layout-pt-md layout-pb-md">
        <div class="container">
            <?php if ($info1_title) { ?>
            <div class="row">
                <div class="col-xl-5 col-lg-8 col-md-10">
                    <div class="sectionHeading -lg">
                        <p class="sectionHeading__subtitle">
                            <?php echo $info1_title ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- row start -->
            <div class="row x-gap-72 mt-32 ">
                <?php foreach ($info1 as $tile) {
                    if (!empty($tile['title']) && !empty($tile['text'])) { ?>
                        <?php if ($info1_col === 3) { ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 layout-pb-sm" data-anim="slide-up">
                            <div class="mb-16 md:mt-20">
                                <h3 class="advantage-item__title text-xl sm: text-sm fw-700 layout-pl-sm">
                                    <?php echo $tile['title'] ?>
                                </h3>                                 
                            </div>
                            <div class="">
                                <?php echo $tile['text'] ?>
                            </div>
                        </div>
                        <?php
                        } elseif ($info1_col === 2) { ?>
                            <div class="col-xl-6 col-lg-6 col-md-6 layout-pb-sm" data-anim="slide-up">
                                <div >
                                    <h3 class="advantage-item__title text-xl sm: text-sm fw-700 layout-pl-sm">
                                        <?php echo $tile['title'] ?>
                                    </h3> 

                                    <div class="">
                                        <?php echo $tile['text'] ?>
                                    </div>                                    
                                </div>
                            </div>

                        <?php
                        }
                        $i++;
                    }
                } ?>
            </div>
        </div>
    </section>

<?php } ?>


<?php $info2_title = get_field('info_2_title');
$info2 = get_field('info_2');
?>
<section class="layout-pt-md layout-pb-md bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-8 col-md-10">
                <div class="sectionHeading -lg">
                    <p class="sectionHeading__subtitle">
                        <?php echo $info2_title ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php echo get_field('info_2_html') ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/blocks/block-tools' );?>

<?php get_template_part( 'template-parts/blocks/block-request' ); ?>

<?php get_template_part( 'template-parts/blocks/block-projects-carousel' ); ?>

<?php get_template_part( 'template-parts/blocks/block-partners-black' ); ?>

