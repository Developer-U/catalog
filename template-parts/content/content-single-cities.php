<?php

?>

    <!-- section start -->
    <section class="masthead -blog js-masthead-blog-article" data-parallax="0.7">
        <!-- masthead__img start -->
        <div class="masthead__img overlay-black-md" data-parallax-target>
              <?php $article_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>
          <div class="bg-image js-lazy" style="background-image: url(<?php echo $article_img_url; ?>)"></div>
        </div>
        <!-- masthead__img end -->

        <!-- masthead__content start -->
        <div class="masthead__content">
          <div class="container">
            <div class="row">
              <div class="col-xl-9 col-lg-10">
                <div class="d-flex align-items-center text-white js-info">
                  <div class="masthead__date">                    
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
                  </div>                  
                </div>
                
                <h1 class="masthead__title text-white fw-600 leading-md mt-40 md:mt-24">
                      <?php the_title(); ?>
                </h1>
                
              </div>
            </div>
          </div>
        </div>
        <!-- masthead__content end -->
    </section>
    <!-- section end -->


    <!-- section start -->
    <section class="layout-pt-md layout-pb-lg">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
            <div class="row no-gutters justify-content-between">                
                <div class="blogPost -single -light">
                    <div class="blogPost__content">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div class="blogPost__wrap row x-gap-48 y-gap-48 layout-pt-md">
                  <?php
                      // Find connected posts
                      $connected = new WP_Query( array(
                        'connected_type' => 'property_to_cities',
                        'connected_items' => get_queried_object(),
                        'nopaging' => true,
                      ) );

                      // Display connected pages
                      if ( $connected->have_posts() ) :
                      ?>
                      <h3>Объекты недвижимости:</h3>

                      <article class="tab-pane row x-gap-48 y-gap-48 layout-pt-md">
                        <?php while ( $connected->have_posts() ) : $connected->the_post(); ?>

                          <?php get_template_part('template-parts/blocks/block-product'); ?>
                        
                        <?php endwhile; ?>
                      <article>

                      <?php 
                      // Prevent weirdness
                      wp_reset_postdata();

                      endif;
                      ?>
                </div>                
            </div>
        </div>
        <!-- container end -->
    </section>
    <!-- section end -->