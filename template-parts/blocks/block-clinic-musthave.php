<?php
/*
** Block clinic must have
*/
?>
    <?php
    $clinic_musthave_title = get_field('clinic_musthave_title');
    $clinic_musthave_heading = get_field('clinic_musthave_heading');
    $clinic_musthave_text_before = get_field('clinic_musthave_text_before');
    $clinic_musthave_text_after = get_field('clinic_musthave_text_after');
    $clinic_musthave_text_list = get_field('clinic_musthave_text_list');
    ?>

    <?php if( $clinic_musthave_heading ): ?>
        <!-- section advantages start -->
        <section class="layout-pt-xl layout-pb-md">
            <!-- container start -->
            <div data-anim-wrap class="container">
                <!-- row start -->
                <div class="col-xl-10 col-12">                
                    <div data-anim-child="slide-up" class="sectionHeading -sm row">
                        <p class="sectionHeading__subtitle">
                        <?php echo $clinic_musthave_title; ?>
                        </p>
                        <h2 class="sectionHeading__title fw-700">
                        <?php echo $clinic_musthave_heading; ?>
                        </h2>
                    </div>               
                </div>
                <!-- row end -->

                <!-- row start -->
                <?php if( $clinic_musthave_text_before ): ?>
                    <div class="layout-pt-xs">
                        <p class="fw-400 layout-pl-sm" data-anim="slide-left">
                            <?php echo $clinic_musthave_text_before; ?>
                        </p>
                    </div>
                <?php endif; ?>  
                <!-- row end -->
                
                <!-- first row start -->
                <div class="mt-32">
                    <!-- advantage -->
                    <?php if( $clinic_musthave_text_list['one'] ): ?>
                        <div class="advantage-item" data-anim="slide-left delay-1">                    
                            <div class="advantage-item__content">
                                <p class="advantage-item__title  fw-400 layout-pl-sm">
                                    <?php echo $clinic_musthave_text_list['one']; ?>
                                </p>
                            </div>
                        </div>  
                    <?php endif; ?>              
                    <!-- advantage end -->

                    <!-- advantage -->
                    <?php if( $clinic_musthave_text_list['two'] ): ?>
                        <div class="advantage-item" data-anim="slide-left delay-2">                    
                            <div class="advantage-item__content">
                                <p class="advantage-item__title mt-16  fw-400 layout-pl-sm">
                                    <?php echo $clinic_musthave_text_list['two']; ?>
                                </p>
                            </div>
                        </div>  
                    <?php endif; ?>              
                    <!-- advantage end -->

                    <!-- advantage -->
                    <?php if( $clinic_musthave_text_list['three'] ): ?>
                        <div class="advantage-item" data-anim="slide-left delay-3">                    
                            <div class="advantage-item__content">
                                <p class="advantage-item__title mt-16  fw-400 layout-pl-sm">
                                    <?php echo $clinic_musthave_text_list['three']; ?>
                                </p>
                            </div>
                        </div>  
                    <?php endif; ?>              
                    <!-- advantage end -->

                    <!-- advantage -->
                    <?php if( $clinic_musthave_text_list['four'] ): ?>
                        <div class="advantage-item" data-anim="slide-left delay-4">                    
                            <div class="advantage-item__content">
                                <p class="advantage-item__title mt-16  fw-400 layout-pl-sm">
                                    <?php echo $clinic_musthave_text_list['four']; ?>
                                </p>
                            </div>
                        </div>  
                    <?php endif; ?>              
                    <!-- advantage end -->

                    <!-- advantage -->
                    <?php if( $clinic_musthave_text_list['five'] ): ?>
                        <div class="advantage-item" data-anim="slide-left delay-5">                    
                            <div class="advantage-item__content">
                                <p class="advantage-item__title mt-16  fw-400 layout-pl-sm">
                                    <?php echo $clinic_musthave_text_list['five']; ?>
                                </p>
                            </div>
                        </div>  
                    <?php endif; ?>              
                    <!-- advantage end -->

                    <!-- advantage -->
                    <?php if( $clinic_musthave_text_list['six'] ): ?>
                        <div class="advantage-item" data-anim="slide-left delay-6">                    
                            <div class="advantage-item__content">
                                <p class="advantage-item__title mt-16  fw-400 layout-pl-sm">
                                    <?php echo $clinic_musthave_text_list['six']; ?>
                                </p>
                            </div>
                        </div>  
                    <?php endif; ?>              
                    <!-- advantage end -->

                    <!-- advantage -->
                    <?php if( $clinic_musthave_text_list['seven'] ): ?>
                        <div class="advantage-item" data-anim="slide-left delay-7">                    
                            <div class="advantage-item__content">
                                <p class="advantage-item__title mt-16  fw-400 layout-pl-sm">
                                    <?php echo $clinic_musthave_text_list['seven']; ?>
                                </p>
                            </div>
                        </div>  
                    <?php endif; ?>              
                    <!-- advantage end -->

                    <!-- advantage -->
                    <?php if( $clinic_musthave_text_list['eight'] ): ?>
                        <div class="advantage-item" data-anim="slide-left delay-8">                    
                            <div class="advantage-item__content">
                                <p class="advantage-item__title mt-16  fw-400 layout-pl-sm">
                                    <?php echo $clinic_musthave_text_list['eight']; ?>
                                </p>
                            </div>
                        </div>  
                    <?php endif; ?>              
                    <!-- advantage end -->
                </div>
                <!-- row end -->

                <!-- row start -->
                <?php if( $clinic_musthave_text_after ): ?>
                    <div class="mt-32">
                        <p class=" fw-400 layout-pl-sm" data-anim="slide-left delay-6">
                            <?php echo $clinic_musthave_text_after; ?>
                        </p>
                    </div>
                <?php endif; ?>  
                <!-- row end -->

            </div>
            <!-- container end -->
        </section>
        <!-- section end -->
    <?php endif; ?>