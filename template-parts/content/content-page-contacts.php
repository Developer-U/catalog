<?php
$menu = wp_get_nav_menu_object('primary-menu');
$email = get_field('e-mail', $menu);
$phone = get_field('phone', $menu);
$phoneLink = get_field('phone-link', $menu);
$titleContacts = get_field('title-contacts', $menu);
$headingContacts = get_field('heading-contacts', $menu);
$address1Contacts = get_field('address1-contacts', $menu);
$address2Contacts = get_field('address2-contacts', $menu);
$socialContacts = get_field('social-contacts', $menu);
?>

<!-- <?php get_template_part( 'template-parts/blocks/block-modal-contact-form' ); ?> -->


    <!-- section start -->
    <section class="layout-pt-xl layout-pb-xs">
        <!-- container start -->
        <div data-anim-wrap class="container d-flex contacts-wrapper">
            <div class="col-lg-7 col-12">
                <!-- row start -->
                <div class="row">
                    <div class="col-xl-12 offset-xl-1 col-lg-11">
                        <div data-anim-child="slide-up delay-1" class="sectionHeading -sm">
                        <p class="sectionHeading__subtitle">
                            <?php echo $titleContacts; ?>
                        </p>
                        <h1 class="sectionHeading__title leading-sm">
                            <?php echo $headingContacts; ?>
                        </h1>
                        </div>
                    </div>
                </div>
                <!-- row end -->

                <!-- row start -->
                <div data-anim-child="slide-up delay-2" class="row justify-content-center layout-pt-sm">
                    <div class="col-xl-10">
                        <div class="row x-gap-48 y-gap-48">
                            <?php if( $address1Contacts ): ?>
                                <div class="col-lg-4 col-md-6 col-sm-8">
                                    <h4 class="text-lg fw-600">
                                        <?php echo $address1Contacts['name']; ?>
                                    </h4>
                                    <div class="text-dark mt-12">
                                        <p><?php echo $address1Contacts['address']; ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if( $address2Contacts ): ?>
                                <div class="col-lg-4 col-md-6 col-sm-8">
                                    <h4 class="text-lg fw-600">
                                        <?php echo $address2Contacts['name']; ?>
                                    </h4>
                                    <div class="text-dark mt-12">
                                        <p><?php echo $address2Contacts['address']; ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="col-lg-4 col-md-6">
                                <h4 class="text-lg fw-600">
                                    Для клиентов и партнёров
                                </h4>
                                <div class="text-dark mt-12">
                                <div>
                                    <a class="button -underline text-dark " style="padding:0" href="mailto:<?php echo $email;?>"><?php echo $email;?></a>
                                </div>
                                <div class="mt-4">
                                    <a class="button -underline text-dark " style="padding:0" href="tel:+7<?php echo $phoneLink;?>"><?php echo $phone;?></a>
                                </div>
                                </div>
                            </div>

                            <?php if( $socialContacts['vk'] || $socialContacts['instagram'] || $socialContacts['youtube'] ): ?>
                                <div class="col-md-auto offset-lg-1">
                                    <h4 class="text-lg fw-600">
                                        Мы в социальных сетях:
                                    </h4>
                                    <div class="social -bordered mt-16 md:mt-12">
                                        <?php if( $socialContacts['vk'] ): ?>
                                            <a class="social__item text-black border-dark" href="<?php echo $socialContacts['vk']; ?>">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        <?php endif; ?>

                                        <?php if( $socialContacts['instagram'] ): ?>
                                            <a class="social__item text-black border-dark" href="<?php echo $socialContacts['instagram']; ?>">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        <?php endif; ?>

                                        <?php if( $socialContacts['youtube'] ): ?>
                                            <a class="social__item text-black border-dark" href="<?php echo $socialContacts['youtube']; ?>">
                                                <i class="fa fa-youtube-play"></i>
                                            </a>
                                        <?php endif; ?>                                    
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>  
            
            
            <div class="col-lg-5 col-12 layout-pt-2xl lg:layout-pt-sm">
                <!-- row start -->
                <div data-anim="slide-up delay-3" class="row justify-content-center">
                    <div class="col-xl-10"> 
                        <div class="contact-form -type-1">
                            <?php echo do_shortcode('[contact-form-7 id="1351" title="Форма Связаться с нами на странице Контакты"]') ?>
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
        </div>
        <!-- container end -->
    </section>
    <!-- section end -->




