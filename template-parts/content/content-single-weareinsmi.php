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
                    <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
                    <!-- breadcrumbs -->
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
                  

                  <div class="masthead__tags">
                                 
                  </div>
                </div>

                <div data-split="lines">
                  <h1 class="masthead__title text-white fw-600 leading-md mt-40 md:mt-24 js-title">
                        <?php the_title(); ?>
                  </h1>
                </div>
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
                <div class="col-lg-8">
                <div class="blogPost -single -light">
                    <div class="blogPost__content">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div class="blogPost tags">
                        Tagged with:

                        <!-- Выведем все метки данного поста -->
                        <?php if ( is_active_sidebar( 'sidebar-blog' ) ) : ?>

                        <div id="sidebar-blog" class="tagcloud">

                            <?php dynamic_sidebar( 'sidebar-blog' ); ?>

                        </div>

                        <?php endif; ?>
                
                </div>

                <div class="blogPost comments">
                    <div class="blogPost__content">
                        <!-- <h2 class="blogPost__title text-3xl fw-600">
                            6 comments
                        </h2> -->
                        <?php
                        $args = [
                            'fields' => '<input type="text" class="mt-32 name" placeholder="Ваше имя *" required ><input type="email" class="mt-32 mail" placeholder="Ваш e-mail *" required>',
                        ];
                        comment_form( $args, $post_id = null ); 
                        ?>

                        <?php
                        $data = [
                            'comment_post_ID'      => 1,
                            'comment_author'       => 'admin',
                            'comment_author_email' => 'admin@admin.com',
                            'comment_author_url'   => 'http://',
                            'comment_content'      => 'текст коммента',
                            'comment_type'         => 'comment',
                            'comment_parent'       => 0,
                            'user_id'              => 1,
                            'comment_author_IP'    => '127.0.0.1',
                            'comment_agent'        => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.10) Gecko/2009042316 Firefox/3.0.10 (.NET CLR 3.5.30729)',
                            'comment_date'         => current_time('mysql'),
                            'comment_approved'     => 1,
                        ];

                        wp_insert_comment( $data ); ?>

                        <?php comments_template( '/comments.php' ); ?>
                      
                    </div>
                    
                </div>
            </div>

            <!-- sidebar -->
            <?php get_template_part( 'template-parts/blocks/block-article-sidebar' ); ?>

          
        </div>
        <!-- container end -->
    </section>
    <!-- section end -->