<?php
/*
** Block objects // Блок листинга объектов недвижимости
*/
?>
    <?php
    // Получаем ID текущей страницы
    global $wp_query;
    $page_id = $wp_query->post->ID;
        
    $block_objects_title = get_field('block_objects_title', $page_id);
    $block_objects_heading = get_field('block_objects_heading', $page_id);

    if( get_field('block_objects_button_name', $page_id) ):
        $block_objects_button_name = get_field('block_objects_button_name', $page_id);
    else :
        $block_objects_button_name = 'Все объекты';
    endif;

    if( get_field('block_news_button_link', $page_id) ):
        $block_objects_button_link = get_field('block_objects_button_link', $page_id);
    else :
        $block_objects_button_link = '/objects';
    endif;  
    ?>
    
    <?php if( $block_objects_heading ): ?>
        <!-- section start -->
        <section class="tabs layout-pt-md layout-pb-md">
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

                    <div class="col-auto">
                        <a href="<?php echo $block_objects_button_link; ?>" class="button -md -outline-black text-black sm:mt-24">
                            <?php echo $block_objects_button_name; ?>
                        </a>
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
                    
                    $cache_key = 'section_cat';
                    $categories = wp_cache_get( $cache_key );
                    if( !$categories ) {
                        $categories = get_categories( $arg_cat );
                        wp_cache_set( $cache_key, $categories );
                    }                            
                ?> 

                <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <?php                            
                        if( $categories ){
                            $i = 0;                                
                            foreach( $categories as $cat ){
                            $i ++;  
                            $active_tab = 1 === $i ? 'uk-active' : '';                       
                            ?>                                    
                                <li class="nav-item <?php echo esc_html( $active_tab ); ?>">
                                    <a href="#" class="nav-link"><?php echo esc_html( $cat->name ); ?></a>
                                </li>

                            <?php		
                            }
                        }
                    ?>
                </ul>

                <?php
                    // Find connected pages
                    $connected = new WP_Query( array(
                    'connected_type' => 'property_to_cities',
                    'connected_items' => get_queried_object('cities'),
                    'nopaging' => true,
                    ) );

                    // Display connected pages
                    if ( $connected->have_posts() ) :
                    ?>
                    <h3>Город:</h3>
                    <ul>
                    <?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; ?>
                    </ul>

                    <?php 
                    // Prevent weirdness
                    wp_reset_postdata();

                    endif;
                ?>

                <div class="tab-content row x-gap-48 y-gap-48 layout-pt-md">
                    <?php 
                        if( $categories ) :
                            $i = 0;
                            foreach( $categories as $cat ) :
                                $i ++;
                                $active_target = 1 === $i ? 'uk-active' : '';
                        
                                // выведем пост объекты // objects
                                $arg_posts = array(                                
                                    'posts_per_page' => 6,              
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
                                    <article class="tab-pane row x-gap-48 y-gap-48 layout-pt-md <?php echo esc_html( $active_target ); ?>">
                                        <?php
                                            $j = 0;

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
                            $i ++;
                            endforeach;
                        endif;
                    ?>
                </div>
            </div>
            <!-- container end -->
        </section>
        <!-- section end -->
    <?php endif; ?>

<script>
    window.addEventListener('DOMContentLoaded', function(){
       
    // Табы на главной странице по типам недвижимости
    // Присвоим атрибуты data-path и data-target кнопкам и табам для логики табов
    var pathNums = document.querySelectorAll('.nav-item'); // все кнопки 
    var targetNums = document.querySelectorAll('.tab-pane'); // все группы объектов      
    // console.log(targetNums.length);
    // console.log(pathNums.length);

    if(targetNums.length == pathNums.length) {
        var len = targetNums.length;  
    }
    
    var Num  = "1";  // Обозначим переменную, в которую будм заносить число           
    
    for(let n=0; n< len; n++) { // перебираем все циклом 
        // console.log(n);             
        Num = n; // Присвоим переменной число цикла
        targetNums[n].setAttribute('data-target', Num); // Добавляем атрибут кнопкам
        pathNums[n].setAttribute('data-path', Num); // Добавляем атрибут артиклам         
    }    
    
    // Зададим в переменную первый item
    var firstMegaItem = document.querySelector('.nav-item:first-of-type');  

    document.querySelectorAll('.nav-item').forEach(function(tabsMenuBtn){ 
        tabsMenuBtn.addEventListener('click', function(event){
            event.preventDefault();
            const path = event.currentTarget.dataset.path;

            document.querySelectorAll('.nav-item').forEach(function(oneTabItem){
                oneTabItem.classList.remove('uk-active');              
            });				

            // Определим текущую ссылку
            var currentLink =  document.querySelector(`[data-path='${path}']`);           
                    
            // И сразу при клике сделаем её активной			
            currentLink.classList.add('uk-active');
            
            // Зададим условие: если текущая ссылка равна первой, то первую делаем активной
            if(currentLink == firstMegaItem) {
                firstMegaItem.classList.add('uk-active');
            }					
        
            // Итерируем табы и закрываем все открытые табы
            document.querySelectorAll('.tab-pane').forEach(function(tabContent){
                tabContent.classList.remove('uk-active');
        
                // Зададим в переменную первый Таб (в стилях делаем первый элемент открытым)        
                var firstTab = document.querySelector('.tab-pane:first-of-type');
                
                // Соответственно при клике на любую кнопку его сразу закрываем
                firstTab.style.display = 'none';
        
                // Закинем в переменную текущий Таб с соответствующим атрибутом data-target       
                var currentTab = document.querySelector(`[data-target="${path}"]`);
        
                
                if(currentTab.getAttribute('data-target') == firstTab.getAttribute('data-target')) {
                    firstTab.style.display = 'flex';
                    firstTab.classList.add('uk-active');
                } else {
                    firstTab.style.display = 'none';
        
                    currentTab.classList.add('uk-active');
                }  
            });  
                
        });
    }); 
    
        
});
</script>
   