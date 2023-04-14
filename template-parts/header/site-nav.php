<?php
/**
 * Displays the site navigation.
 */
$menu = wp_get_nav_menu_object('primary-menu');
$address = get_field('address', $menu);
$email = get_field('e-mail', $menu);
$phone = get_field('phone', $menu);
$social = get_field('social', $menu);
$show_social = false;
if (isset($social)) {
    foreach ($social as $link) {
        if (!empty($link)) {
            $show_social = true;
            break;
        }
    }
}
?>

<!-- Подключаем основное меню -->
<?php if ( has_nav_menu( 'primary' ) ) : ?> 
    <nav class="nav js-nav">
        <div class="nav__inner js-nav-inner">
            <div class="nav__bg js-nav-bg"></div>

            <div class="nav__container">
                <div class="nav__header">
                    <button type="button" class="nav-button-back js-nav-back">
                        <i class="icon" data-feather="arrow-left-circle"></i>
                    </button>

                    <button type="button" class="nav-btn-close js-nav-close pointer-events-none">
                        <i class="icon" data-feather="x"></i>
                    </button>
                </div>

                <div class="nav__content">
                    <div class="nav__content__left">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'primary',
                                'menu_class'      => 'navList js-navList',
                                'container_class' => 'navList__wrap',
                                'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
                                'fallback_cb'     => false,
                                'link_before'          => '<span class="">',
                                'link_after'           => '</span>',
                            )
                        );
                        ?>
                    </div>
                    <div class="nav__content__right">
                        <div class="nav__info">
                            <?php if ($address) { ?>
                            <div class="nav__info__item js-navInfo-item">
                                <h5 class="text-sm tracking-none fw-500">
                                    Адрес
                                </h5>

                                <div class="nav__info__content text-lg text-white mt-16">
                                    <p>
                                        <?php echo $address ?>
                                    </p>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($show_social) { ?>
                            <div class="nav__info__item js-navInfo-item">
                                <h5 class="text-sm tracking-none fw-500">
                                    Соцсети
                                </h5>
                                <?php if ($social['vk']) { ?>
                                <div class="nav__info__content text-lg text-white mt-16">
                                    <a href="<?php echo $social['vk'] ?>">VK</a>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } ?>

                            <?php if ($email || $phone) { ?>
                            <div class="nav__info__item js-navInfo-item">
                                <h5 class="text-sm tracking-none fw-500">
                                    Свяжитесь с нами
                                </h5>

                                <div class="nav__info__content text-lg text-white mt-16">
                                    <?php if ($email) { ?>
                                    <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                                    <?php } ?>
                                    <?php if ($phone) { ?>
                                    <a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>
<?php
endif;
