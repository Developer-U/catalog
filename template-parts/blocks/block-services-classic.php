<?php
/*
** Block displaying classic services list without icons
*/
?>
    <?php  
    // Получаем ID текущей страницы
    global $wp_query;
    $page_id = $wp_query->post->ID;

    $services_classic_heading = get_field('services_classic_heading', $page_id);
    $services_classic_first = get_field('services_classic_first', $page_id);
    $services_classic_second = get_field('services_classic_second', $page_id);
    $services_classic_third = get_field('services_classic_third', $page_id);  
    $services_classic_fourth = get_field('services_classic_fourth', $page_id);
    $services_classic_fifth = get_field('services_classic_fifth', $page_id);     
    $services_classic_sixth = get_field('services_classic_sixth', $page_id);  
    ?>

    <!-- section start services-->
        <section class="layout-pt-lg layout-pb-lg">
            <!-- container start -->
            <div data-anim-wrap class="container">

            <!-- row start -->
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-10">
                <div data-anim-child="slide-up" class="sectionHeading -sm">           
                    <h2 class="sectionHeading__title fw-700">
                        <?php echo $services_classic_heading; ?>
                    </h2>
                </div>
                </div>
            </div>
            <!-- row end -->


            <!-- row start -->            
            <div class="row x-gap-60 y-gap-60 layout-pt-xs">
                <?php if( $services_classic_first['heading'] ): ?>
                    <div class="col-lg-4 col-md-6">
                        <div data-anim-child="slide-up delay-2" class="serviceCard">
                        <div class="serviceCard__content"> 
                            <h3 class="serviceCard__title text-lg sm: text-base fw-500 tacking-none">
                                <?php echo $services_classic_first['heading']; ?>
                            </h3>                

                            <div class="text-black">
                            <p class=""><?php echo $services_classic_first['item_1']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_first['item_2']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_first['item_3']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_first['item_4']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_first['item_5']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_first['item_6']; ?></p>
                            </div>
                        </div>
                        </div>
                    </div> 
                <?php endif; ?>

                <?php if( $services_classic_second['heading'] ): ?>
                    <div class="col-lg-4 col-md-6">
                        <div data-anim-child="slide-up delay-2" class="serviceCard">
                        <div class="serviceCard__content">
                            <h3 class="serviceCard__title text-lg sm: text-base fw-500 tacking-none">
                                <?php echo $services_classic_second['heading']; ?>
                            </h3>                

                            <div class="text-black">
                            <p class=""><?php echo $services_classic_second['item_1']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_second['item_2']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_second['item_3']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_second['item_4']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_second['item_5']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_second['item_6']; ?></p>
                            </div>
                        </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if( $services_classic_third['heading'] ): ?>
                    <div class="col-lg-4 col-md-6">
                        <div data-anim-child="slide-up delay-2" class="serviceCard">
                        <div class="serviceCard__content">
                            <h3 class="serviceCard__title text-lg sm: text-base fw-500 tacking-none">
                                <?php echo $services_classic_third['heading']; ?>
                            </h3>                

                            <div class="text-black">
                            <p class=""><?php echo $services_classic_third['item_1']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_third['item_2']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_third['item_3']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_third['item_4']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_third['item_5']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_third['item_6']; ?></p>
                            </div>
                        </div>
                        </div>
                    </div>
                <?php endif; ?>     
                
                <?php if( $services_classic_fourth['heading'] ): ?>
                    <div class="col-lg-4 col-md-6">
                        <div data-anim-child="slide-up delay-2" class="serviceCard">
                        <div class="serviceCard__content">
                            <h3 class="serviceCard__title text-lg sm: text-base fw-500 tacking-none">
                                <?php echo $services_classic_fourth['heading']; ?>
                            </h3>                

                            <div class="text-black">
                            <p class=""><?php echo $services_classic_fourth['item_1']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_fourth['item_2']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_fourth['item_3']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_fourth['item_4']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_fourth['item_5']; ?></p>
                            <p class="mt-8"><?php echo $services_classic_fourth['item_6']; ?></p>
                            </div>
                        </div>
                        </div>
                    </div>  
                <?php endif; ?>

                <?php if( $services_classic_fifth['heading'] ): ?>
                    <div class="col-lg-4 col-md-6">
                        <div data-anim-child="slide-up delay-2" class="serviceCard">
                            <div class="serviceCard__content">
                                <h3 class="serviceCard__title text-lg sm: text-base fw-500 tacking-none">
                                    <?php echo $services_classic_fifth['heading']; ?>
                                </h3>                

                                <div class="text-black">
                                <p class=""><?php echo $services_classic_fifth['item_1']; ?></p>
                                <p class="mt-8"><?php echo $services_classic_fifth['item_2']; ?></p>
                                <p class="mt-8"><?php echo $services_classic_fifth['item_3']; ?></p>
                                <p class="mt-8"><?php echo $services_classic_fifth['item_4']; ?></p>
                                <p class="mt-8"><?php echo $services_classic_fifth['item_5']; ?></p>
                                <p class="mt-8"><?php echo $services_classic_fifth['item_6']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div> 
                <?php endif; ?>
                
                <?php if( $services_classic_sixth['heading'] ): ?>
                    <div class="col-lg-4 col-md-6">
                        <div data-anim-child="slide-up delay-2" class="serviceCard">
                            <div class="serviceCard__content">
                                <h3 class="serviceCard__title text-lg sm: text-base fw-500 tacking-none">
                                    <?php echo $services_classic_sixth['heading']; ?>
                                </h3>                

                                <div class="text-black">
                                <p class=""><?php echo $services_classic_sixth['item_1']; ?></p>
                                <p class="mt-8"><?php echo $services_classic_sixth['item_2']; ?></p>
                                <p class="mt-8"><?php echo $services_classic_sixth['item_3']; ?></p>
                                <p class="mt-8"><?php echo $services_classic_sixth['item_4']; ?></p>
                                <p class="mt-8"><?php echo $services_classic_sixth['item_5']; ?></p>
                                <p class="mt-8"><?php echo $services_classic_sixth['item_6']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div> 
                <?php endif; ?>
            </div>
            <!-- row end -->

            </div>
            <!-- container end -->
        </section>
    <!-- section end -->