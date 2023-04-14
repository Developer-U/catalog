<?php
/*
** Block trust for any pages
*/
?>
    <?php
    // Получаем ID текущей страницы
    global $wp_query;
    $page_id = $wp_query->post->ID;

    $block_trust_title = get_field('block_trust_title', $page_id);
    $block_trust_heading = get_field('block_trust_heading', $page_id);
    $block_trust_expert_first = get_field('block_trust_expert_first', $page_id);
    $block_trust_expert_second = get_field('block_trust_expert_second', $page_id);
    $block_trust_expert_third = get_field('block_trust_expert_third', $page_id);
    ?>

    <!-- section advantages start -->
    <?php if( $block_trust_title ): ?>
        <section class="layout-pt-xl layout-pb-md">
            <!-- container start -->
            <div data-anim-wrap class="container">
                <!-- row start -->                                   
                <div data-anim-child="slide-right" class="sectionHeading -sm">
                    <p class="sectionHeading__subtitle">
                    <?php echo $block_trust_title; ?>
                    </p>
                    <h2 class="sectionHeading__title fw-700">
                    <?php echo $block_trust_heading; ?>
                    </h2>
                </div>                   
                
                <!-- row end -->
                
                <!-- row start -->
                <div class="row x-gap-40 y-gap-40 layout-pt-md">
                    <!-- first_block -->
                    <?php if( $block_trust_expert_first['heading'] ): ?>
                        <div class="col-lg-4 col-md-6 col-12 slide-up" data-anim="slide-up delay-1"> 
                            <figure class="trust__image">
                                <img src="<?php echo esc_url($block_trust_expert_first['image']['url']); ?>" alt="<?php echo esc_attr($block_trust_expert_first['image']['alt']); ?>">
                            </figure>

                            <h4 class="teamCard__title mt-32 text-xl md:text-lg sm:text-sm  fw-700">
                                <?php echo $block_trust_expert_first['heading']; ?>
                            </h4>

                            <p class="teamCard__text mt-4 text-base md:text-sm fw-400">
                                <?php echo $block_trust_expert_first['description']; ?>
                            </p> 
                        </div>  
                    <?php endif; ?>
                    <!-- first_block end-->

                    <!-- second_block -->
                    <?php if( $block_trust_expert_second['heading'] ): ?>
                        <div class="col-lg-4 col-md-6 col-12 sm:mt-32" data-anim="slide-up delay-2"> 
                            <figure class="trust__image">
                                <img src="<?php echo esc_url($block_trust_expert_second['image']['url']); ?>" alt="<?php echo esc_attr($block_trust_expert_second['image']['alt']); ?>">
                            </figure>

                            <h4 class="teamCard__title mt-32 text-xl md:text-lg sm:text-sm  fw-700">
                                <?php echo $block_trust_expert_second['heading']; ?>
                            </h4>

                            <p class="teamCard__text mt-4 text-base md:text-sm fw-400">
                                <?php echo $block_trust_expert_second['description']; ?>
                            </p> 
                        </div>  
                    <?php endif; ?>
                    <!-- second_block end-->

                    <!-- third_block -->
                    <?php if( $block_trust_expert_third['heading'] ): ?>
                        <div class="col-lg-4 col-md-6 col-12 sm:mt-32" data-anim="slide-up delay-3"> 
                            <figure class="trust__image">
                                <img src="<?php echo esc_url($block_trust_expert_third['image']['url']); ?>" alt="<?php echo esc_attr($block_trust_expert_third['image']['alt']); ?>">
                            </figure>

                            <h4 class="teamCard__title mt-32 text-xl md:text-lg sm:text-sm  fw-700">
                                <?php echo $block_trust_expert_third['heading']; ?>
                            </h4>

                            <p class="teamCard__text mt-4 text-base md:text-sm fw-400">
                                <?php echo $block_trust_expert_third['description']; ?>
                            </p> 
                        </div>  
                    <?php endif; ?>
                    <!-- third_block end-->
                </div>

            </div>
            <!-- container end -->
        </section>
    <?php endif; ?>
    <!-- section end -->