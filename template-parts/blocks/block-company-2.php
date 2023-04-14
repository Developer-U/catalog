<?php

$image = get_stylesheet_directory_uri().'/img/all1.jpg';
?>
<!-- section start -->
<section class="layout-pt-lg layout-pb-md">
    <!-- container start -->
    <div class="container-fluid px-0">
        <!-- row start -->
        <div class="row no-gutters align-items-center">

            <div class="col-lg-6 z-1">
                <div >
                    <div class="ratio ratio-3:2" data-parallax="1">
                        <img data-parallax-target class="js-lazy" src="#" data-src="<?php echo $image ?>" alt="Back image">
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4 z-2 ml-80 md:ml-0 md:mt-48">
                <div class="sectionHeading -xl md:container pt-16">
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
                    <div >
                        <p class="sectionHeading__subtitle">команда</p>
                    </div>                
                   
                    <div class="ml-minus-col-1 lg:ml-minus-lg mr-minus-col-2 md:ml-0 md:mr-0">
                        <h2 class="sectionHeading__title mt-48 md:mt-24">
                            Наша команда<br>Dream-team
                        </h2>
                    </div>               
                    
                    <div >
                        <p class="mt-56 lg:mt-40 md:mt-20">
                            <?php the_content(); ?>
                        </p>
                    </div>                   
                </div>
            </div>

        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
</section>
<!-- section end -->
