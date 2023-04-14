<?php ?>

    <!-- section start -->
    <section class="layout-pt-pageHeader layout-pb-md">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row justify-content-center text-center">
            <div class="col-xl-7 col-lg-8">             
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

              <div class="sectionHeading -lg">
                <h1 class="sectionHeading__title">
                    <?php the_title(); ?>
                </h1>
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
    </section>
    <!-- section end -->

    <!-- section start -->
    <section class="layout-pt-xs layout-pb-md">

        <!-- posts start -->
        <div class="fancy-grid -col-3 -container">
            <?php                                 
            $current = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; 
            $query = new WP_Query( 
                [                          
                    'posts_per_page' => 12,
                    'paged'  => $current,                                  
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',                  
                    'post_type'   => 'cities',                  
                    'suppress_filters' => true,                                                  
                ] 
            );                                       

            global $post;
            while( $query->have_posts() ) : $query->the_post();                                   
                
            setup_postdata( $post );  ?>

                <div class="fancy-grid__item">
                    <?php $article_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>

                    <!-- blog-item start -->
                    <div class="blogPost mb-0">
                    <a data-barba href="<?php the_permalink(); ?>">
                        <div class="blogPost__img -hover">
                        <div class="bg-image ratio ratio-4:3 js-lazy" data-bg="<?php echo $article_img_url; ?>"></div>
                        </div>
                    </a>

                    <!-- blog-content start -->
                    <div class="blogPost__content mt-24">
                        <div class="blogPost__info leading-md">                        
                        </div>

                        <h3 class="blogPost__title text-2xl leading-lg fw-500 mt-12">
                            <a data-barba href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>

                        <p class="blogPost__text text-base mt-8">
                            <?php the_excerpt(); ?>
                        </p>

                        <div class="blogPost__button text-black mt-12">
                        <a data-barba href="<?php the_permalink(); ?>" class="button -icon text-black">
                            Читать
                            <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>
                        </a>
                        </div>
                    </div>
                    <!-- blog-content end -->
                    </div>
                    <!-- blog-item end -->
                </div>

            <?php endwhile; ?>
        </div>

        <?php
            echo paginate_links(
                array(
                    'prev_next' => false, 
                    'end_size' => 2,
                    'mid_size' => 2,
                    'type' => 'list', 
                    'base' => site_url() . '/cities/%_%',                                 
                    'total' => $query->max_num_pages,
                    'current' => $current
                )
            );
            wp_reset_postdata(); // сброс
        ?> 
        <!-- posts end -->
        

    </section>
    <!-- section end -->