<?php
/*
** Block displaying hero (first screen) block
*/
?>
    <?php  
    // Получаем ID текущей страницы
    global $wp_query;
    $page_id = $wp_query->post->ID;
        
    $banner_large_text = get_field('banner_large_text', $page_id);
    $banner_small_text = get_field('banner_small_text', $page_id);
    $banner_button = get_field('banner_button', $page_id);
    $banner_social = get_field('banner_social', $page_id);
    $banner_image = get_field('banner_image', $page_id);
    ?>

    <?php
    if( is_front_page()): ?>

        <!-- section start hero black-->
        
        <section data-parallax="0.6" class="hero hero-black masthead -type-1 bg-dark-2 js-masthead-type-1 js-shapes" style="background-image: url('<?php echo esc_url($banner_image['url']); ?>'); overflow: hidden;" >
            <!-- container start -->
            <div class="container-fluid">
                <div class="masthead__content layout-pt-sm z-3">
                    <!-- row start -->
                    <div class="row justify-content-center">
                        <div class="col-xl-8 offset-xl-1 col-lg-9 offset-lg-1 col-md-9 sm:px-24">
                        
                            <div >
                                <h1 class="masthead__title fw-700 text-white col-12">
                                    <?php echo $banner_large_text ?>
                                </h1>
                            </div>                       
                        
                            <p class="masthead__text text-light mt-40 md:mt-32 sm:mt-24 js-text">
                                <?php echo $banner_small_text ?>
                            </p>
                    
                            <?php if ($banner_button['text'] && $banner_button['link']): ?>
                                <div class="masthead__button mt-40 sm:mt-32 js-button">
                                    <a href="<?php echo $banner_button['link'] ?>" class="button -md -outline-white text-white">
                                        <?php echo $banner_button['text'] ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- row end -->
                </div>
            </div>
            <!-- container end -->

            <!-- ui-element start -->
            <div class="ui-element -bottom-left sm:d-none js-ui">
                <button type="button" class="ui-element__scroll text-white js-ui-scroll-button">
                    Вниз
                    <i class="icon" data-feather="arrow-down"></i>
                </button>
            </div>
            <!-- ui-element end -->

            <!-- ui-element start -->
            <div class="ui-element -bottom-right js-ui">

                
            </div>
            <!-- ui-element end -->
        </section>
        <!-- section start hero black end -->
    
    <?php else: ?>
        <!-- section hero white-->
        <section class="hero hero-white masthead -type-2 js-masthead js-masthead-type-2" style="overflow: hidden; background-image: url('<?php echo esc_url($banner_image['url']); ?>')">
            <!-- container start -->
            <div class="container-fluid">
                <div class="masthead__content layout-pt-sm z-3">
                    <!-- row start -->
                    <div class="row justify-content-center">
                        <div class="col-xl-8 offset-xl-1 col-lg-9 offset-lg-1 col-md-9 sm:px-24">
                            <!-- breadcrumbs Yoast SEO-->
                            <div class="breadcrumbs">
                                <div class="breadcrumbs__container">
                                    <?php
                                        if ( function_exists('yoast_breadcrumb') ) {
                                        yoast_breadcrumb( '<div class="breadcrumbs__list">','</div>' );
                                        }
                                    ?>
                                </div>
                            </div>
                            <!-- breadcrumbs end --> 
                            <h1 class="masthead__title fw-700 js-title">
                                <?php echo $banner_large_text; ?>
                            </h1>                                               
                            
                            <?php if ($banner_small_text) { ?>
                            <p class="masthead__text mt-40 md:mt-32 sm:mt-24 js-text col-xl-8 col-12">
                                <?php echo $banner_small_text; ?>
                            </p>
                            <?php } ?>                            
                        </div>
                    </div>
                    <!-- row end -->
                </div>
            </div>
            <!-- container end -->
        </section>    
        <!-- section hero white end -->

    <?php endif; ?>