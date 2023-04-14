<?php
/*
** Block displaying Sidebar on page Blog and single article
*/
?>

    <!-- sidebar start -->
    <div class="col-lg-4 md:mt-64 sm:mt-4">
        <aside class="blogSidebar widget_area">

        <!-- widget start -->
        <div class="widget widget_search">
            <div class="">
            <form action="#" class="search__form">
                <div class="search__wrap">
                <input type="search" class="search__field" placeholder="Search">
                <button class="search__button">
                    <i class="icon" data-feather="search"></i>
                </button>
                </div>
            </form>
            </div>
        </div>
        <!-- widget end -->


        <!-- widget start -->
        <div class="widget widget_categories">
            <h5 class="widget-title">
                Категории
            </h5>

            <?php
            $args = array(
            'orderby' => 'DESC',                  
            'title_li' => '',
            'show_count' => 1
            );
            
            wp_list_categories($args);
            ?>
            
        </div>
        <!-- widget end -->


        <!-- widget start -->
        <div class="widget widget_archive">
            <h5 class="widget-title">
                Посты по месяцам
            </h5>
            <ul>
                <?php echo get_blix_archive(0, '<li>', '</li>', 0, 'articles', 2); ?>
            </ul>            
        </div>
        <!-- widget end -->


        <!-- widget start -->
        <div class="widget widget_recent_entries">
            <h5 class="widget-title">
                Самое свежее
            </h5>

            <ul>
            <?php
            // Выведем названия статей и новостей
            $postsBlog = get_posts( array(
                'numberposts' => 12,                
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',                
                'post_type'   => 'articles',                 
                'suppress_filters' => true, 
            ) );

            global $post; ?>               

                <?php if( $postsBlog) { ?>
                <?php foreach( $postsBlog as $post ){
                ?>

                <li>
                    <span class="post-date"><?php echo get_the_date(); ?></span>
                    <a data-barba href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>

                <?php }                         
                
                } else { ?>
                    <div></div>
                <?php }                  
                
                wp_reset_postdata(); // сброс
                ?> 
            </ul>
        </div>
        <!-- widget end --> 

        <!-- widget start -->
        <div class="widget widget_tag_cloud">
            <h5 class="widget-title">
                Метки
            </h5>
            
            <?php if ( is_active_sidebar( 'sidebar-blog' ) ) : ?>

            <div id="sidebar-blog" class="tagcloud">
            
                <?php dynamic_sidebar( 'sidebar-blog' ); ?>
            
            </div>
            
            <?php endif; ?>
            
        </div>
        <!-- widget end -->

        </aside>
    </div>
    <!-- sidebar end -->