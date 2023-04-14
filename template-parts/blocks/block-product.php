<?php
/*
** Block displaying a single product card in Listing
*/
?>

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