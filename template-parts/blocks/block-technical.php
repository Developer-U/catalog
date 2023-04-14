<?php
/*
** Block technical capabilities
*/
?>
    <?php
    $technical_block_image = get_field('technical_block_image');
    $technical_block_right = get_field('technical_block_right');
    ?>

    <!-- section start -->
    <?php if( $technical_block_right ): ?>
        <section class="layout-pt-lg layout-pb-lg bg-dark-1">
            <!-- container start -->
            <div class="container">
            <!-- row start -->
            <div class="row align-items-center y-gap-60">

                <div class="col-lg-6 md:order-2 md:mt-88 technical-item">
                    <?php if( $technical_block_image ): ?>
                        <div data-parallax="0.7" class="ratio ratio-3:4">
                            <div data-parallax-target class="bg-image js-lazy" data-bg="<?php echo esc_url($technical_block_image['url']); ?>"></div>
                        </div>
                    <?php else: ?>
                        <div class="ratio ratio-3:4" style="background-color: rgba(0,0,0, 0.8)">                      
                        </div>
                    <?php endif; ?>
                </div>                

                <div class="col-xxl-4 col-lg-5 offset-lg-1 col-md-10 md:order-1">
                    <div data-anim="slide-up delay-1">
                        <?php if( $technical_block_right['title'] ): ?>
                            <div class="sectionHeading -sm">
                                <h2 class="sectionHeading__title text-white">
                                    <?php echo $technical_block_right['title']; ?>
                                </h2>
                            </div>
                        <?php endif; ?>

                        <?php if( $technical_block_right['description'] ): ?>
                            <p class="text-lg fw-300 text-white mt-24">
                                <?php echo $technical_block_right['description']; ?>
                            </p>
                        <?php endif; ?>

                        <div class="text-white text-base ml-minus-4 mt-32">
                            <?php if( $technical_block_right['item1'] ): ?>
                                <div class="d-flex check-wrapper">
                                    <i class="size-2xs str-width-lg text-accent mr-8" data-feather="check"></i>
                                    <p><?php echo $technical_block_right['item1']; ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if( $technical_block_right['item2'] ): ?>
                                <div class="d-flex check-wrapper mt-8">
                                    <i class="size-2xs str-width-lg text-accent mr-8" data-feather="check"></i>
                                    <p><?php echo $technical_block_right['item2']; ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if( $technical_block_right['item3'] ): ?>
                                <div class="d-flex check-wrapper mt-8">
                                    <i class="size-2xs str-width-lg text-accent mr-8" data-feather="check"></i>
                                    <p><?php echo $technical_block_right['item3']; ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if( $technical_block_right['item4'] ): ?>
                                <div class="d-flex check-wrapper mt-8">
                                    <i class="size-2xs str-width-lg text-accent mr-8" data-feather="check"></i>
                                    <p><?php echo $technical_block_right['item4']; ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if( $technical_block_right['item5'] ): ?>
                                <div class="d-flex check-wrapper mt-8">
                                    <i class="size-2xs str-width-lg text-accent mr-8" data-feather="check"></i>
                                    <p><?php echo $technical_block_right['item5']; ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if( $technical_block_right['item6'] ): ?>
                                <div class="d-flex check-wrapper mt-8">
                                    <i class="size-2xs str-width-lg text-accent mr-8" data-feather="check"></i>
                                    <p><?php echo $technical_block_right['item6']; ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if( $technical_block_right['item7'] ): ?>
                                <div class="d-flex check-wrapper mt-8">
                                    <i class="size-2xs str-width-lg text-accent mr-8" data-feather="check"></i>
                                    <p><?php echo $technical_block_right['item7']; ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if( $technical_block_right['item8'] ): ?>
                                <div class="d-flex check-wrapper mt-8">
                                    <i class="size-2xs str-width-lg text-accent mr-8" data-feather="check"></i>
                                    <p><?php echo $technical_block_right['item8']; ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if( $technical_block_right['item9'] ): ?>
                                <div class="d-flex check-wrapper mt-8">
                                    <i class="size-2xs str-width-lg text-accent mr-8" data-feather="check"></i>
                                    <p><?php echo $technical_block_right['item9']; ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if( $technical_block_right['item10'] ): ?>
                                <div class="d-flex check-wrapper mt-8">
                                    <i class="size-2xs str-width-lg text-accent mr-8" data-feather="check"></i>
                                    <p><?php echo $technical_block_right['item10']; ?></p>
                                </div>
                            <?php endif; ?>                        
                        </div>                
                    </div>
                </div>

            </div>
            <!-- row start -->
            </div>
            <!-- container start -->
        </section>
    <?php endif; ?>
    <!-- section end -->