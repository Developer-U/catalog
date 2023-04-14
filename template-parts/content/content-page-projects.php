<?php get_template_part( 'template-parts/blocks/block-title' ); ?>

<!-- section start -->
<section class="pt-12 layout-pb-xs">
    <div class="section-filter">

        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row y-gap-32 justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="filter-button-group text-dark fw-500">
                        <button class="mt-12 button mr-20 btn-active" data-filter="*">Показать все</button>
                        <button class="mt-12 button mr-20" data-filter=".site-development">Создание сайта</button>
                        <button class="mt-12 button mr-20" data-filter=".site-support">Поддержка сайта</button>
                        <button class="mt-12 button mr-20" data-filter=".seo-optimization">SEO-оптимизация</button>
                        <button class="mt-12 button mr-20" data-filter=".context-ads">Контекстная реклама</button>
                        <button class="mt-12 button mr-20" data-filter=".target">Таргет</button>
                        <button class="mt-12 button mr-20" data-filter=".design">Дизайн</button>
                        <!--<button class="button mr-20" data-filter=".copyrighting">Копирайтинг</button>-->
                        <button class="mt-12 button mr-20" data-filter=".marketing">Маркетинг</button>
                    </div>
                </div>

            </div>
            <!-- row end -->
        </div>
        <!-- container end -->


        <!-- container start -->
        <div class="container layout-pt-sm">
            <div class="masonry -col-3 -gap-32">
                <div class="masonry__sizer"></div>
                <?php $query = new WP_Query( 'post_type=project&showposts=-1' );
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        get_template_part('template-parts/blocks/block-project');
                    }
                } ?>
            </div>
        </div>
        <!-- container end -->

    </div>
</section>
<!-- section end -->

<?php get_template_part( 'template-parts/blocks/block-request' ); ?>

