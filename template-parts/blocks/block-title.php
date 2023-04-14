<?php ?>
<!-- section start -->
<section class="layout-pt-pageHeader layout-pb-xs">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row">
            <div class="col-xl-7 col-lg-8">
<!--                --><?php //echo astra_get_breadcrumb(); ?>
                <ul class="breadcrumbs text-black mb-40">
                    <li class="breadcrumbs-item">
                        <a data-barba href="/">
                            Главная
                        </a>
                    </li>
                    <li class="breadcrumbs-item active" aria-current="page">
                        <?php echo the_title() ?>
                    </li>
                </ul>

                <div class="sectionHeading -lg">
                    <h1 class="sectionHeading__title">
                        <?php the_title() ?>
                    </h1>
                </div>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
</section>
<!-- section end -->
