<?php
/*
** Block displaying services list
*/
?>
    <?php  
    // Получаем ID текущей страницы
    global $wp_query;
    $page_id = $wp_query->post->ID;
       
    $services2_block_title = get_field('services2_block_title', $page_id);
    $services2_block_heading = get_field('services2_block_heading', $page_id);
    $services2_block_first = get_field('services2_block_first', $page_id);
    $services2_block_second = get_field('services2_block_second', $page_id);
    $services2_block_third = get_field('services2_block_third', $page_id);         
    ?>

    <!-- section start -->
    <section class="layout-pt-sm layout-pb-sm">
        <!-- container start -->
        <div class="container">

        <!-- row start -->
    
            <div class="row justify-content-between">            
                <div class="sectionHeading -sm col-lg-10 col-12">                
                    <p class="sectionHeading__subtitle">
                        <?php echo $services2_block_title; ?>
                    </p>            

                    <h2 class="sectionHeading__title fw-700">
                        <?php echo $services2_block_heading; ?>
                    </h2>               
                </div>
            </div>

            <!-- row start -->
            <div data-anim-wrap class="row x-gap-60 y-gap-48 layout-pt-xs">

                <div class="col-lg-4 col-md-6">
                    <div class="serviceCard">
                        <div class="serviceCard__content">
                            <div class="d-flex align-items-center ml-minus-4">
                                <div data-anim-child="img-right cover-dark-2" class="px-20 py-20 bg-white shadow-light rounded-full">
                                    <i class="size-md str-width-md text-accent" data-feather="edit"></i>
                                </div>
                            </div>

                            <h3 class="serviceCard__title text-lg sm: text-base fw-500 tacking-none mt-32">
                                <a href="<?php echo site_url()?>/services#development">
                                    <?php echo $services2_block_first['heading']; ?>
                                </a>
                            </h3>

                            <p class="serviceCard__text mt-16">
                                <?php echo $services2_block_first['description']; ?>
                            </p>                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="serviceCard">
                        <div class="serviceCard__content">
                            <div class="d-flex align-items-center ml-minus-4">
                                <div data-anim-child="img-right cover-dark-2" class="px-20 py-20 bg-white shadow-light rounded-full">
                                    <i class="size-md str-width-md text-accent" data-feather="sliders"></i>
                                </div>
                            </div>

                            <h3 class="serviceCard__title text-lg sm: text-base fw-500 tacking-none mt-32">
                                <a href="<?php echo site_url()?>/services#leads">
                                    <?php echo $services2_block_second['heading']; ?>
                                </a>
                            </h3>

                            <p class="serviceCard__text mt-16">
                                <?php echo $services2_block_second['description']; ?>
                            </p>                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="serviceCard">
                        <div class="serviceCard__content">
                            <div class="d-flex align-items-center ml-minus-4">
                                <div data-anim-child="img-right cover-dark-2" class="px-20 py-20 bg-white shadow-light rounded-full">
                                    <i class="size-md str-width-md text-accent" data-feather="feather"></i>
                                </div>
                            </div>

                            <h3 class="serviceCard__title text-lg sm: text-base fw-500 tacking-none mt-32">
                                <a href="<?php echo site_url()?>/services#branding">
                                    <?php echo $services2_block_third['heading']; ?>
                                </a>
                            </h3>

                            <p class="serviceCard__text mt-16">
                                <?php echo $services2_block_third['description']; ?>
                            </p>                            
                        </div>
                    </div>
                </div>

            </div>
            <!-- row end -->

        </div>
        <!-- container end -->
    </section>
    <!-- section end -->