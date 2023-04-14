<?php
/*
** Block displaying Expert speach
*/
?>
    <?php  
    // Получаем ID текущей страницы
    global $wp_query;
    $page_id = $wp_query->post->ID;       
    
    $expert_image = get_field('expert_image', $page_id);
    $expert_textblock = get_field('expert_textblock', $page_id);    
    ?>


    <?php if( $expert_textblock['heading'] && is_page('advocat') ): ?>
        <section class="layout-pt-lg layout-pb-lg bg-dark-1">
            <!-- container start -->
            <div class="container">
            <!-- row start -->
            <div data-anim-wrap class="row align-items-center">

                <div class="col-lg-6 z-1 md:order-1 md:mt-40">
                <div data-anim-child="img-right cover-dark-2 delay-2">
                    <?php if( $expert_image ): ?>
                    <div class="expert__image">
                        <img src="<?php echo esc_url($expert_image['url']); ?>" alt="<?php echo esc_url($expert_image['alt']); ?>">                        
                    </div>
                    <?php else: ?>
                        <div class="expert__image" style="background-color: rgba(0,0,0, 0.8)">
                        
                        </div>
                    <?php endif; ?>
                </div>
                </div>


                <div class="col-lg-5 offset-lg-1 col-md-9 z-2 md:order-0">
                <div class="sectionHeading -sm pt-16">
                    <div data-anim-child="slide-up delay-9">
                    <p class="sectionHeading__subtitle -light">
                        <?php echo $expert_textblock['category']; ?>
                    </p>
                    </div>
                    <div data-anim-child="slide-up delay-10">
                    <h2 class="sectionHeading__title fw-700 text-white">
                        <?php echo $expert_textblock['heading']; ?>
                    </h2>
                    </div>
                    <div data-anim-child="slide-up delay-11">
                    <p class="text-light mt-32 md:mt-20">
                        <?php echo $expert_textblock['text']; ?>
                    </p>
                    </div>
                    <div data-anim-child="slide-up delay-11">
                    <p class="text-light mt-64 lg:mt-40 sm:mt-20 text-2xl sm:text-lg">
                        <?php echo $expert_textblock['name']; ?>
                    </p>
                    </div>
                    <div data-anim-child="slide-up delay-11">
                    <p class="text-light mt-24 md:mt-16">
                        <?php echo $expert_textblock['post']; ?>
                    </p>
                    </div>
                </div>
                </div>

            </div>
            <!-- row end -->
            </div>
            <!-- container end -->
        </section>    
    <?php elseif( $expert_textblock['heading'] && is_page('audit') ): ?>
        <section class="layout-pt-lg layout-pb-lg bg-white">
            <!-- container start -->
            <div class="container">
            <!-- row start -->
            <div data-anim-wrap class="row align-items-center">

                <div class="col-lg-6 z-1 md:order-1 md:mt-40">
                    <div data-anim-child="img-right cover-dark-2 delay-2 ">
                        <?php if( $expert_image ): ?>
                            <div class="expert__image">
                                <img src="<?php echo esc_url($expert_image['url']); ?>" alt="<?php echo esc_url($expert_image['alt']); ?>">                        
                            </div>
                        <?php else: ?>
                            <div class="expert__image" style="background-color: rgba(0,0,0, 0.8)">
                            
                            </div>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="col-lg-5 offset-lg-1 col-md-9 z-2 md:order-0">
                <div class="sectionHeading -md pt-16">
                    <div data-anim-child="slide-up delay-9">
                    <p class="sectionHeading__subtitle">
                        <?php echo $expert_textblock['category']; ?>
                    </p>
                    </div>
                    <div data-anim-child="slide-up delay-10">
                    <h2 class="text-6xl lg:text-5xl md:text-4xl sm:text-3xl fw-700">
                        <?php echo $expert_textblock['heading']; ?>
                    </h2>
                    </div>
                    <div data-anim-child="slide-up delay-11">
                    <p class=" mt-32 md:mt-20">
                        <?php echo $expert_textblock['text']; ?>
                    </p>
                    </div>
                    <div data-anim-child="slide-up delay-11">
                    <p class="mt-64 lg:mt-40 sm:mt-20 text-2xl sm:text-lg text-black">
                        <?php echo $expert_textblock['name']; ?>
                    </p>
                    </div>
                    <div data-anim-child="slide-up delay-11">
                    <p class="mt-24 md:mt-16 text-black">
                        <?php echo $expert_textblock['post']; ?>
                    </p>
                    </div>
                </div>
                </div>

            </div>
            <!-- row end -->
            </div>
            <!-- container end -->
        </section>
    <?php endif; ?>
    <!-- section end -->