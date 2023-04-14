<?php
/*
** Block displaying pricing
*/
?>
    <?php  
    // Получаем ID текущей страницы
    global $wp_query;
    $page_id = $wp_query->post->ID;   
 
    $pricing_title = get_field('pricing_title', $page_id);
    $pricing_heading = get_field('pricing_heading', $page_id);
    $pricing_first = get_field('pricing_first', $page_id);
    $pricing_second = get_field('pricing_second', $page_id);
    $pricing_third = get_field('pricing_third', $page_id);
    $pricing_fourth = get_field('pricing_fourth', $page_id);
    $pricing_fifth = get_field('pricing_fifth', $page_id);
    $pricing_sixth = get_field('pricing_sixth', $page_id);
    ?>

    <!-- section start pricing-->
    <section class="pricing layout-pt-lg layout-pb-lg">
        <!-- container start -->
        <div data-anim-wrap class="container">

        <!-- row start -->
        <div class="row justify-content-between">       
            <div data-anim-child="slide-up" class="sectionHeading -sm">
                <?php if( $pricing_title ): ?> 
                    <p class="sectionHeading__subtitle">
                        <?php echo $pricing_title; ?>
                    </p> 
                <?php endif; ?>

                <h2 class="sectionHeading__title fw-700">
                    <?php echo $pricing_heading; ?>
                </h2>
            </div>       
        </div>
        <!-- row end -->
        
        <!-- row start -->
        <div class="row align-items-stretch x-gap-40 y-gap-40 layout-pt-md">
            <?php if( $pricing_first['name'] ): ?>
                <div class="col-lg-4 col-md-6 pricing__item">
                    <div data-anim-child="slide-up delay-2" class="priceCard py-40 px-40 rounded-base shadow-light">
                        <div class="priceCard__content">
                            <div class="priceCard__item">
                                <h3 class="priceCard__title text-xl  lg: text-lg sm: text-base fw-700">
                                    <?php echo $pricing_first['name']; ?>
                                </h3>

                                <h3 class="priceCard__price text-3xl md: text-2xl sm: text-base text-black fw-700 mt-24">
                                    <?php echo $pricing_first['price']; ?>&nbsp;₽
                                </h3>

                                <?php
                                if( $pricing_first['price_more'] ): ?>
                                <p class="priceCard__badge text-sm fw-500 mt-32">
                                    <?php echo $pricing_first['price_more']; ?>
                                </p>
                                <?php endif; ?>

                                <p class="text-black fw-500 mt-24">
                                    <?php echo $pricing_first['description']; ?>
                                </p>

                                <div class="priceCard__list mt-24">                
                                    <?php echo $pricing_first['contains']; ?>                               
                                </div>
                            </div>                        

                            <?php if( $pricing_first['bottom_name'] ): ?>
                                <div class="priceCard__button mt-32">
                                    <a href="<?php echo $pricing_first['bottom_link']; ?>" class="button -sm -outline-black text-black">
                                        <?php echo $pricing_first['bottom_name']; ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if( $pricing_second['name'] ): ?>
                <div class="col-lg-4 col-md-6 pricing__item">
                    <div data-anim-child="slide-up delay-3" class="priceCard py-40 px-40 rounded-base shadow-light ">
                    <div class="priceCard__content">
                        <div class="priceCard__item">
                            <h3 class="priceCard__title text-xl  lg: text-lg sm: text-base fw-700">
                                <?php echo $pricing_second['name']; ?>
                            </h3>

                            <h3 class="priceCard__price  text-3xl md: text-2xl sm: text-base text-black fw-700 mt-24">
                                <?php echo $pricing_second['price']; ?>&nbsp;₽
                            </h3>
                        
                            <?php
                            if( $pricing_second['price_more'] ): ?>
                            <p class="priceCard__badge text-sm fw-500 mt-32">
                                <?php echo $pricing_second['price_more']; ?>
                            </p>
                            <?php endif; ?>

                            <p class="text-black fw-500  mt-24">
                                <?php echo $pricing_second['description']; ?>
                            </p>

                            <div class="priceCard__list  mt-24">                
                                <?php echo $pricing_second['contains']; ?>                               
                            </div>
                        </div>

                        <?php if( $pricing_second['bottom_name'] ): ?>
                            <div class="priceCard__button mt-32">
                                <a href="<?php echo $pricing_second['bottom_link']; ?>" class="button -sm -outline-black text-black">
                                    <?php echo $pricing_second['bottom_name']; ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if( $pricing_third['name'] ): ?>
                <div class="col-lg-4 col-md-6 pricing__item">
                    <div data-anim-child="slide-up delay-2" class="priceCard py-40 px-40 rounded-base shadow-light">
                        <div class="priceCard__content">
                            <div class="priceCard__item">
                                <h3 class="priceCard__title text-xl  lg: text-lg sm: text-base fw-700">
                                    <?php echo $pricing_third['name']; ?>
                                </h3>

                                <h3 class="priceCard__price text-3xl md: text-2xl sm: text-base text-black fw-700 mt-24">
                                    <?php echo $pricing_third['price']; ?>&nbsp;₽
                                </h3>
                                
                                <?php
                                if( $pricing_third['price_more'] ): ?>
                                <p class="priceCard__badge text-sm fw-500 mt-32">
                                    <?php echo $pricing_third['price_more']; ?>
                                </p>
                                <?php endif; ?>

                                <p class="text-black fw-500 mt-24">
                                    <?php echo $pricing_third['description']; ?>
                                </p>

                                <div class="priceCard__list mt-24">                
                                    <?php echo $pricing_third['contains']; ?>                               
                                </div>
                            </div>

                            <?php if( $pricing_third['bottom_name'] ): ?>
                                <div class="priceCard__button mt-32">
                                    <a href="<?php echo $pricing_third['bottom_link']; ?>" class="button -sm -outline-black text-black">
                                        <?php echo $pricing_third['bottom_name']; ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if( $pricing_fourth['name'] ): ?>
                <div class="col-lg-4 col-md-6 pricing__item">
                    <div data-anim-child="slide-up delay-2" class="priceCard py-40 px-40 rounded-base shadow-light">
                        <div class="priceCard__content">
                            <div class="priceCard__item">
                                <h3 class="priceCard__title text-xl  lg: text-lg sm: text-base fw-700">
                                    <?php echo $pricing_fourth['name']; ?>
                                </h3>

                                <h3 class="priceCard__price text-3xl md: text-2xl sm: text-base text-black fw-700 mt-24">
                                    <?php echo $pricing_fourth['price']; ?>&nbsp;₽
                                </h3>
                                
                                <?php
                                if( $pricing_fourth['price_more'] ): ?>
                                <p class="priceCard__badge text-sm fw-500 mt-32">
                                    <?php echo $pricing_fourth['price_more']; ?>
                                </p>
                                <?php endif; ?>

                                <p class="text-black fw-500 mt-24">
                                    <?php echo $pricing_fourth['description']; ?>
                                </p>

                                <div class="priceCard__list mt-24">                
                                    <?php echo $pricing_fourth['contains']; ?>                               
                                </div>
                            </div>

                            <?php if( $pricing_fourth['bottom_name'] ): ?>
                                <div class="priceCard__button mt-32">
                                    <a href="<?php echo $pricing_fourth['bottom_link']; ?>" class="button -sm -outline-black text-black">
                                        <?php echo $pricing_fourth['bottom_name']; ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if( $pricing_fifth['name'] ): ?>
                <div class="col-lg-4 col-md-6 pricing__item">
                    <div data-anim-child="slide-up delay-3" class="priceCard py-40 px-40 rounded-base shadow-light ">
                        <div class="priceCard__content">
                            <div class="priceCard__item">
                                <h3 class="priceCard__title text-xl  lg: text-lg sm: text-base fw-700">
                                    <?php echo $pricing_fifth['name']; ?>
                                </h3>

                                <h3 class="priceCard__price  text-3xl md: text-2xl sm: text-base text-black fw-700 mt-24">
                                    <?php echo $pricing_fifth['price']; ?>&nbsp;₽
                                </h3>
                                
                                <?php
                                if( $pricing_fifth['price_more'] ): ?>
                                <p class="priceCard__badge text-sm fw-500 mt-32">
                                    <?php echo $pricing_fifth['price_more']; ?>
                                </p>
                                <?php endif; ?>

                                <p class="text-black fw-500  mt-24">
                                    <?php echo $pricing_fifth['description']; ?>
                                </p>

                                <div class="priceCard__list  mt-24">                
                                    <?php echo $pricing_fifth['contains']; ?>                               
                                </div>
                            </div>

                            <?php if( $pricing_fifth['bottom_name'] ): ?>
                                <div class="priceCard__button mt-32">
                                    <a href="<?php echo $pricing_fifth['bottom_link']; ?>" class="button -sm -outline-black text-black ">
                                        <?php echo $pricing_fifth['bottom_name']; ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if( $pricing_sixth['name'] ): ?>
                <div class="col-lg-4 col-md-6 pricing__item">
                    <div data-anim-child="slide-up delay-2" class="priceCard py-40 px-40 rounded-base shadow-light">
                        <div class="priceCard__content">
                            <div class="priceCard__item">
                                <h3 class="priceCard__title text-xl  lg: text-lg sm: text-base fw-700">
                                    <?php echo $pricing_sixth['name']; ?>
                                </h3>

                                <h3 class="priceCard__price text-3xl md: text-2xl sm: text-base text-black fw-700 mt-24">
                                    <?php echo $pricing_sixth['price']; ?>
                                </h3>
                                
                                <?php
                                if( $pricing_sixth['price_more'] ): ?>
                                <p class="priceCard__badge text-sm fw-500 mt-32">
                                    <?php echo $pricing_sixth['price_more']; ?>
                                </p>
                                <?php endif; ?>

                                <p class="text-black fw-500 mt-24">
                                    <?php echo $pricing_sixth['description']; ?>
                                </p>

                                <div class="priceCard__list mt-24">                
                                    <?php echo $pricing_sixth['contains']; ?>                               
                                </div>
                            </div>

                            <?php if( $pricing_sixth['bottom_name'] ): ?>
                                <div class="priceCard__button mt-32">
                                    <a href="<?php echo $pricing_sixth['bottom_link']; ?>" class="button -sm -outline-black text-black">
                                        <?php echo $pricing_sixth['bottom_name']; ?>
                                    </a>
                                </div>
                            <?php endif; ?>
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