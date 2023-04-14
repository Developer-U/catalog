<?php
/*
** Block displaying services list
*/
?>
    <?php  
    // Получаем ID текущей страницы
    global $wp_query;
    $page_id = $wp_query->post->ID;
       
    $services_block_title = get_field('services_block_title', $page_id);
    $services_block_heading = get_field('services_block_heading', $page_id);
    $services_block_first = get_field('services_block_first', $page_id);
    $services_block_second = get_field('services_block_second', $page_id);
    $services_block_third = get_field('services_block_third', $page_id);
    $services_block_fourth = get_field('services_block_fourth', $page_id);      
    ?>

    <!-- section start -->
    <section class="layout-pt-lg layout-pb-xl">
        <!-- container start -->
        <div class="container">
        <!-- row start -->
    
        <div class="row justify-content-between">            
            <div class="sectionHeading -md">                
                <p class="sectionHeading__subtitle">
                    <?php echo $block_news_title; ?>
                </p>            

                <h2 class="text-6xl lg:text-5xl md:text-4xl sm:text-3xl fw-700">
                    <?php echo $block_news_heading; ?>
                </h2>               
            </div>
        </div>

        <div data-anim-wrap class="row x-gap-48 y-gap-48">

            <!-- services block first -->
        
                <div class="col-lg-3 col-sm-6">
                    <div class="serviceCard">
                        <div class="serviceCard__content">
                            <div class="d-flex align-items-center ml-minus-4">
                                <div class="px-20 py-20 bg-white shadow-light rounded-full">
                                <i class="size-md str-width-md text-accent" data-feather="edit"></i>
                                </div>
                            </div>

                            <h3 class="serviceCard__title text-lg sm: text-base fw-500 text-black mt-40 md:mt-32">
                                <?php echo $services_block_first['heading']; ?>
                            </h3>

                           
                                <p class="serviceCard__text mt-20 md:mt-12">
                                    <?php echo $services_block_first['description']; ?>
                                </p>
                            
                        </div>
                    </div>
                </div>   
         
            <!-- services block first end -->

            <!-- services block second -->
       
                <div class="col-lg-3 col-sm-6">
                    <div class="serviceCard">
                        <div class="serviceCard__content">
                            <div class="d-flex align-items-center ml-minus-4">
                                <div class="px-20 py-20 bg-white shadow-light rounded-full">
                                <i class="size-md str-width-md text-accent" data-feather="sliders"></i>
                                </div>
                            </div>

                            <h3 class="serviceCard__title text-lg sm: text-base fw-500 text-black mt-40 md:mt-32">
                                <?php echo $services_block_second['heading']; ?>
                            </h3>
                            
                            <p class="serviceCard__text mt-20 md:mt-12">
                                <?php echo $services_block_second['description']; ?>
                            </p>                            
                        </div>
                    </div>
                </div>   
          
            <!-- services block second end -->

            <!-- services block third -->
        
                <div class="col-lg-3 col-sm-6">
                    <div class="serviceCard">
                        <div class="serviceCard__content">
                            <div class="d-flex align-items-center ml-minus-4">
                                <div class="px-20 py-20 bg-white shadow-light rounded-full">
                                <i class="size-md str-width-md text-accent" data-feather="feather"></i>
                                </div>
                            </div>

                            <h3 class="serviceCard__title text-lg sm: text-base fw-500 text-black mt-40 md:mt-32">
                                <?php echo $services_block_third['heading']; ?>
                            </h3>
                            
                            <p class="serviceCard__text mt-20 md:mt-12">
                                <?php echo $services_block_third['description']; ?>
                            </p>                            
                        </div>
                    </div>
                </div>   
      
            <!-- services block third end -->

            <!-- services block fourth -->
         
                <div class="col-lg-3 col-sm-6">
                    <div class="serviceCard">
                        <div class="serviceCard__content">
                            <div class="d-flex align-items-center ml-minus-4">
                                <div class="px-20 py-20 bg-white shadow-light rounded-full">
                                <i class="size-md str-width-md text-accent" data-feather="move"></i>
                                </div>
                            </div>

                            <h3 class="serviceCard__title text-lg sm: text-base fw-500 text-black mt-40 md:mt-32">
                                <?php echo $services_block_fourth['heading']; ?>
                            </h3>

                      
                                <p class="serviceCard__text mt-20 md:mt-12">
                                    <?php echo $services_block_fourth['description']; ?>
                                </p>
                         
                        </div>
                    </div>
                </div>   
        
            <!-- services block fourth end -->
        </div>
        <!-- row end -->
        </div>
        <!-- container end -->
    </section>
    <!-- section end -->