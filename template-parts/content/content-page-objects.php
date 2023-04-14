<?php
// Получаем ID текущей страницы
global $wp_query;
$page_id = $wp_query->post->ID;
    
$block_objects_title = get_field('block_objects_title', $page_id);
$block_objects_heading = get_field('block_objects_heading', $page_id);
?>

<?php get_template_part( 'template-parts/blocks/block-hero' ); ?>

<!-- section catalog -->        
    <section class="tabs layout-pt-xs layout-pb-md">
        <!-- container start -->
        <div data-anim-wrap class="container">        
            <!-- row start -->
            <div class="row justify-content-between align-items-end mb-40 sm:mb-16">
                <div class="col-md-9">
                    <div class="sectionHeading -sm">
                        <?php if($block_objects_title): ?>    
                            <p class="sectionHeading__subtitle">                
                                <?php echo $block_objects_title; ?>
                            </p>
                        <?php endif; ?>
                        <?php if($block_objects_heading): ?>  
                            <h2 class="sectionHeading__title fw-700">
                                <?php echo $block_objects_heading; ?>
                            </h2>
                        <?php endif; ?>
                    </div>
                </div>                
            </div>
            <!-- row end -->
            
            <?php 
                // Сначала выводим все рубрики объектов
                $arg_cat = array(
                    'orderby'      => 'name',
                    'order'        => 'ASC',
                    'hide_empty'   => 1,
                    'exclude'      => '3, 6',
                    'include'      => '',
                    'taxonomy'     => 'category',
                );
                $categories = get_categories( $arg_cat );
            ?>

            <div class="row x-gap-48 y-gap-48">
                <?php 
                    if( $categories ) :
                        $i = 0;
                        foreach( $categories as $cat ) :                           
                    
                            // выведем пост объекты // objects
                            $arg_posts = array(                                
                                'posts_per_page' => -1,              
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'include'     => array(),
                                'exclude'     => array(),
                                'meta_key'    => '',                        
                                'post_type'   => 'property_type',
                                'cat' => $cat->cat_ID,
                                'suppress_filters' => true, 
                                
                            );

                            $query = new WP_Query($arg_posts); ?>
                            
                            <?php
                            if ( $query->have_posts() ) : ?>
                                <article class="objects-article row mb-40 sm:mb-16 x-gap-48 y-gap-48 layout-pt-md">
                                    <h2>
                                        <?php echo $cat->name; ?> 
                                    </h2>

                                    <?php                                      
                                        p2p_type( 'property_to_cities' )->each_connected( $query );
                                        
                                        while ( $query->have_posts()):
                                            $query->the_post();
                                            $city_name =  get_post()->connected[0]->post_title;
                                            $city_id=  get_post()->connected[0]->ID;
                                            $j ++;?>                                               
                                            
                                            
                                            <!-- item start -->

                                                <div class="tab-content col-lg-4 col-sm-6 objects d-flex flex-column justify-content-between">
                                                    <div>
                                                        <?php $objects_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>
                                                        <?php if( $objects_img_url ): ?>
                                                            <a class="objects__image" href="<?php the_permalink(); ?>">                                        
                                                                <img src="<?php echo esc_url( $objects_img_url); ?>" >
                                                            </a>
                                                        <?php else: ?>
                                                            <div class="media__logo"></div>
                                                        <?php endif; ?>

                                                        <div class="objects__info mt-14">
                                                            <div data-aos="fade-up delay-1 ">                                     
                                                                <a class="objects__title" href="<?php the_permalink(); ?>">
                                                                    <h5 class="text-base sm:text-sm fw-600 mt-12">
                                                                        <?php the_title(); ?>                        
                                                                    </h5>
                                                                </a>
                                                                
                                                                <a href="<?php the_permalink( $city_id ); ?>" class="city-name text-sm text-dark fw-500">
                                                                    <?php echo 'Город:  ' . $city_name; ?>
                                                                </a>                    

                                                                <div class="objects__wrapper mt-16">
                                                                    <?php if( get_field('address') ): ?>
                                                                        <div class="d-flex objects__params object-params justify-content-between">
                                                                            <div class="object-params__key  text-sm">
                                                                                Адрес
                                                                            </div>
                                                                            <div class="object-params__value text-sm">
                                                                                <?php echo the_field('address'); ?>
                                                                            </div>
                                                                        </div>
                                                                    <?php endif; ?>

                                                                    <?php if( get_field('square') ): ?>
                                                                        <div class="d-flex objects__params mt-2 object-params justify-content-between">
                                                                            <div class="object-params__key  text-sm">
                                                                                Площадь
                                                                            </div>
                                                                            <div class="object-params__value text-sm">
                                                                                <?php echo the_field('square'); ?>&nbsp;кв.м
                                                                            </div>
                                                                        </div>
                                                                    <?php endif; ?>

                                                                    <?php if( get_field('price') ): ?>
                                                                        <div class="d-flex objects__params mt-2 object-params justify-content-between">
                                                                            <div class="object-params__key  text-sm">
                                                                                Стоимость
                                                                            </div>
                                                                            <div class="object-params__value text-sm">
                                                                                <?php echo the_field('price'); ?>&nbsp;₽
                                                                            </div>
                                                                        </div>
                                                                    <?php endif; ?>

                                                                    <?php if( get_field('floor') ): ?>
                                                                        <div class="d-flex objects__params mt-2 object-params justify-content-between">
                                                                            <div class="object-params__key  text-sm">
                                                                                Этаж
                                                                            </div>
                                                                            <div class="object-params__value text-sm">
                                                                                <?php echo the_field('floor'); ?>
                                                                            </div>
                                                                        </div>
                                                                    <?php endif; ?>

                                                                    <?php if( get_field('etazhnost') ): ?>
                                                                        <div class="d-flex objects__params mt-2 object-params justify-content-between">
                                                                            <div class="object-params__key  text-sm">
                                                                                Этажность
                                                                            </div>
                                                                            <div class="object-params__value text-sm">
                                                                                <?php echo the_field('etazhnost'); ?>
                                                                            </div>
                                                                        </div>
                                                                    <?php endif; ?>

                                                                    <?php if( get_field('uchastok_sotok') ): ?>
                                                                        <div class="d-flex objects__params mt-2 object-params justify-content-between">
                                                                            <div class="object-params__key  text-sm">
                                                                                Участок
                                                                            </div>
                                                                            <div class="object-params__value text-sm">
                                                                                <?php echo the_field('uchastok_sotok'); ?>&nbsp;соток
                                                                            </div>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </div>                              
                                                            </div>
                                                        </div> 
                                                    </div>

                                                    <a href="<?php the_permalink(); ?>" class="button -sm -outline-black text-black mt-24" style="width: fit-content">
                                                        Подробнее
                                                    </a>  
                                                </div>
                                                
                                            <!-- item end -->

                                        <?php endwhile;
                                        wp_reset_postdata();
                                    ?> 


                                </article>
                            <?php endif; ?>
                        <?php                      
                        endforeach;
                    endif;
                ?>
            </div>
        </div>
        <!-- container end -->
    </section>   


<!-- section end -->

            