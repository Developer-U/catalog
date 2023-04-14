<?php
/*
** Block displaing cities
*/
?>

    <?php
    // Получаем ID текущей страницы
    global $wp_query;
    $page_id = $wp_query->post->ID;
     
    if( get_field('block_cities_title', $page_id) ):
        $block_cities_title = get_field('block_cities_title', $page_id);
    else :
        $block_cities_title = '';
    endif;

    if( get_field('block_cities_heading', $page_id) ):
        $block_cities_heading = get_field('block_cities_heading', $page_id);
    else :
        $block_cities_heading = 'Города';
    endif;

    if( get_field('block_cities_button_name', $page_id) ):
        $block_cities_button_name = get_field('block_cities_button_name', $page_id);
    else :
        $block_cities_button_name = 'Все города';
    endif;

    if( get_field('block_cities_button_link', $page_id) ):
        $block_cities_button_link = get_field('block_cities_button_link', $page_id);
    else :
        $block_cities_button_link = '/cities';
    endif;    
    
    ?>

    <!-- section start -->
    <section class="layout-pt-lg layout-pb-lg bg-dark-1">
        <!-- container start -->
        <div class="container">

          <!-- row start -->
          <div class="row justify-content-between align-items-end">
            <div class="col-md-6">
              <div class="sectionHeading -sm">
                <p class="sectionHeading__subtitle -light">
                    <?php echo $block_cities_title; ?>
                </p>
                <h2 class="sectionHeading__title fw-700 text-white">
                    <?php echo $block_cities_heading; ?>
                </h2>
              </div>
            </div>

            <div class="col-auto">
              <a href="<?php echo $block_cities_button_link; ?>" class="button -md -outline-white text-white sm:mt-24">
                <?php echo $block_cities_button_name; ?>
              </a>
            </div>
          </div>
          <!-- row end -->


          <!-- row start -->
          <div class="row x-gap-40 y-gap-40 layout-pt-sm">
            <?php  
                $cities = get_posts( array(
                    'posts_per_page' => 6, 
                    'numberposts' => 6,              
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',                  
                    'post_type'   => 'cities',                  
                    'suppress_filters' => true, 
                ) );

                global $post; ?>               

                <?php if( $cities) { ?>
                <?php foreach( $cities as $post ){
                    
                    setup_postdata( $post );?>                      
                                        
                    <div class="col-lg-4 col-md-6 mt-40">
                        <div class="blogCard -type-2 -hover shadow-dark rounded-4">
                            <?php $article_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>

                            <a class="blogCard__img" data-barba href="<?php the_permalink(); ?>">                               
                                <div class="bg-image js-lazy" style="background-image: url('<?php echo $article_img_url; ?>')"></div>
                            </a>

                            <div class="blogCard__content d-flex flex-column justify-content-between px-40 py-40 lg:px-32 lg:py-32 md:px-40 md:py-40">
                                <div class="mb-16">
                                    <h4 class="blogCard__title text-2xl lg:text-lg sm:text-base leading-md fw-500 text-white mt-48">
                                        <a data-barba href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h4>

                                    <div class="blogCard__text text-light mt-12">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                                
                                <a href="<?php the_permalink(); ?>" class="button -sm -outline-white text-white sm:mt-24">
                                    Смотреть объекты
                                </a>
                            </div>
                        </div>
                    </div>

                <?php }                         
                    
                } else { ?>
                    <div class="row x-gap-40 y-gap-40 layout-pt-sm"></div>
                <?php }                  
                
                wp_reset_postdata(); // сброс
                ?>           
                
            </div>
            <!-- row end -->

        </div>
        <!-- container end -->
      </section>
      <!-- section end -->