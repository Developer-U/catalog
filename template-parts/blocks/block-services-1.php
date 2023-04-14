<?php
$development_description = get_field('service_development_description');
$leads_description = get_field('service_leads_description');
$branding_description = get_field('service_branding_description');
?>
<!-- section start -->
<section class="layout-pt-sm layout-pb-sm">
    <!-- container start -->
    <div class="container">

        <!-- row start -->
        <div data-anim-wrap class="row x-gap-60 y-gap-48 layout-pt-xs">

            <div class="col-lg-4 col-md-6">
                <div class="serviceCard">
                    <div class="serviceCard__content">
                        <div class="d-flex align-items-center ml-minus-4">
                            <div data-anim-child="img-right cover-dark-2" class="px-20 py-20 bg-white shadow-light rounded-full">
                                <i class="size-md str-width-md text-accent" data-feather="edit"></i>
                            </div>
                        </div>

                        <h3 class="serviceCard__title text-2xl fw-500 tacking-none mt-32">
                            <a href="<?php echo site_url()?>/services#development">Разработка</a>
                        </h3>

                        <p class="serviceCard__text mt-16">
                            <?php echo $development_description ?>
                        </p>

                        <div class="text-black mt-24">
                            <p class="mt-8 fw-500"><a href="<?php echo site_url()?>/service/site-development">Создание веб-сайта</a></p>
                            <p class="mt-8 fw-500"><a href="<?php echo site_url()?>/service/site-support">Поддержка веб-сайта</a></p>
                            <p class="mt-8 fw-500"><a href="<?php echo site_url()?>/service/seo-optimization">SEO-оптимизация</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="serviceCard">
                    <div class="serviceCard__content">
                        <div class="d-flex align-items-center ml-minus-4">
                            <div data-anim-child="img-right cover-dark-2" class="px-20 py-20 bg-white shadow-light rounded-full">
                                <i class="size-md str-width-md text-accent" data-feather="sliders"></i>
                            </div>
                        </div>

                        <h3 class="serviceCard__title text-2xl fw-500 tacking-none mt-32">
                            <a href="<?php echo site_url()?>/services#leads">Лидогенерация</a>
                        </h3>

                        <p class="serviceCard__text mt-16">
                            <?php echo $leads_description ?>
                        </p>

                        <div class="text-black mt-24">
                            <p class="mt-8 fw-500"><a href="<?php echo site_url()?>/service/context-ads">Контекстная реклама</a></p>
                            <p class="mt-8 fw-500"><a href="<?php echo site_url()?>/service/target">Таргет</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="serviceCard">
                    <div class="serviceCard__content">
                        <div class="d-flex align-items-center ml-minus-4">
                            <div data-anim-child="img-right cover-dark-2" class="px-20 py-20 bg-white shadow-light rounded-full">
                                <i class="size-md str-width-md text-accent" data-feather="feather"></i>
                            </div>
                        </div>

                        <h3 class="serviceCard__title text-2xl fw-500 tacking-none mt-32">
                            <a href="<?php echo site_url()?>/services#branding">Брендинг</a>
                        </h3>

                        <p class="serviceCard__text mt-16">
                            <?php echo $branding_description ?>
                        </p>

                        <div class="text-black mt-24">
                            <p class="mt-8 fw-500"><a href="<?php echo site_url()?>/service/design">Дизайн</a></p>
                            <p class="mt-8 fw-500"><a href="<?php echo site_url()?>/service/copyrighting">Копирайтинг</a></p>
                            <p class="mt-8 fw-500"><a href="<?php echo site_url()?>/service/marketing">Маркетинг</a></p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- row end -->

    </div>
    <!-- container end -->
</section>
<!-- section end -->